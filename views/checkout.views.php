<?php require BASE_PATH . 'views/partials/header.php';
require BASE_PATH . 'views/partials/nav.php'; ?>
<div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32">
    <a href="#" class="text-2xl font-bold text-gray-800">sneekpeeks</a>
    <div class="mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base">
        <div class="relative">
            <ul class="relative flex w-full items-center justify-between space-x-2 sm:space-x-4">
                <li class="flex items-center space-x-3 text-left sm:space-x-4">
                    <a class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></a>
                    <span class="font-semibold text-gray-900">Shop</span>
                </li>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
                <li class="flex items-center space-x-3 text-left sm:space-x-4">
                    <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gray-600 text-xs font-semibold text-white ring ring-gray-600 ring-offset-2" href="#">2</a>
                    <span class="font-semibold text-gray-900">Shipping</span>
                </li>


            </ul>
        </div>
    </div>
</div>
<div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
    <div class="px-4 pt-8">
        <p class="text-xl font-medium">Order Summary</p>
        <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
        <form action="/order" method="post" enctype="multipart/form-data">
            <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                    <input type="hidden" name="productpicture" value="<?php echo $product['ProductPicture'] ?>">
                    <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="<?php echo $product['ProductPicture'] ?>" alt="" />
                    <div class="flex w-full flex-col px-4 py-4">
                        <span class="font-semibold"><?php echo $product['BrandName'] ?></span>
                        <input type="hidden" name="productname" value="<?php echo $product['ProductName'] ?>">
                        <span class="float-right text-gray-400"><?php echo $product['ProductName'] ?></span>
                        <p class="text-lg font-bold"><?php echo $product['Productprice'] ?></p>
                    </div>
                </div>

            </div>

            <p class="mt-8 text-lg font-medium">Shipping Methods</p>

            <div class="relative">
                <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
                <span class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                <label class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_1">
                    <img class="w-14 object-contain" src="/images/naorrAeygcJzX0SyNI4Y0.png" alt="" />
                    <div class="ml-5">
                        <span class="mt-2 font-semibold">Fedex Delivery</span>
                        <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
                    </div>
                </label>
            </div>


    </div>
    <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">

        <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Billing Address</label>
        <div class="flex flex-col sm:flex-row">
            <div class="relative flex-shrink-0 sm:w-11/12">
                <input type="text" id="billing-address" name="useraddress" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Street Address" />

            </div>


        </div>

        <!-- Total -->
        <div class="mt-6 border-t border-b py-2">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Subtotal</p>
                <input type="hidden" name="subtotal" value="<?php echo $product['Productprice'] ?>">
                <p class="font-semibold text-gray-900"><?php echo $product['Productprice'] ?></p>
            </div>

        </div>
        <div class="mt-6 flex items-center justify-between">
            <p class="text-sm font-medium text-gray-900">Total</p>
            <p class="text-2xl font-semibold text-gray-900"><?php echo $product['Productprice'] ?></p>
        </div>
    </div>
    <button type="submit" class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Place Order</button>
    </form>
</div>
</div>
<?php require BASE_PATH . 'views/partials/footer.php' ?>