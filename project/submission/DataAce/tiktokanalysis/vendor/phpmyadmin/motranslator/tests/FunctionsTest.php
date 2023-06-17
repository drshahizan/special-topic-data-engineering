<?php

declare(strict_types=1);

namespace PhpMyAdmin\MoTranslator\Tests;

use PhpMyAdmin\MoTranslator\Loader;
use PHPUnit\Framework\TestCase;

/**
 * Test for functions.
 */
class FunctionsTest extends TestCase
{
    public function setUp(): void
    {
        Loader::loadFunctions();

        _setlocale(0, 'cs');
        _textdomain('phpmyadmin');
        _bindtextdomain('phpmyadmin', __DIR__ . '/data/locale/');
        _bind_textdomain_codeset('phpmyadmin', 'UTF-8');
    }

    public function testGettext(): void
    {
        $this->assertEquals(
            'Typ',
            _gettext('Type')
        );

        $this->assertEquals(
            'Typ',
            __('Type')
        );

        $this->assertEquals(
            '%d sekundy',
            _ngettext(
                '%d second',
                '%d seconds',
                2
            )
        );

        $this->assertEquals(
            '%d seconds',
            _npgettext(
                'context',
                '%d second',
                '%d seconds',
                2
            )
        );

        $this->assertEquals(
            'Tabulka',
            _pgettext(
                'Display format',
                'Table'
            )
        );
    }

    public function testDomain(): void
    {
        $this->assertEquals(
            'Typ',
            _dgettext('phpmyadmin', 'Type')
        );

        $this->assertEquals(
            '%d sekundy',
            _dngettext(
                'phpmyadmin',
                '%d second',
                '%d seconds',
                2
            )
        );

        $this->assertEquals(
            '%d seconds',
            _dnpgettext(
                'phpmyadmin',
                'context',
                '%d second',
                '%d seconds',
                2
            )
        );

        $this->assertEquals(
            'Tabulka',
            _dpgettext(
                'phpmyadmin',
                'Display format',
                'Table'
            )
        );
    }
}
