<?php

use core\Database;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ProductName = $_POST["productname"];
    $ProductDescription = $_POST["productdescription"];
    $BrandName = $_POST["brandname"];
    $ProductPrice = $_POST['productprice'];
    $catgory = $_POST['catgory'];

    
    if (isset($_FILES["product_picture"]) && $_FILES["product_picture"]["error"] !== UPLOAD_ERR_NO_FILE) {
        $targetDirectory = "uploads/";
        $fileName = basename($_FILES["product_picture"]["name"]);
        $targetFile = $targetDirectory . $fileName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["product_picture"]["tmp_name"]);
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
            if (move_uploaded_file($_FILES["product_picture"]["tmp_name"], BASE_PATH2 . $targetFile)) {
                
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        echo $targetFile;
    } else {
       
        $targetFile = null;
    }

    try {
        $databaseConnection = new Database();
        $pdo = $databaseConnection->connection;

        
        $stmt = $pdo->prepare("INSERT INTO products (BrandName, ProductName, ProductDescription, Productprice, ProductPicture, Catgory) VALUES (?, ?, ?, ?, ?, ?)");

        
        $stmt->bindParam(1, $BrandName);
        $stmt->bindParam(2, $ProductName);
        $stmt->bindParam(3, $ProductDescription);
        $stmt->bindParam(4, $ProductPrice);
        $stmt->bindParam(5, $targetFile);
        $stmt->bindParam(6, $catgory);

       
        $stmt->execute();

        echo 'Product is successfully added';
        exit();
    } catch (PDOException $e) {
        die("Product insertion failed: " . $e->getMessage());
    }
}
