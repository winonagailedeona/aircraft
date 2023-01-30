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
    <br>
    <div class="card text-center" style="height: 80px;">
    <div style="height: 20px; padding-left: 5%; ">
    </div>
        <div class="row">
        <div class="col-3" style="padding-right: 5%;"><a href="<?php echo base_url('orders');?>" style="font-size: 16px; background-color: white" class="btn btn-app">
<span style="font-size: 5px;" class="badge bg-teal"></span>
Placed Orders
</a></div>
<div class="col-3" style="padding-right: 5%; "><a href="<?php echo base_url('confirmedorders');?>" style="font-size: 16px; background-color: white" class="btn btn-app">
<span class="badge bg-teal"></span>
Confirmed Orders
</a></div>
<div class="col-3" style="padding-right: 5%;"><a href="<?php echo base_url('readyorders');?>" style="font-size: 16px; background-color: white" class="btn btn-app">
<span class="badge bg-teal"></span>
Orders Ready
</a></div>
<div class="col-3"><a href="<?php echo base_url('cancelledorders');?>" style="font-size: 16px;" class="btn btn-app bg-secondary">
<span class="badge bg-teal"></span>
Cancelled Orders
</a></div>


        </div>

    </div>
        <br><br>
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
                
                <?php if ($placeorder > 0) { ?>
                    <?php foreach($placeorder as $orders): ?>
                    <tr>
                        <td><?= $orders['created_at']?></td>
                        <td><img src="<?= base_url(). '/'.$orders['image']?>" width="40px" height="40px"></td>
                        <td><?= $orders['productname']?></td>
                        <td><?= $orders['quantity']?></td>
                        <td class="text-dark"><?= $orders['status']?></td>
                        <td><?= $orders['total']?></td>
                        <td>
                        <a class="btn-sm btn-danger"><i class="fas fa-times"> </i> Cancelled</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                                        <?php } if (empty($orders)): ?>
        <tr>
            <td colspan="7" class="text-center"><br> <h3>Empty!</h3> </td>
        </tr>
    <?php endif; ?>
                </tbody>
            </table><br>
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
