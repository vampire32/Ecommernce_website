<?php

use Core\Database;

require_once BASE_PATH . 'Core/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];

    
    if (isset($_FILES["profile_picture"])) {
        $targetDirectory = "uploads/"; 
        $fileName = basename($_FILES["profile_picture"]["name"]);
        $targetFile = $targetDirectory . $fileName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

       
        $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        
       

        
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
           
            $uploadOk = 0;
        }

        
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            
        } else {
            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], BASE_PATH2 . $targetFile)) {
              
            } else {
                echo "Sorry, there was an error uploading your file.";
                
            }
        }
    }

 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $databaseConnection = new Database();
        $pdo = $databaseConnection->connection;

        $stmt = $pdo->prepare("INSERT INTO users (fullname, email, number, password, pictures) VALUES (:fullname, :email, :number, :password, :pictures)");

       
        $stmt->execute([
            ':fullname' => $fullname,
            ':email' => $email,
            ':number' => $number,
            ':password' => $hashed_password,
            ':pictures' => $targetFile 
        ]);

        require BASE_PATH . 'views/registrated.view.php';
        exit();
    } catch (PDOException $e) {
        die("Registration failed: " . $e->getMessage());
    }
}
