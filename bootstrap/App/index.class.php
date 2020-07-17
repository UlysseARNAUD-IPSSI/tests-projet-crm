<?php
declare(strict_types = 1);

namespace Bootstrap;

class App {

    var $routeur;
    var $baseDeDonnees;

    public function __construct()
    {
        $this->routeur = new Routeur();
        $this->baseDeDonnees = new BaseDeDonnees();
    }

}