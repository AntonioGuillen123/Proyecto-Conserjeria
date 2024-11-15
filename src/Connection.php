<?php

namespace App;

use PDO;
use PDOException;

class Connection
{
    public $connection;

    public function __construct()
    {
        try {
            $this->connection = $this->getConnection();
        } catch (PDOException $e) {
            echo 'Failed Connection to database, the error is as follows: ' . $e->getMessage();
        }
    }

    private function getConnection()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'concierge';
        $charset = 'utf-8';

        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO("mysql:host={$host};dbname={$database};charset={$charset}", $username, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}
