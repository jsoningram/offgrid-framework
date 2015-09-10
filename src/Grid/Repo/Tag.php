<?php

/**
 * Tag Repository: get data for build
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
 * Tag Repository: get data for build
 */
class Tag
{
    /**
     * Get post by tag
     *
     * @param Integer $tag slug of taxonomy
     *
     * @return Mixed $collection of grid objects
     */
    public static function get($tag)
    {
        $posts = get_posts([
            'numberposts'      => 3,
            'tag'              => $tag,
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'suppress_filters' => true,
        ]);

        return Grid::build($posts);
    }
}
