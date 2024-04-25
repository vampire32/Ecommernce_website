<?php

use core\Database;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $orderid=$_POST['orderid'];
    $status=$_POST['status'];
  

    $databaseConnection = new Database();
    $pdo = $databaseConnection->connection;

    $stmt=$pdo->prepare("UPDATE orders SET status=:status WHERE id=:id");
    $stmt->execute([
        ':id'=>$orderid,
        ':status'=>$status

    ]);
    header('location: /orderlisting');
    exit();
}
?>