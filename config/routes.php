<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;

return [
    '/' => [HomeController::class, 'index'],
    '/login' => [LoginController::class, 'showLoginForm'],
    '/login-process' => [LoginController::class, 'processLogin']
];