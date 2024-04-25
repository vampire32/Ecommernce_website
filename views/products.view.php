<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require BASE_PATH . 'Core/showproducts.php' ?>
<script>
    
    document.getElementById('filterForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        var form = this;
        var formData = new FormData(form); 
        var xhr = new XMLHttpRequest(); 
        xhr.open(form.method, form.action); 

        
        xhr.onload = function() {
            
            console.log(xhr.responseText);
        };

       
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
                </div> 
            <?php endforeach; ?>

        </div> 

       


        <?php require 'partials/footer.php' ?>