<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require BASE_PATH . 'Core/showproducts.php' ?>


<div class="container-fluid">
    <div class="row">
        <?php require 'partials/filters_side.php' ?>



        <div class="row">
            <div class="col-md-4">
                <?php foreach ($products as $product) ?>
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


        </div> <!-- row end.// -->

        <?php require 'partials/pagination.php' ?>


        <?php require 'partials/footer.php' ?>