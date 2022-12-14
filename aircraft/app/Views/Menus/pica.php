<?= $this->include('Menus/inc/top') ?>

<body>
    <!-- Topbar Start -->
    <?= $this->include('Menus/inc/link') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?= $this->include('Menus/inc/navbar') ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid pic">
        <div class="container text-center">
            <h1 class="text-white display-3">Pica Pica</h1>
            <div class="d-inline-flex align-items-center text-white">
                <i class="fa fa-circle"></i>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <br>
    <div class="container-fluid py-2">
        <div class="row">
          <?php foreach ($pica as $pi): ?>
            <div class="col-lg-3 py-2">
              <div class="d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                  <div class="bg-dark mt-n5 mb-2 py-3" style="width: 100px;">
                    <h4 class="font-weight-bold text-white mb-0">₱ <?=number_format($pi['price'], 2)?></h4>
                  </div>
                      <div class="position-relative bg-primary mt-n3 mb-1 p-2" style="width: 300px; height: 200px;">
                        <img class="w-100 h-100" src="<?= $pi['image']?>" style="object-fit: cover;">
                      </div>
                        <h5 class="font-weight-bold mb-4"><?= $pi['name']?></h5>
                        <?php if($pi['quantity'] <=0){?>
                        Not Available
                      <?php } ?>
                        <a href="<?= site_url('sp/'.$pi['id'])?>" class="btn btn-sm btn-dark">Order Now</a>
              </div>
            </div>
              <?php endforeach; ?>
    </div>

    <!-- Footer Start -->
    <?= $this->include('Menus/inc/footer') ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- About End -->
<?= $this->include('Menus/inc/end') ?>
