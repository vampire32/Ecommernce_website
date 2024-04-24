<?php
// Include your database connection file
use Core\Database;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the request body contains the productId parameter
    $data = json_decode(file_get_contents('php://input'), true);
    $productId = isset($data['productId']) ? $data['productId'] : null;

    if ($productId) {
        // Connect to the database
        $databaseConnection = new Database();
        $pdo = $databaseConnection->connection;

        // Prepare and execute the DELETE query
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = :productId");
        $stmt->bindParam(':productId', $productId);

        if ($stmt->execute()) {
            // Product deleted successfully
            http_response_code(200);
        } else {
            // Failed to delete product
            http_response_code(500);
        }
    } else {
        // Product ID is missing in the request
        http_response_code(400);
    }
} else {
    // Method not allowed
    http_response_code(405);
}
