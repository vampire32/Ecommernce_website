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
                    <a href="#">
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
                                User Picture
                            </th>
                            
                            <th scope="col" class="px-6 py-3">
                                User Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                User Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                User Phone
                            </th>
                           
                            <th scope="col" class="px-6 py-3">
                                User Address
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-[20%] " src="<?php echo $user['pictures'] ?>">
                                </th>
                              
                                <td class="px-6 py-4">
                                    <?php echo $user['fullname'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $user['email'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $user['number'] ?>
                                </td>
                                
                                <td class="px-6 py-4">
                                    <?php echo $user['Address'] ?>


                                </td>

                            </tr>

                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>

        </div>


    </div>
</div>

</div>




</main>

</body>

</html>