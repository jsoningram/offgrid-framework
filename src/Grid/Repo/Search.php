<?php

/**
 * Post Repository: get data for build
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

namespace OG\Grid\Repo;

use OG\Grid\Factory as Grid;

/**
 * Post Repository: get data for build
 */
class Search
{
    /**
     * Get post by search query
     *
     * @return Mixed $collection of grid objects
     */
    public static function get()
    {
        $s = get_search_query();

        $posts = get_posts([
            'numberposts'      => 3,
            's'			       => $s,
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'suppress_filters' => true,
        ]);

        return Grid::build($posts);
    }
}
