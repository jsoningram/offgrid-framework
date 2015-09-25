<?php

/**
 * Grid Factory for Related: build from posts
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

namespace OG\Grid;

/**
 * Grid Factory for Related: build from posts
 */
class FactoryRelated
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

        $document = new \DOMDocument;
        $document->loadHTML($posts);
        $list = $document->getElementsByTagName("li");
        $images  = $document->getElementsByTagName("img");
        foreach ($list as $node) {
            $collection[] = $node->nodeValue;
        }

        var_dump($collection); die();

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
