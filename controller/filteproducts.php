<?php
session_start();
use core\Database;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $BrandName = $_POST['brandname'];
    $databaseConnection = new Database();
    $pdo = $databaseConnection->connection;

    // Prepare the statement
    $stmt = $pdo->prepare("SELECT * FROM products WHERE BrandName=$BrandName");
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

 
    echo $products;

}
else{
    echo "error";
}

