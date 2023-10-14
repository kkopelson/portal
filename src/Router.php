<?php

class Router {
    private $routes = [];

    public function add($uri, $controller) {
        $this->routes[$uri] = $controller;
    }

    public function dispatch($requestUri) {
        foreach ($this->routes as $pattern => $controllerAction) {
            if (preg_match($pattern, $requestUri, $matches)) {
                array_shift($matches);  // remove the entire matched text
                return [$controllerAction, $matches];
            }
        }
        return null; // Or handle 404 error
    }
}