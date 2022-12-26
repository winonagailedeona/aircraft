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
                <h3 class="card-title">Edit Admin Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/aircraft/updateAdmin/" style="background-color: #5ac7e8">
              <input type="hidden" class="form-control" name="id" id="id" value="<?=$admin['id']?>">
                <div class="card-body">
                    <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="image" id="image" value="<?=$admin['image']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="name" name="name" value="<?=$admin['name']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="email" id="email" value="<?=$admin['email']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="position" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="position" id="position" value="<?=$admin['position']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="password" id="password" value="<?=$admin['password']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if($admin): ?>
                    <input type="submit" name="updateAdmin" value="update" class="btn btn-primary float-right"></button>
                  <?php else: ?>
                    <input type="submit" name="submit" value="Save" class="btn btn-primary float-right"></button>
                  <?php endif; ?>
                </div>
                <!-- /.card-footer -->
              </form>
  </div>
      </div><!-- /.container-fluid -->
    </section>
</div>
  <?= $this->include('Admin/inc/end')?>
<?= $this->include('Admin/inc/footer')?>
