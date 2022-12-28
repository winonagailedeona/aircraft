<!-- Topbar Start -->

<div class="container-fluid bg-primary py-3 d-none d-md-block">
      <img class="logo"  src="<?= base_url() ?>/img/logo.jpg" style="border-radius: 50%; width: 80px; margin-right: 5%; position: relative;">
      <a class="posi2 text-white pr-3" href="<?php echo base_url('faqs');?>" style="font-size: 16px;">FAQs</a>
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

      <div class="d-inline-flex align-items-center search-container">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <form action="<?= base_url()?>/search" method="post" >
              <input type="text" placeholder="Search.." name="search" style="width: 500px; border-radius: 8px;">
    <button type="submit"><i class="fa fa-search" style="color: black;"></i></button>
</form>

        <a class="dropdown active posi2 text-white px-3">
            <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 16px;">
                <?=session()->get('name'); ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('userprofile');?>"><i class="fas fa-user-circle"></i> My Profile</a>
                <hr>
                <a class="dropdown-item" href="<?php echo base_url('orders');?>"><i class="fas fa-shopping-bag"></i> Orders</a>
                <hr>
                <a class="dropdown-item" href="<?php echo base_url('signin');?>"><i class="fas fa-power-off"></i> Logout</a>
            </div>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="posi2 text-white" style="font-size: 16px;">|</span>
  <a class="posi2 text-white px-3" href="<?php echo base_url('showcart');?>" style="font-size: 16px;"><i class="fas fa-cart-arrow-down"></i> Cart</a>
      </div>
    </div>
    <!-- Topbar End -->



