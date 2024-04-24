<?php

use Core\Database;

require_once BASE_PATH . 'Core/database.php';
var_dump($_SERVER['REQUEST_METHOD']);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    

    // File upload handling
    
    // Hash password
    $hashed_password = password_hash("admin@123", PASSWORD_DEFAULT);

    try {
        $databaseConnection = new Database();
        $pdo = $databaseConnection->connection;

        $stmt = $pdo->prepare("INSERT INTO admin (username, password) VALUES (:username,  :password )");

        
        $stmt->execute([
           
            ':username' => "admin",
           
            ':password' => $hashed_password,
            
        ]);

        
        exit();
    } catch (PDOException $e) {
        die("Registration failed: " . $e->getMessage());
    }
}
