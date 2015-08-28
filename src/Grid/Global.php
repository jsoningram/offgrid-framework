<?php

namespace OG\Grid;

/**
 * Mosaic excerpt for limiting excerpt length
 *
 * @param String $string excerpt provided
 * @param Int $length limit on excerpt
 *
 * @return String $string generated base on limit
 */
$mosaic_excerpt = function ($string, $length) {
    $string = strip_tags($string);

    if(strlen($string) > $length) {

        $lastSpace = strrpos(substr($string, 0, $length), ' ');
        $string = substr($string, 0, $lastSpace);

        return $string .= '...';
    }

    return $string;
};
