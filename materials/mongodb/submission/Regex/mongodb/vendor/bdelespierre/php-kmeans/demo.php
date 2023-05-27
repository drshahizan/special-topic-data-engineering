<?php

require "vendor/autoload.php";

// prepare 50 points of 2D space to be clustered
$points = [
    [80,55],[86,59],[19,85],[41,47],[57,58],
    [76,22],[94,60],[13,93],[90,48],[52,54],
    [62,46],[88,44],[85,24],[63,14],[51,40],
    [75,31],[86,62],[81,95],[47,22],[43,95],
    [71,19],[17,65],[69,21],[59,60],[59,12],
    [15,22],[49,93],[56,35],[18,20],[39,59],
    [50,15],[81,36],[67,62],[32,15],[75,65],
    [10,47],[75,18],[13,45],[30,62],[95,79],
    [64,11],[92,14],[94,49],[39,13],[60,68],
    [62,10],[74,44],[37,42],[97,60],[47,73],
];

// create a 2-dimentions space
$space = new KMeans\Space(2);

// add points to space
foreach ($points as $i => $coordinates) {
    $space->addPoint($coordinates);
}

// cluster these 50 points in 3 clusters
$clusters = $space->solve(3);

// display the cluster centers and attached points
foreach ($clusters as $num => $cluster) {
    $coordinates = $cluster->getCoordinates();
    printf(
        "Cluster %s [%d,%d]: %d points\n",
        $num,
        $coordinates[0],
        $coordinates[1],
        count($cluster)
    );
}
