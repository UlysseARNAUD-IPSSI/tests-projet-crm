<?php
declare(strict_types = 1);

namespace Bootstrap;

use Bootstrap\Routeur\Route;
use Bootstrap\Routeur\Routeur;

class App {

    public $routeur;
    public $baseDeDonnees;

    static function singleton() {
        return new self;
    }

    public function __construct()
    {
        $this->routeur = Routeur::singleton();
        $this->baseDeDonnees = BaseDeDonnees::singleton();
    }

}