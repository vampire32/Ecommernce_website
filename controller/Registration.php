<?php

use Core\Database;
require_once BASE_PATH . 'Core/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $databaseConnection = new Database();
        $pdo = $databaseConnection->connection;

        $stmt = $pdo->prepare("INSERT INTO users (fullname, email, number, password) VALUES (:fullname, :email, :number, :password)");

        // Bind parameters directly in the execute method
        $stmt->execute([
            ':fullname' => $fullname,
            ':email' => $email,
            ':number' => $number,
            ':password' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        require BASE_PATH . 'views/registrated.view.php';
        exit();
    } catch (PDOException $e) {
        die("Registration failed: " . $e->getMessage());
    }
}
