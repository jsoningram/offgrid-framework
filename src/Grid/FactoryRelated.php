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
     * @param String $posts of HTML to parse
     *
     * @return Mixed collection of posts
     */
    public static function build($posts)
    {
        $collection = [];

        $document = new \DOMDocument;
        $document->loadHTML($posts);
        $iterator = 0;

        $articles = $document->getElementsByTagName("li");
        foreach ($articles as $article) {
            $post = new \StdClass;

            $links    = $article->getElementsByTagName("a");
            $images   = $article->getElementsByTagName("img");
            $excerpts = $article->getElementsByTagName("small");

            foreach ($links as $link) {
                if (0 == $iterator % 2) {
                    $iterator++;
                    continue;
                }

                $iterator++;

                $post->link = $link->
                    getAttributeNode('href')->value;
                $post->title = $link->textContent;

                $post->category = get_the_category(
                    url_to_postid($post->link)
                )[0]->name;
            }

            foreach ($images as $image) {
                $post->image = $image->
                    getAttributeNode('src')->value;
            }

            foreach ($excerpts as $excerpt) {
                $post->excerpt = $excerpt->textContent;
            }

            $collection[] = $post;
        }

        return $collection;
    }
}
