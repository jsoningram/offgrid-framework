<?php

/**
 * Grid factory: build from posts
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
 * Grid factory: build from posts
 */
class Factory
{
    /**
     * Builld object from posts
     *
     * @param Mixed $posts
     *
     * @return Mixed collection of posts
     */
    public static function build($posts)
    {
        for ($i = 0; $i < count($posts); $i++) {

           $post = new \StdClass;
           $post->category = get_the_category($posts[$i]->ID)[0]->name;
           $post->link     = get_permalink($posts[$i]->ID);
           $post->excerpt  = $posts[$i]->post_excerpt;
           $post->title    = $posts[$i]->post_title;
           $post->image = wp_get_attachment_image_src(
               get_post_thumbnail_id(
                   $posts[$i]->ID), "large"
               )[0];

           $collection[$i] = $post;
        }

        return $collection;
    }
}
