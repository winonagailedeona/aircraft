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
                <button id="myBtn" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><b>Add Customer</b></button>
                  <!-- Start of Modal Section -->
                  <div id="myModal" class="modal">
                    <div class="modal-content">
                      <div class="modal-header">
                        <span class="close">&times;</span>
                      </div>
                      <div class="modal-body">
                        <p><b>Add Customer</b></p>
                        <form action="saveCustomer" method="post">
                          <div class="form-group mb-4">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="password" name="email" class="form-control" placeholder="Password" required>
                          </div>
                          <button type="submit" name="submit" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><b>Save</b></button>
                        </form>
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
                      <th>Status</th>
                      <th>Created On</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($users as $cus): ?>
                    <tr>
                      <td><?= $cus['name']?></td>
                      <td><?= $cus['email']?></td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td><?= $cus['created_at']?></td>
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
</body>

<?= $this->include('Admin/inc/footer')?>
<?= $this->include('Admin/inc/end')?>
