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
                  <h3 class="card-title"><b>Menu Products</b></h3>
                  <?php if(session()->getFlashdata('msg', 'Updated Successfully!')):?>
            <div class="alert alert-success">
            <?= session()->getFlashdata('msg', 'Updated Successfully!')?></div>
            <?php endif; ?>
            <?php if(session()->getFlashdata('mssg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('mssg') ?>
                    </div>
                <?php endif;?>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <button data-toggle="modal" data-target="#modal-default" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><b><i class="fas fa-plus"> </i> Add Product</b></button>
                  <div class="modal fade" id="modal-default">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title"></h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
                        <p><b>  Add Product</b></p>
                        <form action="saveMenu" method="post">
                          <div class="form-group mb-4">
                            <input type="text" name="productname" class="form-control" value="" placeholder="Product Name" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="text" name="description" class="form-control" placeholder="Product Description" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="number" name="price" class="form-control" placeholder="Price" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="number" name="quantity" class="form-control" placeholder="Quantity" required>
                          </div>
                          <div class="form-group mb-4">
                            <select type="text" name="category" class="form-control" placeholder="Category" required>
                              <option>Select Category</option>
                              <option value = "milktea">Continental Series</option>
                              <option value = "pica">Pica Pica</option>
                              <option value = "meals">Rice Meals</option>
                              <option value = "pasta">Pasta</option>
                              <option value = "dessert">Dessert</option>
                              <option value = "sandwich">Sandwich</option>
                            </select>
                          </div>
                          <div class="form-group mb-4">
                            <input type="text" name="image" class="form-control" placeholder="Upload Image">

                          <!-- <input type="file" name="image" size="30" required/> -->
                          </div>

</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
<button type="submit"  class="btn btn-outline-primary" >Save</button>
</form>
</div>
</div>

</div>

</div><br>
                  <table id="example2" class="table table-bordered table-hover">
                    <br>
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Image</th>
                      <th>Created On</th>
                      <th>Last Updated On</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($menu as $me): ?>
                    <tr>
                      <td style="font-size: 14px;"><?= $me['productname']?></td>
                      <td style="font-size: 14px;"><?= $me['description']?></td>
                      <td style="font-size: 14px;"><?= $me['price']?></td>
                      <td style="font-size: 14px;"><?= $me['category']?></td>
                      <td style="font-size: 14px;"><img src="<?= base_url(). '/'.$me['image']?>" width="40px" height="40px"> </td>
                      <td style="font-size: 14px;"><?= $me['created_at']?></td>
                      <td style="font-size: 14px;"><?= $me['updated_at']?></td>
                      <td style="font-size: 14px;"><button id="myBtn" type="button" name="button" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><a href="/aircraft/editMenu/<?=$me['id']?>" style=" color: white;"><i class="fas fa-edit"></i></a></button>
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
      
  </div>


<?= $this->include('Admin/inc/footer')?>
<?= $this->include('Admin/inc/end')?>
