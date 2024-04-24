<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>




<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img id="ProductImage" alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="<?php echo $product['ProductPicture'] ?>">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest"><?php echo $product['BrandName'] ?></h2>
                <h1 id="ProductName" class="text-gray-900 text-3xl title-font font-medium mb-1"><?php echo $product['ProductName'] ?></h1>

                <p class="leading-relaxed"><?php echo $product['ProductDescription'] ?></p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">


                </div>
                <div class="flex">
                    <span id="ProductPrice" class="title-font font-medium text-2xl text-gray-900"><?php echo $product['Productprice'] ?></span>

                    <input id="ProductId" type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button onclick="addToCart()" name="add_to_cart" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Add to Cart</button>
                    <a href="/checkout?id=<?php echo $product['id']; ?>" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Buy Now </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function addToCart() {
        var productId = document.getElementById("ProductId").value;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/addtocart", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Update cart layout
                    updateCartLayout(xhr.responseText);
                    console.log("updated")
                } else {
                    console.error('Error adding to cart');
                }
            }
        };
        xhr.send("product_id=" + productId);
    }

    function updateCartLayout(cartHTML) {
        // Assuming you have a cart container with id "cartContent"
        var cartContainer = document.getElementById("cartContent");
        if (cartContainer) {
            cartContainer.innerHTML = cartHTML;
        }
    }
</script>


<?php require 'partials/footer.php' ?>