<?= $this->include('Admin/inc/top')?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?= $this->include('Admin/inc/navnoloader')?>
    <?= $this->include('Admin/inc/left_side')?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <br>
      <br>

      <!-- Main content -->
      <section class="content" >
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card" >
                <div class="card-header">
                  <h3 class="card-title"><b>All Orders</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- <div class="card-body" style="background-color: #3C8DBC"> -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Customer Name</th>
                        <th>Contact No.</th>
                        <th>Message</th>
                        <th>Qty</th>
                        <th>Total Price</th>
                        <th>Cancelled On</th>
                        <th class="text-center">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($placeorder as $orders): ?>
                    <tr>
                        <td style="font-size: 15px;"><img src="<?= base_url(). '/'.$orders['image']?>" width="40px" height="40px"></td>
                        <td style="font-size: 15px;"><?= $orders['productname']?></td>
                        <td style="font-size: 15px;"><?= $orders['name']?></td>
                        <td style="font-size: 15px;"><?= $orders['contactno']?></td>
                        <td style="font-size: 15px;"><?= $orders['note']?></td>
                        <td style="font-size: 15px;">x <?= $orders['orquantity']?></td>
                        <td style="font-size: 15px;">₱<?= $orders['total']?>.00</td>
                        <?php $status = $orders['type'];
                                                    if ($status == "D" or $status == "P") { ?>

                                                        <?php if ($status == "D") { ?>
                                                            <td><i class="fas fa-utensils"> </i> Dine-in</td>
                                                        <?php } ?>
                                                        <?php if ($status == "P") { ?>
                                                          <td ><i class="fas fa-shopping-bag"> </i> Pick-up</td>
                                                        <?php } ?>
                                                    <?php } ?>
                        <td style="font-size: 15px;"><?= $orders['updatedd_at']?></td>
                        <td class="text-center"><p class="badge text-center bg-secondary" style="font-size: 17px;"> CANCELLED</p></td>

                    </tr>
                    <?php endforeach; ?>
                    
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      </script>
    <!-- data tables specific script -->
  </div>

<?= $this->include('Admin/inc/footer')?>
<?= $this->include('Admin/inc/end')?>
