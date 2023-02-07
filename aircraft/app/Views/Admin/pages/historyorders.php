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
                  <h3 class="card-title"><b>History Orders</b></h3>
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
                        <th>Type of Order</th>
                        <th>Schedule of Order</th>
                        <th>Order-Date</th>
                        <th>Order-Completed</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($historyorders as $orders): ?>
                    <tr>
                        <td><img src="<?= base_url(). '/'.$orders['image']?>" width="40px" height="40px"></td>
                        <td><?= $orders['productname']?></td>
                        <td><?= $orders['name']?></td>
                        <td><?= $orders['contactno']?></td>
                        <td style="font-size: 15px;"><?= $orders['note']?></td>
                        <td>x <?= $orders['orquantity']?></td>
                        <td>₱<?= $orders['total']?>.00</td>
                        <?php $status = $orders['type'];
                                                    if ($status == "D" or $status == "P") { ?>

                                                        <?php if ($status == "D") { ?>
                                                            <td><i class="fas fa-utensils"> </i> Pick-up</td>
                                                        <?php } ?>
                                                        <?php if ($status == "P") { ?>
                                                          <td><i class="fas fa-shopping-bag"> </i> Dine-in</td>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <td><?= $orders['datee']?> <?= $orders['timee']?> </td>
                        <td><?= $orders['createdd_at']?></td>
                        <td><?= $orders['updatedd_at']?></td>

                        
                    </tr>
                    <?php endforeach; ?>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"
                                    aria-hidden="true"></span> On the way!</button></td>
                        <td></td>
                        <td>
                        <a href=""class="btn btn-info mb-1"><i class="fas fa-arrow-alt-circle-right"></i> Process</a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> <button type="button" class="btn btn-danger"><i class="far fa-times-circle"></i> Cancelled</button></td>
                        <td></td>
                        <td>
                            <a href=""class="btn btn-info mb-1"><i class="fas fa-arrow-alt-circle-right"></i> Process</a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                    </tr> -->
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
