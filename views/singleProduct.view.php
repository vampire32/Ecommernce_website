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
    <div class="flex items-start">
        <div class="flex-shrink-0">

        </div>
        <div>
            <h1 class="text-2xl font-bold ml-3 mb-3 text-blue-500"> Reviews</h1>
            <?php foreach ($reviews as $review) : ?>
                <div class="ml-6">
                    <p class="flex items-baseline">
                        <span class="text-gray-600 font-bold"> Name: <?php echo $review['Username'] ?></span>

                    </p>

                    <div class="mt-3">

                        <p class="mt-1"> Review: <?php echo $review['Message'] ?></p>
                    </div>

                </div>
            <?php endforeach ?>
        </div>
    </div>
    <form action="/review" method="post" class=" mx-auto mt-16 flex w-full flex-col border rounded-lg bg-white p-8">
        <h2 class="title-font mb-1 text-lg font-medium text-gray-900">Feedback</h2>
        <p class="mb-5 leading-relaxed text-gray-600">If you had any issues or you liked our product, please share
            with us!
        </p>
        <div class="mb-4">
            <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full rounded border border-gray-300 bg-white py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
            <input type="hidden" id="productid" name="productid" value="<?php echo $product['id'] ?>" />
        </div>
        <div class="mb-4">
            <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
            <textarea id="message" name="message" class="h-32 w-full resize-none rounded border border-gray-300 bg-white py-1 px-3 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
        </div>
        <button type="submit" class="rounded border-0 bg-indigo-500 py-2 px-6 text-lg text-white hover:bg-indigo-600 focus:outline-none">Send</button>

    </form>
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