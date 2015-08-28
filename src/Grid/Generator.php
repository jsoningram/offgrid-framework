<?php

/**
 * Grid Generator: load mosaic from posts
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @category Must-Use Plugin
 * @package  MU\Grid
 * @author   (c) qfor <admin@qfor.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @link     http://qfor.com
 */

namespace OG\Grid;

/**
 * Grid Generator: load mosaic from posts
 */
class Generator
{
    const PATH = '/templates/home/content-mosaic.php';

    public static function load()
    {
        require get_stylesheet_directory() . self::PATH;
    }
}
