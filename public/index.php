<?php
require_once __DIR__ . '/../src/Router.php';
require_once __DIR__ . '/../src/controllers/HomeController.php';

$router = new Router();

$router->add('/', [HomeController::class, 'index']);
$router->add('/login', [LoginController::class, 'showLoginForm']);

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$controllerAction = $router->dispatch($uri);

if ($controllerAction) {
    list($controller, $action) = $controllerAction;
    (new $controller)->$action();
} else {
    // Handle 404, e.g., load a 404 view
    require __DIR__ . '/../views/404.php';
}