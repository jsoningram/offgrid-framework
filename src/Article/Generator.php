<?php

/**
 * Article Generator: load mosaic from posts
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

namespace OG\Article;

/**
 * Article Generator: load mosaic from posts
 */
class Generator
{
    const PATH = '/templates/category/blog-roll.php';

    /**
     * Load template
     *
     * @param Int $offset number off for pagination
     *
     * @return void
     */
    public static function load($offset = 0, $category = 0)
    {
        $category = get_cat_ID($category);
        $offset   = $offset;

        if (0 === $category) {
           $category = get_the_category()[0]->cat_ID;
        }

        require get_stylesheet_directory() . self::PATH;
    }
}
