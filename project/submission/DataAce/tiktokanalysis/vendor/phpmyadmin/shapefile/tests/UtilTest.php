<?php

declare(strict_types=1);

/**
 * phpMyAdmin ShapeFile library
 * <https://github.com/phpmyadmin/shapefile/>.
 *
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

namespace UtilTest;

use PhpMyAdmin\ShapeFile\Util;
use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase
{
    /**
     * Test data loading.
     *
     * @param string       $type     Data type
     * @param string|false $data     Data to parse
     * @param string|false $expected Expected result
     *
     * @dataProvider data
     */
    public function testLoadData(string $type, $data, $expected): void
    {
        $this->assertEquals(
            $expected,
            Util::loadData($type, $data)
        );
    }

    /**
     * Data provider for loadData tests.
     *
     * @return array
     */
    public function data(): array
    {
        return [
            [
                'N',
                '',
                false,
            ],
            [
                'N',
                false,
                false,
            ],
            [
                'N',
                "\x01\x02\x03\x04",
                0x01020304,
            ],
        ];
    }

    /**
     * Test for byte order changes.
     */
    public function testSwap(): void
    {
        $this->assertEquals(
            "\x01\x02\x03\x04",
            Util::swap("\x04\x03\x02\x01")
        );
    }
}
