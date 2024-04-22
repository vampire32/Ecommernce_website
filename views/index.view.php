<?php
require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require BASE_PATH . 'Core/showproducts.php' ?>

<main>

    <!--
      - BANNER
    -->

    <div class="banner">

        <div class="container">

            <div class="slider-container has-scrollbar">

                <div class="slider-item">

                    <img src="./assets/images/banner-1.jpg" alt="women's latest fashion sale" class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Trending item</p>

                        <h2 class="banner-title">Women's latest fashion sale</h2>

                        <p class="banner-text">
                            starting at &dollar; <b>20</b>.00
                        </p>

                        <a href="#" class="banner-btn">Shop now</a>

                    </div>

                </div>

                <div class="slider-item">

                    <img src="./assets/images/banner-2.jpg" alt="modern sunglasses" class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Trending accessories</p>

                        <h2 class="banner-title">Modern sunglasses</h2>

                        <p class="banner-text">
                            starting at &dollar; <b>15</b>.00
                        </p>

                        <a href="#" class="banner-btn">Shop now</a>

                    </div>

                </div>

                <div class="slider-item">

                    <img src="./assets/images/banner-3.jpg" alt="new fashion summer sale" class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Sale Offer</p>

                        <h2 class="banner-title">New fashion summer sale</h2>

                        <p class="banner-text">
                            starting at &dollar; <b>29</b>.99
                        </p>

                        <a href="#" class="banner-btn">Shop now</a>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="product-container">

        <div class="container">
            <div class="product-box">

                <div class="product-main">

                    <h2 class="title">New Products</h2>

                    <div class="product-grid">

                        <?php foreach ($products as $prdoct)


                        ?>

                        <div class="">

                            <div class="showcase-banner">

                                <img src="<?php echo $prdoct['ProductPicture'] ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">



                              

                            </div>

                            <div class="showcase-content">

                                <a href="/singleproduct?id=<?php echo $prdoct['id']; ?>" class="showcase-category">jacket</a>

                                <a href="#">
                                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                                </a>

                                <!-- <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div> -->

                                <div class="price-box">
                                    <p class="price"><?php echo $prdoct['Productprice'] ?></p>
                                    
                                </div>

                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>
    <div>

        <div class="container">

            <div class="testimonials-box">

                <!--
            - TESTIMONIALS
          -->

               

            </div>

        </div>

    </div>
</main>



<?php require 'partials/footer.php' ?>