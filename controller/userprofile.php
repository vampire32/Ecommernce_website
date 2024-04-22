<?php

use core\Database;

 session_start();

if (isset($_SESSION['user_id'])) {
    $userid = $_SESSION['user_id'];
    $databaseConnection = new Database();
    $pdo = $databaseConnection->connection;

    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id=:userid");
    $stmt->execute(['userid' => $userid]);

   
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

require BASE_PATH . 'views/userprofile.view.php';





 
 ?>