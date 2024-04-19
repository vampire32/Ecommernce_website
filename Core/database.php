<?php
namespace core;

use PDO;
use PDOException;

class Database
{
    public $connection;

    public function __construct($username = 'moiz', $password = 'moiz1022')
    {
        $config = [
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'ishop'
        ];

      
        $dsn = 'mysql:host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['dbname'];

        try {
            
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
            ]);
        } catch (PDOException $e) {
            
            die("Connection failed: " . $e->getMessage());
        }
    }
}


$database = new Database();

