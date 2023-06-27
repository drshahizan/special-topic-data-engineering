<?php

declare(strict_types=1);

/**
 * phpMyAdmin ShapeFile library
 * <https://github.com/phpmyadmin/shapefile/>.
 *
 * Copyright 2006-2007 Ovidio <ovidio AT users.sourceforge.net>
 * Copyright 2016 - 2017 Michal Čihař <michal@cihar.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, you can download one from
 * https://www.gnu.org/copyleft/gpl.html.
 */

namespace ShapeFileTest;

use PhpMyAdmin\ShapeFile\ShapeFile;
use PhpMyAdmin\ShapeFile\ShapeRecord;
use PHPUnit\Framework\TestCase;
use function count;

class ShapeFileTest extends TestCase
{
    /**
     * Tests loading of a file.
     *
     * @param string   $filename Name of file
     * @param int      $records  Expected number of records
     * @param int|null $parts    Expected number of parts in first record
     *
     * @dataProvider provideFiles
     */
    public function testLoad(string $filename, int $records, ?int $parts): void
    {
        $shp = new ShapeFile(1);
        $shp->loadFromFile($filename);
        $this->assertEquals('', $shp->lastError);
        $this->assertEquals($records, count($shp->records));
        if ($parts === null) {
            return;
        }

        $this->assertEquals($parts, count($shp->records[0]->shpData['parts']));
    }

    /**
     * Data provider for file loading tests.
     *
     * @return array
     */
    public function provideFiles(): array
    {
        return [
            [
                'data/capitals.*',
                652,
                null,
            ],
            [
                'data/mexico.*',
                32,
                3,
            ],
            [
                'data/Czech_Republic_AL2.*',
                1,
                1,
            ],
            [
                'data/w001n05f.*',
                16,
                1,
            ],
            [
                'data/bc_hospitals.*',
                44,
                null,
            ],
            [
                'data/multipoint.*',
                312,
                null,
            ],
        ];
    }

    /**
     * Test error handling in loader.
     *
     * @param string $filename name to load
     *
     * @dataProvider provideErrorFiles
     */
    public function testLoadError(string $filename): void
    {
        $shp = new ShapeFile(1);
        $shp->loadFromFile($filename);
        $this->assertNotEquals('', $shp->lastError);
    }

    /**
     * Test load an empty file name
     */
    public function testLoadEmptyFilename(): void
    {
        $shp = new ShapeFile(1);
        $shp->loadFromFile('');
        if (ShapeFile::supportsDbase()) {
            $this->assertEquals('It wasn\'t possible to find the DBase file ""', $shp->lastError);

            return;
        }
        $this->assertEquals('Not a SHP file (file code mismatch)', $shp->lastError);
    }

    /**
     * Test to call getDBFHeader on a non loaded file
     */
    public function testGetDBFHeader(): void
    {
        $shp = new ShapeFile(1);
        $this->assertNull($shp->getDBFHeader());
    }

    /**
     * Data provider for file loading error tests.
     *
     * @return array
     */
    public function provideErrorFiles(): array
    {
        $result = [
            ['data/no-shp.*'],
            ['data/missing.*'],
            ['data/invalid-shp.*'],
        ];

        if (ShapeFile::supportsDbase()) {
            $result[] = ['data/no-dbf.*'];
            $result[] = ['data/invalid-dbf.*'];
        }

        return $result;
    }

