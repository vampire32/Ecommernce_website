<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require BASE_PATH . 'Core/showproducts.php' ?>
<script>
    // JavaScript to handle form submission and send selected checkbox values
    document.getElementById('filterForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        var form = this;
        var formData = new FormData(form); // Create FormData object to collect form data
        var xhr = new XMLHttpRequest(); // Create XMLHttpRequest object
        xhr.open(form.method, form.action); // Set up request

        // Define callback function to handle response
        xhr.onload = function() {
            // Handle response, e.g., update product list based on filtered results
            console.log(xhr.responseText);
        };

        // Send request
        xhr.send(formData);
    });
</script>

<div class="container-fluid">
    <div class="row">
        <?php require 'partials/filters_side.php' ?>



        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">

                    <figure class="card card-product-grid">
                        <div class="img-wrap">

                            <img src="<?php echo $product['ProductPicture'] ?>" class="img-fluid">

                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <div class="fix-height">
                                <a href="/singleproduct?id=<?php echo $product['id']; ?>" class="title"><?php echo $product['ProductName'] ?></a>
                                <div class="price-wrap mt-2">
                                    <span class="price"><?php echo $product['Productprice'] ?></span>

                                </div> <!-- price-wrap.// -->
                            </div>
                            <a href="#" class="btn btn-block btn-primary">Add to cart </a>
                            <a href="#" class="btn btn-block btn-primary">Buy Now </a>
                        </figcaption>
                    </figure>
                </div> <!-- col.// -->
            <?php endforeach; ?>

        </div> <!-- row end.// -->

        <?php require 'partials/pagination.php' ?>


        <?php require 'partials/footer.php' ?>