<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IShop- eCommerce Website</title>


    <link rel="shortcut icon" href="/assets/images/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style-prefix.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/585b384717.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<style>
    .collapse {
        visibility: visible !important;
    }

    /* Sidebar Modal */
    .sidebar-modal {
        height: 100%;
        width: 0;
        position: fixed;
        top: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5);
        overflow-x: hidden;
        transition: 0.5s;
        z-index: 1000;
        visibility: hidden;
    }

    /* Sidebar Content */
    .sidebar-content {
        position: fixed;
        top: 0;
        right: 0;
        width: 250px;
        /* Adjust width as needed */
        background-color: #f9f9f9;
        height: 100%;
        padding-top: 60px;
        transition: 0.5s;
    }

    /* Close Button */
    .close-button {
        position: absolute;
        top: 0;
        right: 10px;
        font-size: 36px;
        margin-left: 50px;
        cursor: pointer;
    }

    .close-button:hover {
        color: red;
    }
</style>



<body>


    <div class="overlay" data-overlay></div>