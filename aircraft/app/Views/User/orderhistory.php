<?= $this->include('Menus/inc/top') ?>

<body>
    <!-- Topbar Start -->
    <?= $this->include('Menus/inc/link') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?= $this->include('Menus/inc/navbar') ?>
    <!-- Navbar End -->
    <br><br>
    <div class="container mt-3">
    <div >
    
        <h3 class="text-center">Purchased History</h3>
        <br>
        </div>
        <style>
        .osahan-user-media img {
            width: 90px;
        }

        .card offer-card h5.card-title {
            border: 2px dotted #000;
        }

        .card.offer-card h5 {
            border: 1px dotted #daceb7;
            display: inline-table;
            color: #17a2b8;
            margin: 0 0 19px 0;
            font-size: 15px;
            padding: 6px 10px 6px 6px;
            border-radius: 2px;
            background: #fffae6;
            position: relative;
        }

        .card.offer-card h5 img {
            height: 22px;
            object-fit: cover;
            width: 22px;
            margin: 0 8px 0 0;
            border-radius: 2px;
        }

        .card.offer-card h5:after {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-bottom: 4px solid #daceb7;
            content: "";
            left: 30px;
            position: absolute;
            bottom: 0;
        }

        .card.offer-card h5:before {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px solid #daceb7;
            content: "";
            left: 30px;
            position: absolute;
            top: 0;
        }

        .payments-item .media {
            align-items: center;
        }

        .payments-item .media img {
            margin: 0 40px 0 11px !important;
        }

        .reviews-members .media .mr-3 {
            width: 56px;
            height: 56px;
            object-fit: cover;
        }

        .order-list img.mr-4 {
            width: 70px;
            height: 70px;
            object-fit: cover;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
            border-radius: 2px;
        }

        .osahan-cart-item p.text-gray.float-right {
            margin: 3px 0 0 0;
            font-size: 12px;
        }

        .osahan-cart-item .food-item {
            vertical-align: bottom;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #000000;
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
        <?php if ($placeorder > 0) { ?>
            <?php foreach ($placeorder as $orders) : ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">

                                    <div class="bg-white card mb-4 order-list shadow-sm">
                                        <div class="gold-members p-4">
                                            <a href="#">
                                            </a>
                                            <div class="media">
                                                <a href="#">
                                                    <img class="mr-4" src="<?= base_url() . '/' . $orders['image'] ?>" alt="Generic placeholder image">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <span class="float-right text-info"></i> <?= $orders['status'] ?>d by <?= $orders['updatedd_at'] ?><i class="icofont-check-circled text-success"></i></span>
                                                    </a>
                                                    <h6 class="mb-2">
                                                        <p class="text-dark"><?= $orders['productname'] ?></p>
                                                    </h6>
                                                    <p class="text-dark">x <?= $orders['quantity'] ?>
                                                    </p>
                                                    <p class="text-info mb-3"><i class="icofont-list"></i>ORDER PLACED ON<i class="icofont-clock-time ml-2"></i> <?= $orders['createdd_at'] ?></p>
                                                    <hr>
                                                    <div class="float-right">
        
                                                         <a class="btn btn-sm btn-secondary" style="border-radius: 5px;" href="<?= site_url('feedback/') . $orders['menuid'] . '/' . $orders['user_id']  ?> "><i class="fas fa-comment"></i> Send Feedback</a>
                                                    </div>
                                                    <p class="mb-0 text-dark pt-2"><span class="text-dark font-weight-bold"> Total:</span> ₱<?= $orders['total'] ?>       
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    </div></div></div>

                            </div>

                        </div>
                    <?php endforeach; ?>
                <?php }
            if (empty($orders)) : ?>
                    <div class="bg-white card mb-4 order-list shadow-sm">
                                        <div style="height: 500px;">
                                        
                                    <h5 style="margin-top: 20%;" class="text-muted text-center">No Purchased Products!</h5></div>
                                    
                                    </div>
                <?php endif; ?>
                    </div>
<!-- Footer Start -->
<?= $this->include('Menus/inc/footer') ?>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- About End -->
<?= $this->include('Menus/inc/end') ?>
