<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 8;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
            <a href="<?= base_url('profile') ?>" class="navbar-brand d-block d-lg-none">
                <h4 class="m-0 display-15 text-primary"><span class="text-secondary">Food</span>AirCraft</h4>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse rounded justify-content-between" id="navbarCollapse">
              <a href="<?= base_url('profile') ?>" class="navbar-brand mx-5 d-none d-lg-block">
                  <h3 class="m-0 display-25 text-dark"><span class="text-color">Continen</span>Tea Café</h3>
              </a>
                <div class="navbar-nav ml-auto py-0">
                    <a href="<?= base_url('cont') ?>" class="nav-item nav-link">Continental Tea</a>
                    <a href="<?= base_url('pica') ?>" class="nav-item nav-link">Pica</a>
                    <a href="<?= base_url('rice') ?>" class="nav-item nav-link">Rice Meals</a>
                    <a href="<?= base_url('pasta') ?>" class="nav-item nav-link">Pasta</a>
                    <a href="<?= base_url('dessert') ?>" class="nav-item nav-link">Dessert</a>
                    <a href="<?= base_url('sandwich') ?>" class="nav-item nav-link">Sandwich</a>
                    <a href="<?= base_url('others') ?>" class="nav-item nav-link" style="display: none;">Others</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
