<?php

/**
 * Grid Base: configure function setup
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
 * Grid Base: configure function setup
 */
class Base
{
    /**
     * Mosaic excerpt for limiting excerpt length
     *
     * @param String $string excerpt provided
     * @param Int $length limit on excerpt
     *
     * @return String $string generated base on limit
     */
    public static function excerpt($string, $length)
    {
        $string = strip_tags($string);

        if(strlen($string) > $length) {

            $lastSpace = strrpos(substr($string, 0, $length), ' ');
            $string = substr($string, 0, $lastSpace);

            return $string .= '...';
        }

        return $string;
    }
}
