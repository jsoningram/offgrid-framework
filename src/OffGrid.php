<?php

namespace OG;

use OG\Grid\Paginator;

class OffGrid
{

    protected $paginator;

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
