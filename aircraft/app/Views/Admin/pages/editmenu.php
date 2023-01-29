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
                <h3 class="card-title">Edit Product Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?=base_url('/updateMenu')?>" style="background-color: #5ac7e8" method="post">
                <div class="card-body">
                  <div class="form-group row">
                  <input type="hidden" class="form-control" id="id" name="id" value="<?=$menu['id']?>">
                    <label for="name" class="col-sm-2 col-form-label">Product Name</label> 
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="name" name="name" value="<?=$menu['productname']?>">
                    </div>
                  </div>
                  <div class="form-group row" style="height: 180%; padding-bottom: 3%">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div  class="col-sm-7">
                      <input style="height: 180%; " type="text" class="form-control" name="description" id="description" value="<?=$menu['description']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="price" id="price" value="<?=$menu['price']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="category" id="category" value="<?=$menu['category']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="image" id="image" value="<?=$menu['image']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="updateMenu" value="Update" class="btn btn-primary float-right"></button>
                </div>
                <!-- /.card-footer -->
              </form>
  </div>
      </div><!-- /.container-fluid -->
    </section>
</div>

<?= $this->include('Admin/inc/footer')?>
<?= $this->include('Admin/inc/end')?>
