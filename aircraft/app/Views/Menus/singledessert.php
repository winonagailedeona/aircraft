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
                    <h4 class="font-weight-bold mb-3"><?= $dessert['name']?></h4>
                    <input type = "hidden" name="prod_name" values="<?= $dessert['name']?>">
                    <p><?= $dessert['description']?></p>
                    <h5 class="text-dark mb-3"><?= $dessert['price']?></h5>
                    <input type = "hidden" name="price" values="<?= $dessert['price']?>">
                    <input type="number" placeholder="1"name = "quantity" min="1" max="<?= $dessert['quantity']?>">
                    <a href="<?= site_url('cartd/'.$dessert['id'])?>" class="btn btn-sm btn-dark">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?= $this->include('Menus/inc/footer') ?>
    <!-- Footer End -->

    <!-- About End -->
<?= $this->include('Menus/inc/end') ?>