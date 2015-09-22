<?php

/**
 * Post Repository: get data for search
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

namespace OG\Search\Repo;

use OG\Article\Factory as Article;

/**
 * Post Repository: get data for article
 */
class Post
{
    /**
     * Get all post with offset and search term
     * offset plus three in cause of post mosaic
     *
     * @param Int $offset number off for get_posts
     * @param String $s search term
     *
     * @return Mixed $collection of grid objects
     */
    public static function all($offset, $category)
    {
        $limit = 12;
        $offset = $offset * $limit + 3;

        $posts = get_posts([
            'numberposts'      => $limit,
            'offset'           => $offset,
            's'		           => $category,
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'suppress_filters' => true,
        ]);

        if ($posts) {
            return Article::build($posts);
        }

        return null;
    }
}