    /**
     * Creates test data.
     */
    private function createTestData(): void
    {
        $shp = new ShapeFile(1);

        $record0 = new ShapeRecord(1);
        $record0->addPoint(['x' => 482131.764567, 'y' => 2143634.39608]);

        $record1 = new ShapeRecord(11);
        $record1->addPoint(['x' => 472131.764567, 'y' => 2143634.39608, 'z' => 220, 'm' => 120]);

        $record2 = new ShapeRecord(21);
        $record2->addPoint(['x' => 492131.764567, 'y' => 2143634.39608, 'z' => 150, 'm' => 80]);

        $record3 = new ShapeRecord(3);
        $record3->addPoint(['x' => 482131.764567, 'y' => 2143634.39608], 0);
        $record3->addPoint(['x' => 482132.764567, 'y' => 2143635.39608], 0);
        $record3->addPoint(['x' => 482131.764567, 'y' => 2143635.39608], 1);
        $record3->addPoint(['x' => 482132.764567, 'y' => 2143636.39608], 1);

        $shp->addRecord($record0);
        $shp->addRecord($record1);
        $shp->addRecord($record2);
        $shp->addRecord($record3);

        $shp->setDBFHeader(
            [
                [
                    'ID',
                    'N',
                    8,
                    0,
                ],
                [
                    'DESC',
                    'C',
                    50,
                    0,
                ],
            ]
        );

        $shp->records[0]->dbfData['ID'] = '1';
        $shp->records[0]->dbfData['DESC'] = 'AAAAAAAAA';

        $shp->records[1]->dbfData['ID'] = '2';
        $shp->records[1]->dbfData['DESC'] = 'BBBBBBBBBB';

        $shp->records[2]->dbfData['ID'] = '3';
        $shp->records[2]->dbfData['DESC'] = 'CCCCCCCCCCC';

        $shp->records[3]->dbfData['ID'] = '4';
        $shp->records[3]->dbfData['DESC'] = 'CCCCCCCCCCC';

        $shp->saveToFile('./data/test_shape.*');
    }

    /**
     * Tests creating file.
     */
    public function testCreate(): void
    {
        if (! ShapeFile::supportsDbase()) {
            $this->markTestSkipped('dbase extension missing');
        }

        $this->createTestData();

        $shp = new ShapeFile(1);
        $shp->loadFromFile('./data/test_shape.*');
        $this->assertEquals(4, count($shp->records));
    }

    /**
     * Tests removing record from a file.
     */
    public function testDelete(): void
    {
        if (! ShapeFile::supportsDbase()) {
            $this->markTestSkipped('dbase extension missing');
        }

        $this->createTestData();

        $shp = new ShapeFile(1);
        $shp->loadFromFile('./data/test_shape.*');
        $shp->deleteRecord(1);
        $shp->saveToFile();
        $this->assertEquals(3, count($shp->records));

        $shp = new ShapeFile(1);
        $shp->loadFromFile('./data/test_shape.*');
        $this->assertEquals(3, count($shp->records));
    }

    /**
     * Test adding record to a file.
     */
    public function testAdd(): void
    {
        if (! ShapeFile::supportsDbase()) {
            $this->markTestSkipped('dbase extension missing');
        }

        $this->createTestData();

        $shp = new ShapeFile(1);
        $shp->loadFromFile('./data/test_shape.*');

        $record0 = new ShapeRecord(1);
        $record0->addPoint(['x' => 482131.764567, 'y' => 2143634.39608]);

        $shp->addRecord($record0);
        $shp->records[4]->dbfData['ID'] = '4';
        $shp->records[4]->dbfData['DESC'] = 'CCCCCCCCCCC';

        $shp->saveToFile();
        $this->assertEquals(5, count($shp->records));

        $shp = new ShapeFile(1);
        $shp->loadFromFile('./data/test_shape.*');
        $this->assertEquals(5, count($shp->records));
    }

    /**
     * Tests saving without DBF.
     */
    public function testSaveNoDBF(): void
    {
        $shp = new ShapeFile(1);
        $shp->saveToFile('./data/test_nodbf.*');
        $this->assertFileNotExists('./data/test_nodbf.dbf');
    }

    /**
     * Test shape naming.
     */
    public function testShapeName(): void
    {
        $obj = new ShapeRecord(1);
        $this->assertEquals('Point', $obj->getShapeName());
        $obj = new ShapeFile(1);
        $this->assertEquals('Point', $obj->getShapeName());
        $obj = new ShapeRecord(-1);
        $this->assertEquals('Shape -1', $obj->getShapeName());
    }

