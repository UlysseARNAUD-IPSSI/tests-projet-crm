<?php
declare(strict_types = 1);

namespace Bootstrap\Routeur;

class Route {

    public $uri;
    public $methods;
    public $action;

    static function get($uri, $action) {
        return new self(['HEAD','GET'], $uri, $action);
    }

    static function post($uri, $action) {
        return new self(['POST'], $uri, $action);
    }

    public function __construct($methods, $uri, $action)
    {
        $this->uri = $uri;
        $this->methods = (array) $methods;
        $this->action = $action;
    }

    public function lancerAction () {
        $action = $this->action;
        $action();
    }

}