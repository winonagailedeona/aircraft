<?= $this->include('Menus/inc/top') ?>

<body>
    <!-- Topbar Start -->
    <?= $this->include('Menus/inc/link') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?= $this->include('Menus/inc/navbar') ?>
    <!-- Navbar End -->
    <br><br>
    <style>
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.40rem
        }

        .img-sm {
            width: 80px;
            height: 80px
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .table-shopping-cart .price-wrap {
            line-height: 1.2
        }

        .table-shopping-cart .price {
            font-weight: bold;
            margin-right: 5px;
            display: block
        }

        .text-muted {
            color: #969696 !important
        }

        a {
            text-decoration: none !important
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .dlist-align {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        [class*="dlist-"] {
            margin-bottom: 5px
        }

        .coupon {
            border-radius: 1px
        }

        .price {
            font-weight: 600;
            color: #212529
        }

        .btn.btn-out {
            outline: 1px solid #fff;
            outline-offset: -5px
        }

        .btn-main {
            border-radius: 2px;
            text-transform: capitalize;
            font-size: 15px;
            padding: 10px 19px;
            cursor: pointer;
            color: #fff;
            width: 100%
        }

        .btn-light {
            color: #ffffff;
            background-color: #F44336;
            border-color: #f8f9fa;
            font-size: 12px
        }

        .btn-light:hover {
            color: #ffffff;
            background-color: #F44336;
            border-color: #F44336
        }

        .btn-apply {
            font-size: 11px
        }
    </style>
    <script>
        function updateCartItem(obj, rowid) {
            $.get("<?php echo base_url() . 'cart/updateCartItemQty/'; ?>", {
                    rowid: rowid,
                    qty: obj.value
                },
                function(resp) {
                    if (resp == 'ok') {
                        location.reload();
                    } else {
                        alert('Cart update failed, please try again.');
                    }
                });
        }
    </script>

    <div class="container-fluid" style="padding-left: 8%; padding-right: 8%;">
        <div class="row">

            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <form action="checkout" method="post">
                            <table class="table table-borderless table-shopping-cart">
                                <thead class="text-dark" style="background-color: aqua;">
                                    <tr class="small text-uppercase">
                                        <th></th>
                                        <th scope="col" width="20%">Image</th>
                                        <th scope="col" width="20%">Product</th>
                                        <th scope="col" width="20%">Price</th>
                                        <th scope="col" width="20%">Quantity</th>
                                        <th scope="col" width="20%">Subtotal</th>
                                        <th scope="col" class="text-right d-none d-md-block" width="220"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if ($cart > 0) { ?>
                                        <?php foreach ($cart as $cart_item) : ?>
                                            <tr>
                                                <td><input type="checkbox" value="<?= $cart_item['id'] ?>" name="id[]">&nbsp;&nbsp;</td>
                                                <td>
                                                    <figure class="itemside align-items-center">

                                                        <div class="aside"><img src="<?= base_url($cart_item['image']) ?>" class="img-sm"></div>
                                                    </figure>
                                                </td>
                                                <td><?= $cart_item['name'] ?></td>
                                                <td>₱ <?= number_format($cart_item['price'], 2) ?></td>
                                                <td><?= $cart_item['bilang'] ?></td>

                                                <td value="total">₱ <?= $cart_item['total'] ?></td>

                                                <td>
                                                    <a href="/aircraft/deletecartitem/<?= $cart_item['cartid'] ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10">Remove</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    <?php } else { ?>
                                        <tr>
                                            <td>
                                                <p style="color: #212529;">No Items In Your Cart!!</p>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>

                            </table>
                            <div class="text-right" style="padding-right: 5%; padding-left: 73%; padding-bottom: 3%;"><button type="submit" class="btn btn-out btn-primary btn-square btn-main mt-2" data-abc="true"> CHECKOUT </a>
                        </form>
                    </div>
            </aside>
                <aside class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt style="font-size: 130%">CART SUMMARY</dt>
                        </dl>
                        <br>
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <?php foreach ($total as $sum) : ?>
                                <dd class="text-right ml-3"><?= $total[0]['total'] ?></dd>
                            <?php endforeach; ?>
                        </dl>

                        <hr> <a href="<?php echo base_url('profile'); ?>" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Ordering</a>

                    </div>
                </div>
            </aside>

        </div>
    </div>

    <?= $this->include('Menus/inc/footer') ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- About End -->
    <?= $this->include('Menus/inc/end') ?>