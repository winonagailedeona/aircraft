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
                    <br>
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Customer Name</th>
                        <th>Contact No.</th>
                        <th>Qty</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Processed-Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($placeorder as $orders): ?>
                    <tr>
                        <td><img src="<?= base_url(). '/'.$orders['image']?>" width="40px" height="40px"></td>
                        <td><?= $orders['productname']?></td>
                        <td><?= $orders['name']?></td>
                        <td><?= $orders['quantity']?></td>
                        <td><?= $orders['total']?></td>
                        <td><?= $orders['total']?></td>
                        <td> <button type="button" class="btn btn-success"><span class="fa fa-check-circle"aria-hidden="true"></span> Delivered</button></td>
                        <td></td>
                        <td><?= $orders['updated_at']?></td>
                        <td>
                        <a href="" class="btn-sm btn-primary"><i class="fas fa-check"> </i>Accept</a>
                        <!-- <a href=""class="btn btn-info mb-1"><i class="fas fa-arrow-alt-circle-right"></i> Process</a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a> -->
                        </td>
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
</body>
<?= $this->include('Admin/inc/footer')?>
<?= $this->include('Admin/inc/end')?>
