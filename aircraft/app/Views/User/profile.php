<?= $this->include('Menus/inc/top') ?>

<body>
<!-- Topbar Start -->
    <?= $this->include('Menus/inc/link') ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?= $this->include('Menus/inc/navbar') ?>
    <!-- Navbar End -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/profile.css');?>">
<div class="row">
    <div class="col-md-6">
        <div class="wrapper mt-sm-5">


            <form action="" method="POST">
                <h4 class="pb-4 border-bottom">Account settings</h4>
                <div class="py-2">
                    <div>
                        <label for="username">Full Name</label>
                        <input type="text" name="username"
                            class="bg-light form-control"
                            value="">

                    </div>
                    <div>
                        <label for="username">Email</label>
                        <input type="text" name="username"
                            class="bg-light form-control"
                            value="">

                    </div>
                    <div class="py-3 pb-4 border-bottom">
                        <button type="submit" class="btn btn-primary mr-3">Save Changes</button>
                        <a href="" class="btn border button">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="wrapper mt-sm-5">


            <form action="" method="POST">
                <h4 class="pb-4 border-bottom">Password</h4>
                <div class="py-2">
                    <div>
                        <input type="password"
                            class="bg-light form-control mb-2 "
                            name="cPassword" placeholder="Current Password" value="">

                    </div>
                    <div>
                        <input type="password"
                            class="bg-light form-control mb-2"
                            name="nPassword" placeholder="New Password" value="">

                    </div>
                    <div>
                        <input type="password"
                            class="bg-light form-control mb-2 "
                            name="nRPassword" placeholder="Confirm Password"
                            value="">

                    </div>
                    <div class="py-3 pb-4 border-bottom">
                        <button type="submit" class="btn btn-primary mr-3 mb-2">Save Changes</button>
                        <a href="" class="btn border button">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Footer Start -->
<?= $this->include('Menus/inc/footer') ?>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- About End -->
<?= $this->include('Menus/inc/end') ?>
