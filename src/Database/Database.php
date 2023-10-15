<?php
namespace App\Database;

use PDO;

class Database {
    private $config;

    public function __construct($config) {
        $this->config = $config;
    }

    public function connect() {
        return new PDO(
            $this->config['connection'],
            $this->config['username'],
            $this->config['password'],
            $this->config['options']
        );
    }
}