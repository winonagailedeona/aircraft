<?= $this->include('Menus/inc/top') ?>

<body>
    <!-- Topbar Start -->
    <?= $this->include('Menus/inc/link') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?= $this->include('Menus/inc/navbar') ?>
    <!-- Navbar End -->
    <style type="text/css">


.form-style-3{
	max-width: 100%;

	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
	width: 100px;
	color: #62C3E7;
	font-weight: bold;
	font-size: 13px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #62C3E7;
	padding: 20px;
	background: #daeded;
	box-shadow: inset 0px 0px 15px #62C3E7;
	-moz-box-shadow: inset 0px 0px 15px #62C3E7;
	-webkit-box-shadow: inset 0px 0px 15px #62C3E7;
}
.form-style-3 fieldset legend{
	color: #62C3E7;
	border-top: 1px solid #62C3E7;
	border-left: 1px solid #62C3E7;
	border-right: 1px solid #62C3E7;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #daeded;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #62C3E7;
	-moz-box-shadow:-0px -1px 2px #62C3E7;
	-webkit-box-shadow:-0px -1px 2px #62C3E7;
	font-weight: normal;
	font-size: 20px;
    text-align: center;
}
.form-style-3 textarea{
	width:250px;
	height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #daeded;
	outline: none;
	color: #62C3E7;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #62C3E7;
	-moz-box-shadow: inset 1px 1px 4px #62C3E7;
	-webkit-box-shadow: inset 1px 1px 4px #62C3E7;
	background: #FFEFF6;
	width:90%;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
	background: #62C3E7;
	border: 1px solid #62C3E7;
	padding: 5px 15px 5px 15px;
	color: #FFCBE2;
	box-shadow: inset -1px -1px 3px #62C3E7;
	-moz-box-shadow: inset -1px -1px 3px #62C3E7;
	-webkit-box-shadow: inset -1px -1px 3px #62C3E7;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
	font-weight: bold;
}
.required{
	color:red;
	font-weight:normal;
}
</style>
<div class="jumbotron jumbotron-fluid about" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Frequently Asked Questions </h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="<?= base_url('profile') ?>" >Home</a></p>
                &nbsp;&nbsp;<i class="fa fa-circle"></i>&nbsp;&nbsp;
                <p class="m-0">FAQs</p>
            </div>
        </div>
    </div>

<!--Section: FAQ-->
<div style = "margin-left: 10%; margin-right: 10%;">
<section>
    <br><br>
  <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQs</h3>
  <p class="text-center mb-5">
    Find the answers for the most frequently asked questions below
  </p>

  <div class="row">
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> What makes your milk tea special?</h6>
      <p>
        Our milktea are fully made with love that makes tastes something special.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-question text-primary pe-2"></i> How can I pay</h6>
      <p>
        You can pay through the counter we didnt accept online payment.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i> How can I order?</h6>
      <p>
        You can order via online or in visit our cafe .
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i> Do you offer delivery order?</h6>
      <p>
        No. We only offer pickup and dine in only.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-home text-primary pe-2"></i> Do you offer promos?</h6>
      <p> Yes. We offer promos such as buy 1 take 1 in limited time only. </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-question text-primary pe-2"></i> What is your office hours?</h6>
      <p>
        Monday to Friday
         <br>
        10:30 AM-8:30PM
        <br>
        Saturday
        <br>
        10:AM-9:00 PM
        <br>
        Sunday
        <br>
        2:00-9:00 PM
      </p>
    </div>
  </div>
  <br>
  <div class="form-style-3">
</div>
</section>
</div>
<br>
<!--Section: FAQ-->

    <!-- Footer Start -->
    <?= $this->include('Menus/inc/footer') ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- About End -->
<?= $this->include('Menus/inc/end') ?>