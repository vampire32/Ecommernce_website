<?php 

use core\Database;



if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=$_POST['email'];
    $message=$_POST['message'];
    $productid=$_POST['productid'];
    

    $databaseConnection = new Database();
    $pdo = $databaseConnection->connection;

    $stmt=$pdo->prepare("SELECT * FROM users WHERE email=:email");
    $stmt->execute([
        ':email'=>$email
    ]);
    $users= $stmt->fetch(PDO::FETCH_ASSOC);
 

    if (!empty($users['fullname'])) {
        $stmt2 = $pdo->prepare("INSERT INTO reviews (Username, Email, Message, ProductID) VALUES (:username, :email, :message, :productid)");
        $stmt2->execute([
            ':username' => $users['fullname'],
            ':email' => $email,
            ':message' => $message,
            ':productid' => $productid
        ]);
        echo "Review successfully submitted.";
    } else {
        echo "Error: User full name not found.";
    }
   header('location: /');
    exit();
    



}

?>