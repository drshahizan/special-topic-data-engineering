<?php

/**
 * This file is part of PHP K-Means
 *
 * Copyright (c) 2014 Benjamin Delespierre
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace KMeans;

class Space extends \SplObjectStorage
{
    protected $dimention;

    protected static $rng = 'mt_rand';

    public function __construct($dimention)
    {
        if ($dimention < 1) {
            throw new \LogicException("a space dimention cannot be null or negative");
        }

        $this->dimention = $dimention;
    }

    public static function setRng(callable $fn): void
    {
        static::$rng = $fn;
    }

    public function toArray(): array
    {
        $points = [];
        foreach ($this as $point) {
            $points[] = $point->toArray();
        }

        return ['points' => $points];
    }

    public function newPoint(array $coordinates): Point
    {
        if (count($coordinates) != $this->dimention) {
            throw new \LogicException("(" . implode(',', $coordinates) . ") is not a point of this space");
        }

        return new Point($this, $coordinates);
    }

    public function addPoint(array $coordinates, $data = null): Point
    {
        $this->attach($point = $this->newPoint($coordinates), $data);

        return $point;
    }

    public function attach($point, $data = null): void
    {
        if (!$point instanceof Point) {
            throw new \InvalidArgumentException("can only attach points to spaces");
        }

        parent::attach($point, $data);
    }

    public function getDimention(): int
    {
        return $this->dimention;
    }

    public function getBoundaries(): array
    {
        if (!count($this)) {
            return [];
        }

        $min = $this->newPoint(array_fill(0, $this->dimention, null));
        $max = $this->newPoint(array_fill(0, $this->dimention, null));

        foreach ($this as $point) {
            for ($n = 0; $n < $this->dimention; $n++) {
                if ($min[$n] === null || $min[$n] > $point[$n]) {
                    $min[$n] = $point[$n];
                }

                if ($max[$n] === null || $max[$n] < $point[$n]) {
                    $max[$n] = $point[$n];
                }
            }
        }

        return [$min, $max];
    }

    public function getRandomPoint(Point $min, Point $max): Point
    {
        $point = $this->newPoint(array_fill(0, $this->dimention, null));
        $rng = static::$rng;

        for ($n = 0; $n < $this->dimention; $n++) {
            $point[$n] = $rng($min[$n], $max[$n]);
        }

        return $point;
    }

    public function solve(int $nbClusters, callable $iterationCallback = null, $initMethod = Cluster::INIT_RANDOM): array
    {
        // initialize K clusters
        $clusters = $this->initializeClusters($nbClusters, $initMethod);

        // there's only one cluster, clusterization has no meaning
        if (count($clusters) == 1) {
            return $clusters;
        }

        // until convergence is reached
        do {
            if ($iterationCallback) {
                $iterationCallback($this, $clusters);
            }
        } while ($this->iterate($clusters));

        // clustering is done.
        return $clusters;
    }

    protected function initializeClusters(int $nbClusters, int $initMethod): array
    {
        if ($nbClusters <= 0) {
            throw new \InvalidArgumentException("invalid clusters number");
        }

        switch ($initMethod) {
            case Cluster::INIT_RANDOM:
                $clusters = $this->initializeRandomClusters($nbClusters);

                break;

            case Cluster::INIT_KMEANS_PLUS_PLUS:
                $clusters = $this->initializeKmeansPlusPlusClusters($nbClusters);

                break;

            default:
                return [];
        }

        // assign all points to the first cluster
        $clusters[0]->attachAll($this);

        return $clusters;
    }

    protected function initializeKmeansPlusPlusClusters(int $nbClusters): array
    {
        $clusters = [];
        $clusters[] = new Cluster($this, $this->current()->getCoordinates());

        for ($i = 1; $i < $nbClusters; ++$i) {
            $sum = 0;
            $distances = [];
            foreach ($this as $point) {
                $distance = $point->getDistanceWith($point->getClosest($clusters), false);
                $distances[] = $distance;
                $sum += $distance;
            }

            $probabilities = [];
            foreach ($distances as $distance) {
                $probabilities[] = $distance / $sum;
            }

            $cumulativeProbabilities = array_reduce($probabilities, function ($c, $i) {
                $c[] = end($c) + $i;
                return $c;
            }, []);

            $rng = static::$rng;
            $rand = $rng() / mt_getrandmax();
            foreach ($cumulativeProbabilities as $j => $cumulativeProbability) {
                if ($rand < $cumulativeProbability) {
                    foreach ($this as $key => $value) {
                        if ($j == $key) {
                            $clusters[] = new Cluster($this, $value->getCoordinates());
                            break;
                        }
                    }
                    break;
                }
            }
        }

        return $clusters;
    }

    protected function initializeRandomClusters(int $nbClusters): array
    {
        $clusters = [];

        // get the space boundaries to avoid placing clusters centroid too far from points
        list($min, $max) = $this->getBoundaries();

        // initialize N clusters with a random point within space boundaries
        for ($n = 0; $n < $nbClusters; $n++) {
            $clusters[] = new Cluster($this, $this->getRandomPoint($min, $max)->getCoordinates());
        }
        return $clusters;
    }

    protected function iterate(array $clusters): bool
    {
        $continue = false;

        // migration storages
        $attach = new \SplObjectStorage();
        $detach = new \SplObjectStorage();

        // calculate proximity amongst points and clusters
        foreach ($clusters as $cluster) {
            foreach ($cluster as $point) {
                // find the closest cluster
                $closest = $point->getClosest($clusters);

                // move the point from its old cluster to its closest
                if ($closest !== $cluster) {
                    if (! isset($attach[$closest])) {
                        $attach[$closest] = new \SplObjectStorage();
                    }

                    if (! isset($detach[$cluster])) {
                        $detach[$cluster] = new \SplObjectStorage();
                    }

                    $attach[$closest]->attach($point);
                    $detach[$cluster]->attach($point);

                    $continue = true;
                }
            }
        }

        // perform points migrations
        foreach ($attach as $cluster) {
            $cluster->attachAll($attach[$cluster]);
        }

        foreach ($detach as $cluster) {
            $cluster->detachAll($detach[$cluster]);
        }

        // update all cluster's centroids
        foreach ($clusters as $cluster) {
            $cluster->updateCentroid();
        }

        return $continue;
    }
}
