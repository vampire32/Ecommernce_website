<?php

use Core\Database;

require_once BASE_PATH . 'Core/database.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;


if ($id !== null) {
    $databaseConnection = new Database();
    $pdo = $databaseConnection->connection;
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = $id");
    $stmt->execute();

   
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt2=$pdo->prepare("SELECT * FROM reviews WHERE ProductID=$id");
    $stmt2->execute();
    $reviews=$stmt2->fetchAll(PDO::FETCH_ASSOC);
    
} else {
  
    echo "Product ID is missing";
}

require BASE_PATH . 'views/singleProduct.view.php';
