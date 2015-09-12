<?php

/**
 * Article Factory: build from posts
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
 * Article Factory: build from posts
 */
class Factory
{
    /**
     * Build object from posts
     *
     * @param Mixed $posts
     *
     * @return Mixed collection of posts
     */
    public static function build($posts)
    {
        $collection = [];

        for ($i = 0; $i < count($posts); $i++) {

           $post = new \StdClass;

           $post->id      = $posts[$i]->ID;
           $post->title   = $posts[$i]->post_title;

           $post->date    = get_the_date('F j, Y', $posts[$i]->ID);
           $post->author  = get_the_author_meta(
               'display_name', $posts[$i]->post_author);

           $post->link    = get_permalink($posts[$i]->ID);
           $post->excerpt = $posts[$i]->post_excerpt;

           $post->tags    = wp_get_post_tags($posts[$i]->ID);
           $post->image   = wp_get_attachment_image_src(
               get_post_thumbnail_id(
                   $posts[$i]->ID), "medium"
               )[0];

           $collection[$i] = $post;
        }

        return $collection;
    }
}
