<?php


use Core\Database;

require_once BASE_PATH . 'Core/database.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $Productname = $_POST["name"];
    $ProductBrand = $_POST["brand"];
    $ProductPrice = $_POST["price"];
    $ProductCatgory = $_POST['catgory'];
    $ProductDescription = $_POST['description'];
    $ProductID=$_POST['productid'];



    // File upload handling
    if (isset($_FILES["picture"]) && $_FILES["picture"]["error"] !== UPLOAD_ERR_NO_FILE) {
        $targetDirectory = "uploads/";
        $fileName = basename($_FILES["picture"]["name"]);
        $targetFile = $targetDirectory . $fileName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["picture"]["tmp_name"]);
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
            if (move_uploaded_file($_FILES["picture"]["tmp_name"], BASE_PATH2 . $targetFile)) {
                // File uploaded successfully
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        echo $targetFile;
    } else {
        // If no file is uploaded, set targetFile to null
        $targetFile = null;
    }

    try {
        $databaseConnection = new Database();
        $pdo = $databaseConnection->connection;

        // Update user query
        $stmt = $pdo->prepare("UPDATE products SET ProductName  = :productname, BrandName = :brand, Productprice = :price,  ProductPicture = :pictures, ProductDescription=:description WHERE id = :id");

        // Bind parameters directly in the execute method
        $stmt->execute([
            ':id' => $ProductID,
            ':productname' => $Productname,
            ':brand' => $ProductBrand,
            ':price' => $ProductPrice,
            ':description' => $ProductDescription,
            ':pictures' => $targetFile
        ]);

        header('location: /productlisting');
        exit();
    } catch (PDOException $e) {
        die("User update failed: " . $e->getMessage());
    }
}
