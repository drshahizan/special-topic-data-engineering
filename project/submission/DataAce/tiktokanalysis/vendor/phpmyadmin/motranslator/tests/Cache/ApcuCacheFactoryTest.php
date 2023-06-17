<?php

declare(strict_types=1);

namespace PhpMyAdmin\MoTranslator\Tests\Cache;

use PhpMyAdmin\MoTranslator\Cache\ApcuCache;
use PhpMyAdmin\MoTranslator\Cache\ApcuCacheFactory;
use PhpMyAdmin\MoTranslator\MoParser;
use PHPUnit\Framework\TestCase;

use function apcu_clear_cache;
use function apcu_delete;
use function apcu_enabled;
use function apcu_fetch;
use function function_exists;
use function sleep;

/**
 * @covers \PhpMyAdmin\MoTranslator\Cache\ApcuCacheFactory
 */
class ApcuCacheFactoryTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        if (function_exists('apcu_enabled') && apcu_enabled()) {
            return;
        }

        $this->markTestSkipped('ACPu extension is not installed and enabled for CLI');
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        apcu_clear_cache();
    }

    public function testGetInstanceReturnApcuCache(): void
    {
        $factory = new ApcuCacheFactory();
        $instance = $factory->getInstance(new MoParser(null), 'foo', 'bar');
        $this->assertInstanceOf(ApcuCache::class, $instance);
    }

    public function testConstructorSetsTtl(): void
    {
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';
        $ttl = 1;

        $factory = new ApcuCacheFactory($ttl);
        $parser = new MoParser(__DIR__ . '/../data/little.mo');
        $factory->getInstance($parser, $locale, $domain);
        sleep($ttl * 2);

        apcu_fetch('mo_' . $locale . '.' . $domain . '.' . $msgid, $success);
        $this->assertFalse($success);
    }

    public function testConstructorSetsReloadOnMiss(): void
    {
        $expected = 'Column';
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';

        $factory = new ApcuCacheFactory(0, false);
        $parser = new MoParser(__DIR__ . '/../data/little.mo');

        $instance = $factory->getInstance($parser, $locale, $domain);

        apcu_delete('mo_' . $locale . '.' . $domain . '.' . $msgid);
        $actual = $instance->get($msgid);
        $this->assertSame($expected, $actual);
    }

    public function testConstructorSetsPrefix(): void
    {
        $expected = 'Pole';
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';
        $prefix = 'baz_';

        $factory = new ApcuCacheFactory(0, true, $prefix);
        $parser = new MoParser(__DIR__ . '/../data/little.mo');

        $factory->getInstance($parser, $locale, $domain);

        $actual = apcu_fetch($prefix . $locale . '.' . $domain . '.' . $msgid);
        $this->assertSame($expected, $actual);
    }
}
