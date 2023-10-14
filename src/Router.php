<?php
namespace App;

class Router {
    private $routes = [];

    public function add($uri, $controllerAction) {
        $this->routes[$uri] = $controllerAction;
    }

    public function dispatch($requestUri) {
        foreach ($this->routes as $uri => $controllerAction) {
            if ($uri === $requestUri) {
                return $controllerAction;
            }
        }
        return null; // Or handle 404 error
    }
}