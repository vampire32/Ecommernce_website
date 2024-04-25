<?php

use Core\Database;

$databaseConnection = new Database();
$pdo = $databaseConnection->connection;
$stmt2 = $pdo->prepare("SELECT * FROM reviews");
$stmt2->execute();
$reviews = $stmt2->fetchAll(PDO::FETCH_ASSOC);


require BASE_PATH. 'views/index.view.php';
?>