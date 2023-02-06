<?= $this->include('Menus/inc/top') ?>

<body>
    <!-- Topbar Start -->
    <?= $this->include('Menus/inc/link') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?= $this->include('Menus/inc/navbar') ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid about" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">About Us</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="<?= base_url('profile') ?>" >Home</a></p>
                &nbsp;&nbsp;<i class="fa fa-circle"></i>&nbsp;&nbsp;
                <p class="m-0">About</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Continentea Cafe Since 2021</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <p>ContinenTea and Café is the very first airplane and flight attendant – inspired tea and café restaurant that a typical business mostly serves different kinds of tea and coffee, in addition to a variety of snacks. This is the only and first branch of business launched. The business was established last year October, 2021. It is located in 217 Yasmin St., Morning Breeze Subdivision, Tawiran, Calapan City, Oriental Mindoro. It is nearby different establishments such hospitals, small businesses, dormitories of students, and university college. An admirable spot to ponde and small but capacious place to get along with colleagues. A café that provide a friendly, comfortable atmosphere where customer can receive quality food, service and entertainment at a reasonable price. The recipe had a long journey in order to achieve and make it unique to other café restaurant. </p>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/continentea.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>Owner come up with the idea of its recipe from its restaurant’s structure design that derived from the seven continents of the world that differ from its series such as </p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>American</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Latin </h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>European</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>African</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Antarctican</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Asian</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Australian</h5>
                    <p>This gives customers a highlight destination to fly according to what they ordered.</p>
                </div>            
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- Footer Start -->
<div class="container-fluid footer bg-light py-1" style="margin-top: 40px;">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-12 mb-1">
                <a href="<?= base_url('homepage') ?>" class="navbar-brand m-0">
                <h5 class="let1"><span class="text-secondary">Continen</span>Tea Café</h5>
                </a>
            </div>
            <div class="col-12 mb-1">
                <a class="btn btn-outline-secondary btn-social mr-2" href="https://www.facebook.com/continenteacafe"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">123 Street, New York, USA</p>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            <div class="col-12">
                <p>All Rights Reserved • 2022</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- About End -->
<?= $this->include('Menus/inc/end') ?>