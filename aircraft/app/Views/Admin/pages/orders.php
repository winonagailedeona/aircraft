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
                        <th>Full Name</th>
                        <th>Item</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Order-Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> <button type="button" class="btn btn-success"><span class="fa fa-check-circle"aria-hidden="true"></span> Delivered</button>
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
                        <td> <button type="button" class="btn btn-danger"><i class="far fa-times-circle"></i> Cancelled</button></td>
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
                        <td> <button type="button" class="btn btn-secondary" style="font-weight:bold;"><i class="fas fa-bars"></i> Dispatch</button></td>
                        <td></td>
                        <td>
                            <a href=""class="btn btn-info mb-1"><i class="fas fa-arrow-alt-circle-right"></i> Process</a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                    </tr>
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
