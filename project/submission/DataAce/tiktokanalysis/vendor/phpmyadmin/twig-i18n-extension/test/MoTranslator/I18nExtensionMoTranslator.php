<?php

/*
 * (c) 2021 phpMyAdmin contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PhpMyAdmin\Tests\Twig\Extensions\MoTranslator;

use PhpMyAdmin\Twig\Extensions\I18nExtension as TwigI18nExtension;
use PhpMyAdmin\Twig\Extensions\Node\TransNode;

class I18nExtensionMoTranslator extends TwigI18nExtension
{
    public function __construct()
    {
        TransNode::$notesLabel = '// l10n: ';
        TransNode::$enableMoTranslator = true;
    }

    /**
     * This is only for tests not to be affected by the change
     */
    public function __destruct()
    {
        TransNode::$notesLabel = '// notes: ';
        TransNode::$enableMoTranslator = false;
    }
}
