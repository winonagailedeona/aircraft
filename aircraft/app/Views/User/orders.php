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

    <div class="container shadow-container">
        <h2 class="text-center">Recent Orders</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th></th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Status</th>  
                        <th>To Pay</th>                      
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php foreach($placeorder as $orders): ?>
                    <tr>
                        <td><?= $orders['created_at']?></td>
                        <td><img src="<?= base_url(). '/'.$orders['image']?>" width="40px" height="40px"></td>
                        <td><?= $orders['productname']?></td>
                        <td><?= $orders['quantity']?></td>
                        <td class="text-dark"><?= $orders['status']?></td>
                        <td><?= $orders['total']?></td>
                        <td>
                        <a href="<?= site_url('cancelledbyuser/') . $orders['menuid'] . '/' . $orders['user_id']  ?> " class="btn-sm btn-secondary"><i class="fas fa-times"> </i> Cancel</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
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