    /**
     * Test shapes save/load round robin.
     *
     * @param int   $type   Shape type
     * @param array $points Points
     *
     * @dataProvider shapes
     */
    public function testShapeSaveLoad(int $type, array $points): void
    {
        $filename = './data/test_shape-' . $type . '.*';
        $shp = new ShapeFile($type);
        $shp->setDBFHeader([
            [
                'ID',
                'N',
                19,
                0,
            ],
            [
                'DESC',
                'C',
                14,
                0,
            ],
        ]);

        $record0 = new ShapeRecord($type);

        foreach ($points as $point) {
            $record0->addPoint($point[0], $point[1]);
        }

        $shp->addRecord($record0);

        $shp->saveToFile($filename);

        $shp2 = new ShapeFile($type);
        $shp2->loadFromFile($filename);

        $this->assertEquals(
            count($shp->records),
            count($shp2->records)
        );

        $record = $shp->records[0];
        $record2 = $shp2->records[0];

        $items = [
            'numparts',
            'numpoints',
        ];
        foreach ($items as $item) {
            if (! isset($record->shpData[$item])) {
                continue;
            }

            $this->assertEquals(
                $record->shpData[$item],
                $record2->shpData[$item]
            );
        }

        /* Test deletion works */
        $record->deletePoint();
    }

    /**
     * Test shapes save/load round robin with z coordinate.
     *
     * @param int   $type   Shape type
     * @param array $points Points
     *
     * @dataProvider shapes
     */
    public function testZetShapeSaveLoad(int $type, array $points): void
    {
        $this->testShapeSaveLoad($type + 10, $points);
    }

    /**
     * Test shapes save/load round robin with measure.
     *
     * @param int   $type   Shape type
     * @param array $points Points
     *
     * @dataProvider shapes
     */
    public function testMeasureShapeSaveLoad(int $type, array $points): void
    {
        $this->testShapeSaveLoad($type + 20, $points);
    }

    /**
     * Data provider for save/load testing.
     *
     * @return array
     */
    public function shapes(): array
    {
        return [
            [
                1,
                [
                    [
                        [
                            'x' => 10,
                            'y' => 20,
                        ],
                        0,
                    ],
                ],
            ],
            [
                3,
                [
                    [
                        [
                            'x' => 10,
                            'y' => 20,
                        ],
                        0,
                    ],
                    [
                        [
                            'x' => 20,
                            'y' => 20,
                        ],
                        0,
                    ],
                    [
                        [
                            'x' => 20,
                            'y' => 20,
                        ],
                        1,
                    ],
                    [
                        [
                            'x' => 20,
                            'y' => 10,
                        ],
                        1,
                    ],
                ],
            ],
            [
                5,
                [
                    [
                        [
                            'x' => 10,
                            'y' => 20,
                        ],
                        0,
                    ],
                    [
                        [
                            'x' => 20,
                            'y' => 20,
                        ],
                        0,
                    ],
                    [
                        [
                            'x' => 20,
                            'y' => 20,
                        ],
                        1,
                    ],
                    [
                        [
                            'x' => 20,
                            'y' => 10,
                        ],
                        1,
                    ],
                    [
                        [
                            'x' => 20,
                            'y' => 10,
                        ],
                        2,
                    ],
                    [
                        [
                            'x' => 10,
                            'y' => 20,
                        ],
                        2,
                    ],
                ],
            ],
            [
                8,
                [
                    [
                        [
                            'x' => 10,
                            'y' => 20,
                        ],
                        0,
                    ],
                    [
                        [
                            'x' => 20,
                            'y' => 20,
                        ],
                        0,
                    ],
                    [
                        [
                            'x' => 20,
                            'y' => 10,
                        ],
                        0,
                    ],
                ],
            ],
        ];
    }

    public function testSearch(): void
    {
        $shp = new ShapeFile(0);
        $shp->loadFromFile('data/capitals.*');
        /* Nonexisting entry or no dbase support */
        $this->assertEquals(
            -1,
            $shp->getIndexFromDBFData('CNTRY_NAME', 'nonexisting')
        );
        if (! ShapeFile::supportsDbase()) {
            return;
        }

        $this->assertEquals(
            218,
            $shp->getIndexFromDBFData('CNTRY_NAME', 'Czech Republic')
        );
    }
}
