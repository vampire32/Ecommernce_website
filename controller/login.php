<?php

use Core\Database;

require_once  BASE_PATH . 'Core/Database.php';

session_start();


if (isset($_SESSION['user_id'])) {
  
     header("Location: /");
    exit();
}

$database = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT id, email, password FROM users WHERE email = :email";
    $stmt = $database->connection->prepare($sql);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user) {

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_COOKIE['user_id']= $user['id'];

           
            header('location: /');
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid username.";
    }
}

require BASE_PATH . 'views/Login.view.php';
