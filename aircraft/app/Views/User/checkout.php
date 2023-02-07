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
    <b style="color: white;"><?= $subtotal = 0 ?></b>
    <div class="container-fluid" style="padding-left: 8%; padding-right: 8%;">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card ">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-dark bg-warning">
                                <tr class="small text-uppercase">
                                    <th class="text-center" scope="col" width="20%">Image</th>
                                    <th class="text-center" scope="col" width="20%">Product</th>
                                    <th class="text-center" scope="col" width="20%">Price</th>
                                    <th class="text-center" scope="col" width="20%">Quantity</th>
                                    <th class="text-center" scope="col" width="20%">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>

                                <form action="placeorder" method="post">
                                    <?php if (count($cart) > 0) : ?>
                                        <?php foreach ($cart as $cart_item) : ?>
                                            <tr class="table-body-row">
                                                <input type="hidden" name="menuid[]" value="<?= $cart_item['menuid'] ?>"></input>
                                                <input type="hidden" name="total[]" value="<?= $cart_item['total'] ?>"></input>
                                                <input type="hidden" name="bilang[]" value="<?= $cart_item['bilang'] ?>"></input>
                                                <td>
                                                    <figure class="itemside align-items-center">
                                                        <div class="aside"><img src="<?= base_url($cart_item['image']) ?>" class="img-sm"></div>
                                                    </figure>
                                                </td>
                                                <td><?= $cart_item['productname'] ?></td>
                                                <td>₱ <?= number_format($cart_item['price'], 2) ?></td>
                                                <td class="text-center"><?= $cart_item['bilang'] ?></td>

                                                <td class="text-center" value="total">₱ <?= $cart_item['bilang'] * $cart_item['price'] ?></td>

                                            </tr>
                                            <?php $subtotal += ($cart_item['bilang'] * $cart_item['price']) ?>
                                        <?php endforeach; ?>

                                    <?php endif; ?>
                                    <button type="submit" id="submit" style="display:none;"></button>

                            </tbody>
                            <div>
                        </table>
                        <div class="row">
                            <div class="col-md-6">
                            <div style="padding-left: 5%; padding-bottom: 5%;"><label for="w3review">Leave a Message:</label> 
                            <textarea  id="w3review" name="note" rows="4" cols="115" placeholder=""></textarea>                 </div>
                            
                        </div>
                        <div style="padding-left: 5%; padding-bottom: 5%;"><label for="w3review">Type of Order:</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input type="radio" id="html" name="type" value="Dine-in">
                              <label for=""><i class="fas fa-utensils"> </i> Dine-in</label>
                              <input type="radio" id="javascript" name="type" value="Pick-up">
                              <label for=""><i class="fas fa-shopping-bag"> </i> Pick-up</label>
                            
                            
                            <br>
                            <div class="row">
                            <div class="col-md-12">
                            <div ><label for="w3review">Schedule Order:</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                            <span>Date:</span>&nbsp;<input type="date" name="datee"></input>&nbsp; &nbsp; 
                            <span>Time:</span>&nbsp;<input type="time" name="timee"></input>               </div>
                            
                        </div>



</div>


</div></div>
                        
                            
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
                            <dd class="text-right ml-3"> <?php if ($cart > 0) {
                                                                echo '₱' . $subtotal;
                                                            } ?>
                            </dd>
                        </dl>
                        <hr> <a href="#" id="placeorder" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> PLACE ORDER </a> <a href="<?php echo base_url('profile'); ?>" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Ordering</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <?= $this->include('Menus/inc/footer') ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.5.0.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
    <script>
        $('#placeorder').click(function() {
            $('#submit').click();
            $('#info').click();
        })
    </script>
    <!-- About End -->
    <?= $this->include('Menus/inc/end') ?>