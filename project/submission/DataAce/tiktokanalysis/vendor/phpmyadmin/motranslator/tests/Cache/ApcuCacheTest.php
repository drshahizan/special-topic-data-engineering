<?php

declare(strict_types=1);

namespace PhpMyAdmin\MoTranslator\Tests\Cache;

use PhpMyAdmin\MoTranslator\Cache\ApcuCache;
use PhpMyAdmin\MoTranslator\MoParser;
use PHPUnit\Framework\TestCase;
use ReflectionMethod;

use function apcu_clear_cache;
use function apcu_delete;
use function apcu_enabled;
use function apcu_entry;
use function apcu_fetch;
use function chr;
use function explode;
use function function_exists;
use function implode;
use function sleep;

/**
 * @covers \PhpMyAdmin\MoTranslator\Cache\ApcuCache
 */
class ApcuCacheTest extends TestCase
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

    public function testConstructorLoadsCache(): void
    {
        $expected = 'Pole';
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';

        new ApcuCache(new MoParser(__DIR__ . '/../data/little.mo'), $locale, $domain);

        $actual = apcu_fetch('mo_' . $locale . '.' . $domain . '.' . $msgid);
        $this->assertSame($expected, $actual);
    }

    public function testConstructorSetsTtl(): void
    {
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';
        $ttl = 1;

        new ApcuCache(new MoParser(__DIR__ . '/../data/little.mo'), $locale, $domain, $ttl);
        sleep($ttl * 2);

        apcu_fetch('mo_' . $locale . '.' . $domain . '.' . $msgid, $success);
        $this->assertFalse($success);
        apcu_fetch('mo_' . $locale . '.' . $domain . '.' . ApcuCache::LOADED_KEY, $success);
        $this->assertFalse($success);
    }

    public function testConstructorSetsReloadOnMiss(): void
    {
        $expected = 'Column';
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';
        $prefix = 'baz_';

        $cache = new ApcuCache(
            new MoParser(__DIR__ . '/../data/little.mo'),
            $locale,
            $domain,
            0,
            false,
            $prefix
        );

        apcu_delete($prefix . $locale . '.' . $domain . '.' . $msgid);
        $actual = $cache->get($msgid);
        $this->assertEquals($expected, $actual);
    }

    public function testConstructorSetsPrefix(): void
    {
        $expected = 'Pole';
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';
        $prefix = 'baz_';

        new ApcuCache(new MoParser(__DIR__ . '/../data/little.mo'), $locale, $domain, 0, true, $prefix);

        $actual = apcu_fetch($prefix . $locale . '.' . $domain . '.' . $msgid);
        $this->assertSame($expected, $actual);
    }

    public function testEnsureTranslationsLoadedSetsLoadedKey(): void
    {
        $expected = 1;
        $locale = 'foo';
        $domain = 'bar';

        new ApcuCache(new MoParser(__DIR__ . '/../data/little.mo'), $locale, $domain);

        $actual = apcu_fetch('mo_' . $locale . '.' . $domain . '.' . ApcuCache::LOADED_KEY);
        $this->assertSame($expected, $actual);
    }

    public function testEnsureTranslationsLoadedHonorsLock(): void
    {
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';

        $lock = 'mo_' . $locale . '.' . $domain . '.' . ApcuCache::LOADED_KEY;
        apcu_entry($lock, static function () {
            sleep(1);

            return 1;
        });

        new ApcuCache(new MoParser(__DIR__ . '/../data/little.mo'), $locale, $domain);

        $actual = apcu_fetch($lock);
        $this->assertSame(1, $actual);
        apcu_fetch('mo_' . $locale . '.' . $domain . '.' . $msgid, $success);
        $this->assertFalse($success);
    }

    public function testGetReturnsMsgstr(): void
    {
        $expected = 'Pole';
        $msgid = 'Column';

        $cache = new ApcuCache(new MoParser(__DIR__ . '/../data/little.mo'), 'foo', 'bar');

        $actual = $cache->get($msgid);
        $this->assertSame($expected, $actual);
    }

    public function testGetReturnsMsgidForCacheMiss(): void
    {
        $expected = 'Column';

        $cache = new ApcuCache(new MoParser(null), 'foo', 'bar');

        $actual = $cache->get($expected);
        $this->assertSame($expected, $actual);
    }

    public function testStoresMsgidOnCacheMiss(): void
    {
        $expected = 'Column';
        $locale = 'foo';
        $domain = 'bar';

        $cache = new ApcuCache(new MoParser(null), $locale, $domain);
        $cache->get($expected);

        $actual = apcu_fetch('mo_' . $locale . '.' . $domain . '.' . $expected);
        $this->assertSame($expected, $actual);
    }

    public function testGetReloadsOnCacheMiss(): void
    {
        $expected = 'Pole';
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';

        $cache = new ApcuCache(new MoParser(__DIR__ . '/../data/little.mo'), $locale, $domain);

        apcu_delete('mo_' . $locale . '.' . $domain . '.' . ApcuCache::LOADED_KEY);
        $actual = $cache->get($msgid);
        $this->assertSame($expected, $actual);
    }

    public function testReloadOnMissHonorsLock(): void
    {
        $expected = 'Pole';
        $locale = 'foo';
        $domain = 'bar';
        $msgid = 'Column';

        $cache = new ApcuCache(new MoParser(null), $locale, $domain);

        $method = new ReflectionMethod($cache, 'reloadOnMiss');
        $method->setAccessible(true);

        $key = 'mo_' . $locale . '.' . $domain . '.' . $msgid;
        apcu_entry($key, static function () use ($expected): string {
            sleep(1);

            return $expected;
        });
        $actual = $method->invoke($cache, $msgid);

        $this->assertSame($expected, $actual);
    }

    public function testSetSetsMsgstr(): void
    {
        $expected = 'Pole';
        $msgid = 'Column';

        $cache = new ApcuCache(new MoParser(null), 'foo', 'bar');
        $cache->set($msgid, $expected);

        $actual = $cache->get($msgid);
        $this->assertSame($expected, $actual);
    }

    public function testHasReturnsFalse(): void
    {
        $cache = new ApcuCache(new MoParser(null), 'foo', 'bar');
        $actual = $cache->has('Column');
        $this->assertFalse($actual);
    }

    public function testHasReturnsTrue(): void
    {
        $cache = new ApcuCache(new MoParser(__DIR__ . '/../data/little.mo'), 'foo', 'bar');
        $actual = $cache->has('Column');
        $this->assertTrue($actual);
    }

    public function testSetAllSetsTranslations(): void
    {
        $translations = [
            'foo' => 'bar',
            'and' => 'another',
        ];

        $cache = new ApcuCache(new MoParser(null), 'foo', 'bar');
        $cache->setAll($translations);

        foreach ($translations as $msgid => $expected) {
            $actual = $cache->get($msgid);
            $this->assertEquals($expected, $actual);
        }
    }

    public function testCacheStoresPluralForms(): void
    {
        $expected = ['first', 'second'];
        $plural = ["%d pig went to the market\n", "%d pigs went to the market\n"];
        $msgid = implode(chr(0), $plural);

        $cache = new ApcuCache(new MoParser(null), 'foo', 'bar');
        $cache->set($msgid, implode(chr(0), $expected));

        $msgstr = $cache->get($msgid);
        $actual = explode(chr(0), $msgstr);
        $this->assertSame($expected, $actual);
    }
}
