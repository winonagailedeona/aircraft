<?= $this->include('Admin/inc/top')?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?= $this->include('Admin/inc/navnoloader')?>
    <!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-lightblue">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?=base_url() ?> /dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Continentea Cafe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     <br>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>  
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin'); ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?= base_url('menuTable'); ?>" class="nav-link ">
              <i class="text-dark nav-icon fas fa-list"></i>
              <p class="text-dark">
                Menu
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active">
              <i class="nav-icon fas fa-clipboard"></i>
              <p class="text-white">
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="<?= base_url('adorders'); ?>" class="nav-link">
              <i class="text-dark nav-icon fas fa-cart-plus"></i>
          <span class="badge badge-primary navbar-badge"></span>
              <p class="text-dark">
                New
              </p>
            </a>
          </li>
              <li class="nav-item">
            <a href="<?= base_url('processorders'); ?>" class="nav-link">
              <i class="text-dark nav-icon fas fa-cog"></i>
          <span class="badge badge-success navbar-badge"></span>
              <p class="text-dark">
                Processing
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('cancelorders'); ?>" class="nav-link">
              <i class="text-dark nav-icon fas fa-ban"></i>
          <span class="badge badge-danger navbar-badge"></span>

              <p class="text-dark">
                Cancelled
              </p>
            </a>
          </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('customers'); ?>" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('reviewnf'); ?>" class="nav-link active">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Reviews
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('historyorders'); ?>" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                History Orders
              </p>
            </a>
          </li>
<br><br>
          <li class="nav-header">SETTINGS</li>
          <!-- <li class="nav-item">
            <a href="<?= base_url('adprofile'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url('logout'); ?>" class="nav-link active">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


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
                    <label for="product" class="col-sm-2 col-form-label">Product Name</label> 
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="productname" name="productname" value="<?=$menu['productname']?>">
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
                    <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-7">
                      <input type="number" class="form-control" name="quantity" id="quantity" value="<?=$menu['quantity']?>">
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
