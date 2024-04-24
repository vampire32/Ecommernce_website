<?php

use core\Database;

session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "User is not logged in.";
    exit;
}

// Get user ID from session
$userID = $_SESSION['user_id'];
echo $userID;

// Check if POST request and user ID is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
    // Retrieve data from the form
    $productName = $_POST['productname'];
    $subtotal = $_POST['subtotal'];
    $productPicture = $_POST['productpicture'];
    $userAddress = $_POST['useraddress'];

    // Fetch user details from the database
    $databaseConnection = new Database();
    $pdo = $databaseConnection->connection;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = $userID");
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists
    if (!$user) {
        echo "User not found.";
        exit;
    }

    // Extract user details
    $userEmail = $user['email'];
    $userAddress = $user['Address'];
    $userNumber = $user['number'];
    $userName = $user['fullname'];
    

    // Insert order into the database
    $stmt2 = $pdo->prepare("INSERT INTO orders (ProductName, ProductPrice, ProductPicture, UserEmail, UserName, UserAddress, UserNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt2->execute([$productName, $subtotal, $productPicture, $userEmail, $userName, $userAddress, $userNumber]);

    echo "Order successfully registered.";
} else {
    echo "Invalid request.";
}
