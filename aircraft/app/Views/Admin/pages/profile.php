<?= $this->include('Admin/inc/top')?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?= $this->include('Admin/inc/navnoloader')?>
    <?= $this->include('Admin/inc/left_side')?>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-left: 3%; padding-right: 3%; padding-top: 3%;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="card card-gray" >
              <div class="card-header">
                <h3 class="card-title">Edit Profile Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="image" name="image" placeholder="Image">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="email" id="category" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="position" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="position" id="position" placeholder="Position">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-7">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
  </div>
      </div><!-- /.container-fluid -->
    </section>
</div>

<?= $this->include('Admin/inc/footer')?>
<?= $this->include('Admin/inc/end')?>
