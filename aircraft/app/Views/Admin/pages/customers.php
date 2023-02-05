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
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><b>Customers Accounts</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <button data-toggle="modal" data-target="#modal-default" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><b>Add Customer</b></button>
                  <div class="modal fade" id="modal-default">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Add Author</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="saveCustomer" method="post">
                          <div class="form-group mb-4">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                          </div>

</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
<button type="submit"  class="btn btn-outline-primary" >Save</button>
</form>
</div>
</div>

</div>

</div>
                  <?= $this->include('Admin/pages/inc/script_modal')?>
                  <!-- End of Modal Section -->
                  <br>
                  <table id="example2" class="table table-bordered table-hover">
                    <br>
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Contact No.</th>
                      <th>Status</th>
                      <th>Account Created On</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($users as $cus): ?>
                    <tr>
                      <td style="font-size: 15px;"><?= $cus['name']?></td>
                      <td style="font-size: 15px;"><?= $cus['email']?></td>
                      <td style="font-size: 15px;"><?= $cus['address']?></td>
                      <td style="font-size: 15px;"><?= $cus['contactno']?></td>
                      <?php $status=$cus['state']; 
                            if($status=="ACTIVE" or $status=="BLOCKED") { ?>
                    <?php if($status=="ACTIVE") { ?>
                        <td class="text-center"> <span style="font-size: 15px;" class="badge bg-success"> ACTIVE</span></td>
                        <?php }?>
                        <?php if($status=="BLOCKED") { ?>
                        <td class="text-center"> <span  style="font-size: 15px;" class="badge bg-danger">BLOCKED</span></td>
                        <?php }} ?>
                      <td  style="font-size: 15px;"><?= $cus['created_at']?></td>
                      <?php if($status=="ACTIVE") { ?>
                        
                   <td class="text-center">
                   <a href="<?= site_url('blocked/') . $cus['id']  ?> " style="font-size: 20px;" class="btn-sm btn-secondary">Block</a>
                   </td>
                   <?php } else {?>
                    <td class="text-center">
                   <a href="<?= site_url('unblocked/') . $cus['id']  ?> " style="font-size: 20px;" class="btn-sm btn-secondary">Unlock</a>
                   </td>

                    <?php }?>


               
                        
                        
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
      <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
  </div>

<?= $this->include('Admin/inc/footer')?>
<?= $this->include('Admin/inc/end')?>
