<?php require BASE_PATH . 'views/partials/header.php' ?>
<?php require BASE_PATH . 'views/partials/nav.php' ?>

<div class="panel-header panel-header-sm">
</div>
<div class="main-content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="/updateuser" method="post" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input name="fullname" type="text" class="form-control" placeholder="fullname" value="<?php echo $user['fullname'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email" value="<?php echo  $user['email'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="email">Phone Number</label>
                                    <input name="number" id="number" type="text" class="form-control" placeholder="number" value="<?php echo  $user['number'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="email">Address</label>
                                    <input name="address" id="address" type="text" class="form-control" placeholder="address" value="<?php echo  $user['Address'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">

                                    <input name="user_id" type="hidden" value="<?php echo  $user['Address'] ?>">
                                    
                                </div>
                            </div>
                        </div>



                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">

                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <input type="file" name="profile_picture" accept="image/*">
                            <img class="avatar border-gray" src="<?php echo $user['pictures'] ?>" alt="...">
                            </input>

                            <h5 class="title"><?php echo $user['fullname'] ?></h5>
                        </a>

                    </div>

                </div>
                <hr>
                <div class="button-container">
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-google-plus-g"></i>
                    </button>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit"> update</button>
        </form>
    </div>
</div>
<?php require BASE_PATH . 'views/partials/footer.php' ?>