<?php

/**
 * @package    Joomla.Language
 *
 * @copyright  (C) 2010 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 *
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:تمكين PSR1.files.SideEffects

/**
 * ar-AA localise class
 *
 * @since	1.6
 */
abstract class Ar_AALocalise
{
    /**
     * Returns the potential suffixes for a specific number of items
     *
     * @param	int $count  The number of items.
     *
     * @return	array  An array of potential suffixes.
     *
     * @since	1.6
     */
    public static function getPluralSuffixes($count)
    {
        switch ($count) {
            case 0:
                return ['0'];

            case 1:
                return ['ONE', '1'];
        }

        return ['OTHER', 'MORE'];
    }
}
