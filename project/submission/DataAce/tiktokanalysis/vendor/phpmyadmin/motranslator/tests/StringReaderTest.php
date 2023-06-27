<?php

declare(strict_types=1);

namespace PhpMyAdmin\MoTranslator\Tests;

use PhpMyAdmin\MoTranslator\StringReader;
use PHPUnit\Framework\TestCase;

use function file_put_contents;
use function sys_get_temp_dir;
use function tempnam;
use function unlink;

class StringReaderTest extends TestCase
{
    public function testReadFails(): void
    {
        $tempFile = (string) tempnam(sys_get_temp_dir(), 'phpMyAdmin_StringReaderTest');
        $this->assertFileExists($tempFile);
        $stringReader = new StringReader($tempFile);
        unlink($tempFile);
        $actual = $stringReader->read(-1, -1);
        $this->assertSame('', $actual);
    }

    public function testReadIntArray(): void
    {
        $tempFile = (string) tempnam(sys_get_temp_dir(), 'phpMyAdmin_StringReaderTest');
        file_put_contents($tempFile, "\0\0\0\0\0\0\0\0\0\0\0\0");
        $this->assertFileExists($tempFile);
        $stringReader = new StringReader($tempFile);
        unlink($tempFile);
        $actual = $stringReader->readintarray('V', 2, 2);
        $this->assertSame([
            1 => 0,
            2 => 0,
        ], $actual);
    }
}
