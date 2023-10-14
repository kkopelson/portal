<?php
phpinfo();
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$router = new App\Core\Router();

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

