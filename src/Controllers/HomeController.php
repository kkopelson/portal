<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        // Your logic here...
        require_once __DIR__ . '/../views/home.php';
    }
}