<?php

/**
 * OffGrid Plugin: framework init
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @category Plugin
 * @package  OG
 * @author   (c) qfor <admin@qfor.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @link     http://qfor.com
 */

namespace OG;

use OG\Grid\Paginator;

/**
 * OffGrid Plugin: framework init
 */
class OffGrid
{

    protected $paginator;

    /**
     * Initialize objects
     *
     * @return void
     */
    public function __construct()
    {
        $this->paginator = new Paginator;
    }
}

// init
add_action(
    'plugins_loaded',
    function () {
        $offgrid = new OffGrid;
    }
);
