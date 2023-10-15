<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$config = require '../config/database.php';

$db = new App\Database\Database($config['database']);
$pdo = $db->connect();

$router = new App\Core\Router();

$routes = require '../config/routes.php'; // Include your routes

foreach ($routes as $route => $controllerAction) {
    $router->add($route, $controllerAction);
}

// Dispatch the router
$controllerAction = $router->dispatch($_SERVER['REQUEST_URI']);

if ($controllerAction) {
    $controller = new $controllerAction[0]();
    $controller->{$controllerAction[1]}();
} else {
    // Handle 404
    echo "Page not found";
}
