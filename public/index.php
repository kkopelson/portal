<?php
require '../vendor/autoload.php';

$router = new Router();

// Load routes from our configuration
$routes = require __DIR__ . '/../config/routes.php';
foreach ($routes as $uri => $controllerAction) {
    $router->add($uri, $controllerAction);
}

$requestUri = $_SERVER['REQUEST_URI'];
$controllerAction = $router->dispatch($requestUri);

if ($controllerAction) {
    [$controller, $method] = $controllerAction;
    $controllerInstance = new $controller;
    $controllerInstance->$method();
} else {
    // Handle 404 error, e.g., render a 404 view
}