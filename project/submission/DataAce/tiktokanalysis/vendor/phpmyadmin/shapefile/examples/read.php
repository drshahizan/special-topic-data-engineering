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

use PhpMyAdmin\ShapeFile\ShapeFile;

/**
 * Displays content of given file.
 *
 * @param string $filename File to open
 */
function display_file(string $filename): void
{
    $shp = new ShapeFile(1);
    $shp->loadFromFile($filename);

    $i = 1;
    foreach ($shp->records as $i => $record) {
        echo '<pre>';
        echo 'Record No. ' . $i . ':' . "\n\n\n";
        // All the data related to the record
        echo 'SHP Data = ';
        print_r($record->shpData);
        print_r("\n\n\n");
        // All the information related to each record
        echo 'DBF Data = ';
        print_r($record->dbfData);
        print_r("\n\n\n");
        echo '</pre>';
    }

    echo 'The ShapeFile was completely read.<br>' . "\n";
    echo 'Return to the <a href="index.php">index</a>.';
}
