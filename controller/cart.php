<?php

use Core\Database;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    $databaseConnection = new Database();
    $conn = $databaseConnection->connection;

    // Check if the product is already in the cart
    if (isset($_SESSION['cart'][$productId])) {
        // If yes, increment the quantity
        $_SESSION['cart'][$productId]['qty']++;
    } else {
        // If not, fetch the product details from the database
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = $productId");
        $stmt->execute();

        // Check if product exists
        if ($stmt->rowCount() > 0) {
            $product = $stmt->fetch(PDO::FETCH_ASSOC);

            // Add the product to the cart with a quantity of 1
            $_SESSION['cart'][$productId] = array(
                'id' => $product['id'],
                'name' => $product['ProductName'],
                'price' => $product['Productprice'],
                'image' => $product['ProductPicture'], // Store the image URL
                'qty' => 1
            );
        } else {
            echo "Product not found.";
            exit; // Terminate script execution
        }
    }

    // Generate HTML for the cart item
    ob_start();

    function clearcart()
    {
        unset($_SESSION['cart']);
    }
?>

    <span class="close-button" onclick="closeSidebarModal()">&times;</span>
    <div class="col-md-12 mt-3">
        <div class="d-flex">
            <div>
                <h2 class="font-bold ml-3"><?php echo $_SESSION['cart'][$productId]['name'] ?></h2>
                <h3 class="ml-3"><?php echo $_SESSION['cart'][$productId]['price'] ?></h3>
                <p>QTY: <?php echo $_SESSION['cart'][$productId]['qty']; ?></p>
            </div>
        </div>
        <div class="d-flex mt-3">
            <button onclick="<?php clearcart() ?>" class="btn btn-primary">Clear Now</button>

        </div>
    </div>
<?php
    $cartHTML = ob_get_clean();

    echo $cartHTML;
}
?>