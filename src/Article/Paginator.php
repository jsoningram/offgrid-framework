<?php

/**
 * Article Paginator: pagination and load
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

use OG\Article\Generator as Article;

/**
 * Article Paginator: pagination and load
 */
class Paginator
{
    /**
     * Register actions for ajax
     *
     * @return void
     */
    public function __construct()
    {
        add_action('wp_ajax_loadarticle', [$this, 'load']);
        add_action('wp_ajax_nopriv_loadarticle', [$this, 'load']);
    }

    /**
     * Get offset and category to load articles
     *
     * @return void
     */
    public function load()
    {
        Article::load($_POST['offset'], $_POST['category']);
        die();
    }
}
