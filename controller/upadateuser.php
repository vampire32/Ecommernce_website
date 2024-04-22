<?php
session_start();

use Core\Database;

require_once BASE_PATH . 'Core/database.php';

$user_id = $_SESSION['user_id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $address = $_POST['address'];

 

    // File upload handling
    if (isset($_FILES["profile_picture"]) && $_FILES["profile_picture"]["error"] !== UPLOAD_ERR_NO_FILE) {
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
        $stmt = $pdo->prepare("UPDATE users SET fullname = :fullname, email = :email, number = :number,  pictures = :pictures, Address=:address WHERE id = :id");

        // Bind parameters directly in the execute method
        $stmt->execute([
            ':id' => $user_id,
            ':fullname' => $fullname,
            ':email' => $email,
            ':number' => $number,
            ':address' => $address,
            ':pictures' => $targetFile
        ]);

       header('location: /userprofile');
        exit();
    } catch (PDOException $e) {
        die("User update failed: " . $e->getMessage());
    }
}
