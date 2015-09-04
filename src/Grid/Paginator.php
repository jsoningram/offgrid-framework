<?php

/**
 * Grid Paginator: pagination and load
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

use OG\Grid\Generator as Grid;

/**
 * Grid Paginator: pagination and load
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
        add_action('wp_ajax_loadmosaic', [$this, 'load']);
        add_action('wp_ajax_nopriv_loadmosaic', [$this, 'load']);
    }

    /**
     * Get offset and load grid
     *
     * @return void
     */
    public function load()
    {
        Grid::load($_POST['offset']);
        die();
    }
}
