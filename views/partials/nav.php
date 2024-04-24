<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Ishop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <div class="d-flex ">


                <?php
                if (isset($_SESSION['user_id'])) {
                    echo '<a class="btn btn-primary" href="/logout" >Logout</a>';
                    echo '<a href="/userprofile"><i class="fa-solid fa-user text-[40px] text-blue-500"></i></a>';
                } else {
                    echo '<a class="btn btn-primary" href="/login" >Login</a>';
                }
                ?>
                <a id="cartButton">
                    <i class="fa fa-shopping-cart text-[40px] text-blue-500" aria-hidden="true"></i>

                </a>
                <div id="sidebarModal" class="sidebar-modal ">
                    <!-- Sidebar content goes here -->
                    <div id="cartContent" class="sidebar-content">
                        <span class="close-button" onclick="closeSidebarModal()">&times;</span>
                        <h2 class="text-center font-bold">Cart Item</h2>
                        <div class="container">
                            <div class="row">

                               

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>