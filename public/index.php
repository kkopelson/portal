<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new App\Router();

// Define your routes and their corresponding controller actions
$router->add('/login', [App\Controllers\LoginController::class, 'showLoginForm']);
// ... other routes ...

// Dispatch the router
$controllerAction = $router->dispatch($_SERVER['REQUEST_URI']);

if ($controllerAction) {
    $controller = new $controllerAction[0]();
    $controller->{$controllerAction[1]}();
} else {
    // Handle 404
    echo "Page not found";
}

