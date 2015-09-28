<?php

/**
 * Video Generator: load from video service
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

// use Quadrant\Kaltura;

/**
 * Video Generator: load from video service
 */
class Generator
{
    protected $service;

    public function __construct()
    {
        // $this->video = new Kaltura;
    }

    public function video()
    {
        var_dump("hi"); die();
        return $this->video->render();
    }
}
