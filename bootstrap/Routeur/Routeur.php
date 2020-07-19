<?php
declare(strict_types = 1);

namespace Bootstrap\Routeur;

class Routeur {

    public $routes;

    static function singleton () {
        return new self;
    }

    public function __construct()
    {
        $this->routes = [];
        $this->routes[] = Route::get('404', function() {
            require __DIR__ . '/../../resources/vues/erreurs/404.view.php';
        });
    }

    public function ajouterRoute($route) {
        if (!in_array($route, $this->routes)) {
            $this->routes[] = $route;
        }
    }

    public function supprimerRoute( $route )
    {
        if (($curseur = array_search($route, $this->routes)) !== false) {
            unset($this->routes[$curseur]);
        }
    }

    public function recupererRoute($uri) {
        foreach ($this->routes as $route) {
            if ($route->uri === $uri) {
                return $route;
            }
        }
        throw new \Exception("Route \"$uri\" inconnu");
    }

    public function traiterURI( $uri ) {

        $matches = [];
        foreach ($this->routes as $route) {
            if ($route->uri === $uri) {
                $route->lancerAction();
                return;
            }
        }

        $route404 = $this->recupererRoute('404');
        $route404->lancerAction();

    }

}