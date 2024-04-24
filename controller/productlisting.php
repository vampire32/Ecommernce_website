<?php

use Core\Database;

require_once BASE_PATH . 'Core/database.php';

try {
    $databaseConnection = new Database();
    $pdo = $databaseConnection->connection;

    $stmt = $pdo->prepare("SELECT * FROM products");
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}


require BASE_PATH. 'views/productlististing.view.php';