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

use OG\Tag\Paginator as Tag;
use OG\Grid\Paginator as Grid;
use OG\Article\Paginator as Article;

/**
 * OffGrid Plugin: framework init
 */
class OffGrid
{

    protected $tag;
    protected $grid;
    protected $article;

    /**
     * Initialize objects
     *
     * @return void
     */
    public function __construct()
    {
        $this->tag     = new Tag;
        $this->grid    = new Grid;
        $this->article = new Article;
    }
}

// init
add_action(
    'plugins_loaded',
    function () {
        $offgrid = new OffGrid;
    }
);
