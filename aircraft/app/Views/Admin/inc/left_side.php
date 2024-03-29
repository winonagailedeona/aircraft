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
          <span class="badge badge-primary navbar-badge"><?= $pending; ?></span>
              <p class="text-dark">
                New
              </p>
            </a>
          </li>
              <li class="nav-item">
            <a href="<?= base_url('processorders'); ?>" class="nav-link">
              <i class="text-dark nav-icon fas fa-cog"></i>
          <span class="badge badge-success navbar-badge"><?= $orderstat; ?></span>
              <p class="text-dark">
                Processing
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('cancelorders'); ?>" class="nav-link">
              <i class="text-dark nav-icon fas fa-ban"></i>
          <span class="badge badge-danger navbar-badge"><?= $cancelled; ?></span>

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
