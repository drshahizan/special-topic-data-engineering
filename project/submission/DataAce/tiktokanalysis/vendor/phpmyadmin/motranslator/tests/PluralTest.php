<?php

declare(strict_types=1);

namespace PhpMyAdmin\MoTranslator\Tests;

use PhpMyAdmin\MoTranslator\Cache\InMemoryCache;
use PhpMyAdmin\MoTranslator\MoParser;
use PhpMyAdmin\MoTranslator\Translator;
use PHPUnit\Framework\TestCase;

use function chr;
use function implode;

/**
 * Test for gettext parsing.
 */
class PluralTest extends TestCase
{
    /**
     * Test for npgettext.
     *
     * @param int    $number   Number
     * @param string $expected Expected output
     *
     * @dataProvider providerTestNpgettext
     */
    public function testNpgettext(int $number, string $expected): void
    {
        $parser = $this->getTranslator('');
        $result = $parser->npgettext('context', "%d pig went to the market\n", "%d pigs went to the market\n", $number);
        $this->assertSame($expected, $result);
    }

    /**
     * Data provider for test_npgettext.
     *
     * @return array[]
     */
    public static function providerTestNpgettext(): array
    {
        return [
            [
                1,
                "%d pig went to the market\n",
            ],
            [
                2,
                "%d pigs went to the market\n",
            ],
        ];
    }

    /**
     * Test for ngettext
     */
    public function testNgettext(): void
    {
        $parser = $this->getTranslator('');
        $translationKey = implode(chr(0), ["%d pig went to the market\n", "%d pigs went to the market\n"]);
        $parser->setTranslation($translationKey, '');
        $result = $parser->ngettext("%d pig went to the market\n", "%d pigs went to the market\n", 1);
        $this->assertSame('', $result);
    }

    /**
     * @return array[]
     */
    public function dataProviderPluralForms(): array
    {
        return [
            ['Plural-Forms: nplurals=2; plural=n != 1;'],
            ['Plural-Forms: nplurals=1; plural=0;'],
            ['Plural-Forms: nplurals=2; plural=(n > 1);'],
            [
                'Plural-Forms: nplurals=3; plural=n%10==1 && n%100!=11 ? 0 : n'
                . '%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;',
            ],
            ['Plural-Forms: nplurals=2; plural=n >= 2 && (n < 11 || n > 99);'],
            ['Plural-Forms: nplurals=4; plural=n%100==1 ? 0 : n%100==2 ? 1 : n%100==3 || n%100==4 ? 2 : 3;'],
            ['Plural-Forms: nplurals=3; plural=n==1 ? 0 : (n==0 || (n%100 > 0 && n%100 < 20)) ? 1 : 2;'],
            [
                'Plural-Forms: nplurals=2; plural=n != 1 && n != 2 && n != 3 &'
            . '& (n % 10 == 4 || n % 10 == 6 || n % 10 == 9);',
            ],
        ];
    }

    /**
     * Test for ngettext
     *
     * @see https://github.com/phpmyadmin/motranslator/issues/37
     *
     * @dataProvider dataProviderPluralForms
     */
    public function testNgettextSelectString(string $pluralForms): void
    {
        $parser = $this->getTranslator('');
        $parser->setTranslation(
            '',
            "Project-Id-Version: phpMyAdmin 5.1.0-dev\n"
            . "Report-Msgid-Bugs-To: translators@phpmyadmin.net\n"
            . "PO-Revision-Date: 2020-09-01 09:12+0000\n"
            . "Last-Translator: William Desportes <williamdes@wdes.fr>\n"
            . 'Language-Team: English (United Kingdom) '
            . "<https:\/\/hosted.weblate.org\/projects\/phpmyadmin\/master\/en_GB\/>\n"
            . "Language: en_GB\n"
            . "MIME-Version: 1.0\n"
            . "Content-Type: text\/plain; charset=UTF-8\n"
            . "Content-Transfer-Encoding: 8bit\n"
            . $pluralForms . "\n"
            . "X-Generator: Weblate 4.2.1-dev\n"
            . ''
        );
        $translationKey = implode(chr(0), ["%d pig went to the market\n", "%d pigs went to the market\n"]);
        $parser->setTranslation($translationKey, 'ok');
        $result = $parser->ngettext("%d pig went to the market\n", "%d pigs went to the market\n", 1);
        $this->assertSame('ok', $result);
    }

    private function getTranslator(string $filename): Translator
    {
        return new Translator(new InMemoryCache(new MoParser($filename)));
    }
}
