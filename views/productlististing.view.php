<?php require 'partials/header.php' ?>
<?php require 'partials/admin.php' ?>
<style>
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<div>
    <div class="area">
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="/dashboard">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="/orderlisting">
                        <i class="fa fa-globe fa-2x"></i>
                        <span class="nav-text">
                            Orders
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="/productlisting">
                        <i class="fa fa-comments fa-2x"></i>
                        <span class="nav-text">
                            Products
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="/userlisting">
                        <i class="fa fa-camera-retro fa-2x"></i>
                        <span class="nav-text">
                            Users
                        </span>
                    </a>


            </ul>

            <ul class="logout">
                <li>
                    <a href="#">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="container mt-5">




            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Brand Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product) : ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php echo $product['ProductName'] ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo $product['BrandName'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $product['Productprice'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $product['Catgory'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="d-flex">
                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline edit-link" data-toggle="modal" data-target="#editModal" data-product='<?php echo json_encode($product); ?>'>Edit</a>
                                        <a class="font-medium text-red-600 dark:text-red-500 hover:underline delete-product ml-3" data-product-id="<?php echo $product['id']; ?>">Delete</a>
                                </td>
            </div>
            </td>

            </tr>

        <?php endforeach ?>

        </tbody>
        </table>
        </div>
        <div id="editModal" tabindex="-1" aria-hidden="true" class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative m-auto p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Update New Product
                        </h3>
                        <span class="close">&times;</span>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" action="/product/update" method="post" enctype="multipart/form-data">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Product Price</label>
                                <input type=text name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                <input type="text" name="catgory" id="catgory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="men" required="">

                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand Name</label>
                                <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="men" required="">

                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prduct PIcture</label>
                                <img class="w-[40%]" id="picture" src="/upload/mazda-cx-9.png">
                                <input type="file" name="picture" accept="image/*">
                                <input type="hidden" name="productid" id="productid" value="">
                            </div>
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            update new product
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
</div>

</div>




</main>
<script>
    var modal = document.getElementById("editModal");

    // Get the button that opens the modal
    var editLinks = document.querySelectorAll(".edit-link");

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName("close")[0];
    var productNameInput = document.getElementById("name");
    var productPriceInput = document.getElementById("price");
    var productCategoryInput = document.getElementById("catgory");
    var productDescriptionInput = document.getElementById("description");
    var productPictureInput = document.getElementById("picture");
    var productBrandInput = document.getElementById("brand");
    var productIDInput = document.getElementById("productid");
    var deleteLinks = document.querySelectorAll(".delete-link");

    // When the user clicks on the button, open the modal
    editLinks.forEach(function(link) {
        link.addEventListener("click", function() {
            modal.style.display = "block";
            var productData = JSON.parse(link.getAttribute("data-product"));
            console.log(productData);
            productNameInput.value = productData.ProductName;
            productPriceInput.value = productData.Productprice;
            productCategoryInput.value = productData.Catgory;
            productDescriptionInput.value = productData.ProductDescription;
            productPictureInput.src = productData.ProductPicture;
            productBrandInput.value = productData.BrandName;
            productIDInput.value = productData.id
        });
    });

    function deleteProduct(productId) {
        // Send an AJAX request to delete the product
        fetch('/deleteproduct', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    productId: productId
                })
            })
            .then(response => {
                if (response.ok) {
                    // Product deleted successfully, reload the page or update the UI as needed
                    location.reload(); // Reload the page to reflect changes
                } else {
                    // Product deletion failed, handle the error
                    console.error('Failed to delete product');
                }
            })
            .catch(error => {
                // Handle network errors
                console.error('Network error:', error);
            });
    }

    // Attach click event listeners to all "Delete" links
    document.querySelectorAll('.delete-product').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            const productId = this.getAttribute('data-product-id');
            if (confirm('Are you sure you want to delete this product?')) {
                deleteProduct(productId);
            }
        });
    });

    // When the user clicks on <span> (x), close the modal
    closeBtn.onclick = function() {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
</script>
</body>

</html>