<?php

/**
 * Video Connector: connect request with service
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

namespace OG\Video;

use OG\Video\Generator;

/**
 * Grid Paginator: pagination and load
 */
class Connector
{
   protected $generate;

    /**
     * Register actions for ajax
     *
     * @return void
     */
    public function __construct()
    {
        $this->generate = new Generator;
        add_action('wp_ajax_loadvideo', [$this, 'load']);
        add_action('wp_ajax_nopriv_loadvideo', [$this, 'load']);
    }

    /**
     * Get offset and load grid
     *
     * @return void
     */
    public function load()
    {
        $this->generate->video();
        die();
    }
}
