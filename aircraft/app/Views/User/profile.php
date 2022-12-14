<?= $this->include('Menus/inc/top') ?>

<body>
    <!-- Topbar Start -->

    <div class="container-fluid bg-primary py-3 d-none d-md-block">
      <img class="logo"  src="img/logo.jpg" style="border-radius: 50%; width: 80px; margin-right: 5%; position: relative;">
      <a class="posi2 text-white pr-3" href="" style="font-size: 16px;">FAQs</a>
      <span class="posi2 text-white" style="font-size: 16px;">|</span>
      <a class="posi2 text-white px-3" href="" style="font-size: 16px;">About us</a>
      <span class="posi2 text-white" style="font-size: 16px;">|</span>
      <a class="text-white px-3" href="https://www.facebook.com/continenteacafe" >
          <i class="posi2 fab fa-facebook-f" ></i>
      </a>
      <span class="posi2 text-white" style="font-size: 16px;">|</span>
      <a class="text-white px-3" href="">
      <i class="fab fa-instagram"></i>
    </a>
      <span class="posi2 text-white" style="font-size: 16px;">|</span>

      <div class="d-inline-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <form action="<?= base_url()?>/search" method="post">
              <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
        <a class="dropdown active posi2 text-white px-3">
            <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 16px;">
                <?=session()->get('name'); ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('userprofile');?>"><i
                        class="fas fa-user-circle"></i> My Profile</a>
                <hr>
                <a class="dropdown-item" href="<?php echo base_url('orders');?>"><i class="fas fa-shopping-bag"></i> Orders</a>
                <hr>
                <a class="dropdown-item" href="<?php echo base_url('signin');?>"><i class="fas fa-power-off"></i> Logout</a>
            </div>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="posi2 text-white" style="font-size: 16px;">|</span>
  <a class="posi2 text-white px-3" href="<?php echo base_url('/cart');?>" style="font-size: 16px;"><i class="fas fa-cart-arrow-down"></i> Cart</a>
      </div>
    </div>
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
