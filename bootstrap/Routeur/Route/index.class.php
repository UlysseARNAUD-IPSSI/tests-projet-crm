<?php
declare(strict_types = 1);

namespace Bootstrap\Routeur;

class Route {

    var $path;
    var $pattern;
    var $callback;
    var $isStatic;

    public function __construct()
    {
    }

}