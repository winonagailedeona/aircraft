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
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Order Date</th>
                        <th>Status</th>                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>Pasta</td>
                        <td>3</td>
                        <td>₱ 120.00</td>
                        <td>12-12-22</td>
                        <td> <button type="button" class="btn btn-danger"> <i class="far fa-times-circle"></i> Cancelled</button>
                        </td>
                        <td>
                            <a href=""class="btn btn-danger"><i class="fas fa-trash-alt"></i> Cancel</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <h2 class="text-center">Purchased History</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Invoice</th>
                    </tr>
                </thead>
                <tbody id="myTable">

                    <tr>

                        <td>12-11-22</td>
                        <td>Burger</td>
                        <td>4</td>
                        <td>₱ 50.00</td>
                        <td> <button type="button" class="btn btn-success"><i class="fas fa-check"></i> Received</button>
                        <td><a href="" class="btn btn-info"><i class="fas fa-file-alt"></i> Invoice</a></td>
                    </tr>
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
