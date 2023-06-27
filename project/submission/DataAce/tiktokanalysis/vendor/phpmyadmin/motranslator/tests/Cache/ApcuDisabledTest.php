<?php

declare(strict_types=1);

namespace PhpMyAdmin\MoTranslator\Tests\Cache;

use PhpMyAdmin\MoTranslator\Cache\ApcuCache;
use PhpMyAdmin\MoTranslator\CacheException;
use PhpMyAdmin\MoTranslator\MoParser;
use PHPUnit\Framework\TestCase;

use function apcu_enabled;
use function function_exists;

final class ApcuDisabledTest extends TestCase
{
    public function testConstructorApcuNotEnabledThrowsException(): void
    {
        if (function_exists('apcu_enabled') && apcu_enabled()) {
            $this->markTestSkipped('ext-apcu is enabled');
        }

        $this->expectException(CacheException::class);
        $this->expectExceptionMessage('ACPu extension must be installed and enabled');
        new ApcuCache(new MoParser(null), 'foo', 'bar');
    }
}
