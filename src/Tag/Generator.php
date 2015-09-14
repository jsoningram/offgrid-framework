<?php

/**
 * Tag Generator: load template for blog roll
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

namespace OG\Tag;

/**
 * Tag Generator: load template for blog roll
 */
class Generator
{
    const PATH = '/templates/tag/blog-roll.php';

    /**
     * Load template
     *
     * @param Int $offset number off for pagination
     *
     * @return void
     */
    public static function load($offset = 0, $tag = 0)
    {
        $tag    = get_term_by('name', $tag, 'post_tag');
        $offset = $offset;

        if ($tag) {
            $tag = $tag->term_id;
        } else {
            $tag = get_query_var('tag_id');
        }

        require get_stylesheet_directory() . self::PATH;
    }
}
