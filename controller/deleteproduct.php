<?php

use Core\Database;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $data = json_decode(file_get_contents('php://input'), true);
    $productId = isset($data['productId']) ? $data['productId'] : null;

    if ($productId) {
       
        $databaseConnection = new Database();
        $pdo = $databaseConnection->connection;

        
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = :productId");
        $stmt->bindParam(':productId', $productId);

        if ($stmt->execute()) {
            
            http_response_code(200);
        } else {
           
            http_response_code(500);
        }
    } else {
        
        http_response_code(400);
    }
} else {
   
    http_response_code(405);
}
