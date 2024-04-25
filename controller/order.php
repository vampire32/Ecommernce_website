<?php

use core\Database;

session_start();


if (!isset($_SESSION['user_id'])) {
    echo "User is not logged in.";
    exit;
}


$userID = $_SESSION['user_id'];
echo $userID;


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
   
    $productName = $_POST['productname'];
    $subtotal = $_POST['subtotal'];
    $productPicture = $_POST['productpicture'];
    $userAddress = $_POST['useraddress'];

   
    $databaseConnection = new Database();
    $pdo = $databaseConnection->connection;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = $userID");
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    
    if (!$user) {
        echo "User not found.";
        exit;
    }

   
    $userEmail = $user['email'];
    $userAddress = $user['Address'];
    $userNumber = $user['number'];
    $userName = $user['fullname'];
    

    
    $stmt2 = $pdo->prepare("INSERT INTO orders (ProductName, ProductPrice, ProductPicture, UserEmail, UserName, UserAddress, UserNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt2->execute([$productName, $subtotal, $productPicture, $userEmail, $userName, $userAddress, $userNumber]);

    echo "Order successfully registered.";
} else {
    echo "Invalid request.";
}
