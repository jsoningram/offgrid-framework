<?php

/**
 * Post Repository: get data for article
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @category Plugin
 * @package  OG\Repo
 * @author   (c) qfor <admin@qfor.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @link     http://qfor.com
 */

namespace OG\Article\Repo;

use OG\Article\Factory as Article;

/**
 * Post Repository: get data for article
 */
class Post
{
    /**
     * Get all post with offset and category
     * offset plus three in cause of post mosaic
     *
     * @param Int $offset number off for get_posts
     *
     * @return Mixed $collection of grid objects
     */
    public static function all($offset)
    {
        $limit = 12;
        $offset = $offset * $limit + 3;
        $id = get_the_category()[0]->cat_ID;

        $posts = get_posts([
            'category'         => $id,
            'numberposts'      => $limit,
            'offset'           => $offset,
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'suppress_filters' => true,
        ]);

        if (count($posts) == $limit) {
            return Article::build($posts);
        }

        return null;
    }
}
