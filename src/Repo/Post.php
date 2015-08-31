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

namespace OG\Repo;

use OG\Grid\Factory as Grid;

/**
 * Post Repository: get data for build
 */
class Post
{
    /**
     * Get all post
     *
     * @return Mixed $collection of grid objects
     */
    public static function all()
    {
        $posts = get_posts([
            'numberposts'      => 24,
            'offset'           => 0,
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'suppress_filters' => true,
        ]);

        return Grid::build($posts);
    }

    /**
     * Get post by category
     *
     * @param Integer $id represents category
     *
     * @param Mixed $collection of grid objects
     */
    public static function category($id)
    {
        $posts = get_posts([
            'numberposts'      => 3,
            'category'         => $id,
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'suppress_filters' => true,
        ]);

        return Grid::build($posts);
    }
}
