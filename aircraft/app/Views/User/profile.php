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


            <form action="<?= site_url('update_profile/'.$profile['id']) ?>" method="post">
            <input type="hidden" name="_method" value="PUT" />
     
                <h4 class="pb-4 border-bottom">Account settings</h4>
                <div class="py-2">
                
                    <div>
                  <input type="hidden" class="form-control" id="id" name="id" value="<?=$profile['id']?>">

                        <label for="username">Full Name</label>
                        <input type="text" name="name"
                            class="bg-light form-control"
                            value="<?=$profile['name']?>">

                    </div>
                    <div>
                        <label for="username">Email</label>
                        <input type="email" name="email"
                            class="bg-light form-control"
                            value="<?=$profile['email']?>">

                    </div>
                    <div>
                        <label for="username">Contact Number</label>
                        <input type="number" name="contactno"
                            class="bg-light form-control"
                            value="<?=$profile['contactno']?>">

                    </div>
                    <div>
                        <label for="username">Address</label>
                        <input type="text" name="address"
                            class="bg-light form-control"
                            value="<?=$profile['address']; ?>">

                    </div>

                    <div class="py-3 pb-4 border-bottom">
                        <input type="submit" value="Save Changes" class="btn btn-primary mr-3"></input>
                        <a href="<?php echo base_url('profile');?>" class="btn border button">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="wrapper mt-sm-5">


            <form action="" method="POST">
                <h4 class="pb-4 border-bottom">Change Password</h4>
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
