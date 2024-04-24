<?php

use Core\Database;

require_once  BASE_PATH . 'Core/Database.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
var_dump($_SESSION['user_role']);

// Check if the session is already set


$database = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT id, username, password FROM admin WHERE username = :username";
    $stmt = $database->connection->prepare($sql);
    $stmt->execute(['username' => $username]);
    $admin = $stmt->fetch();

    if ($admin) {

        if (password_verify($password, $admin['password'])) {

            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['user_role'] = $admin['username'];
            $_COOKIE['user_role'] = $admin['username'];

            // Redirect to index view
            header('location: /dashboard');
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid username.";
    }
}

require BASE_PATH. 'views/adminlogin.view.php';