<?= $this->include('Menus/inc/top') ?>

<body>
    <!-- Topbar Start -->
    <?= $this->include('Menus/inc/link') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?= $this->include('Menus/inc/navbar') ?>
    <!-- Navbar End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
            </div>
            
            <div class="row">
                
                <div class="col-lg-7" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="<?= base_url($dessert['image']) ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3"><?= $dessert['productname']?></h4>
                    <p><?= $dessert['description']?></p>
                    <h5 class="text-dark mb-3"><?= $dessert['price']?></h5>
                    <form action="<?= site_url('cartd')?>" method="post">
                    <input type="number" name = "quantity" value="1" min="1" max="<?= $dessert['quantity']?>">
                    <input type = "hidden" name="id" value="<?= $dessert['id']?>">
                    <button type=submit class="btn btn-sm btn-dark">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?= $this->include('Menus/inc/footer') ?>
    <!-- Footer End -->

    <!-- About End -->
<?= $this->include('Menus/inc/end') ?>