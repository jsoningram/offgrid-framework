<?php

/**
 * Grid Generator: load mosaic from posts
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @category Plugin
 * @package  OG\Grid
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

    /**
     * Load template
     *
     * @param Int $offset number off for pagination
     *
     * @return void
     */
    public static function load($offset = 0)
    {
        $offset = $offset;
        require get_stylesheet_directory() . self::PATH;
    }
}
