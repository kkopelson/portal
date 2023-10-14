<?php

return [
    '/' => [HomeController::class, 'index'],
    '/login' => [LoginController::class, 'showLoginForm'],
    '/login-process' => [LoginController::class, 'processLogin']
];