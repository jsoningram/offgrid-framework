<?php

/**
 * Search Generator: load template for blog roll
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

namespace OG\Author;

/**
 * Author Generator: load template for blog roll
 */
class Generator
{
    const PATH = '/templates/author/blog-roll.php';

    /**
     * Load template
     *
     * @param Int $offset number off for pagination
     *
     * @return void
     */
    public static function load($offset = 0, $category = 0)
    {
        $category = get_the_author_meta( 'ID' );
        $offset = $offset;

        require get_stylesheet_directory() . self::PATH;
    }
}
