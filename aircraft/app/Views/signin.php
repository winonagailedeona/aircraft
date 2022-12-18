<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Food AirCraft</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<link rel="icon" href="img/logo.jpg" type="image/x-icon">
<style>
body {
  font-family: "Karla", sans-serif;
  background-color: #7cc0d8;
  min-height: 100vh; }

.brand-wrapper {
  padding-top: 7px;
  padding-bottom: 8px; }
  .brand-wrapper .logo {
    height: 20px; }

.login-section-wrapper {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  padding: 50px 50px;
  background-color: white;

 }
  @media (max-width: 991px) {
    .login-section-wrapper {
      padding-left: 60px;
      padding-right: 60px; } }
  @media (max-width: 575px) {
    .login-section-wrapper {
      padding-top: 20px;
      padding-bottom: 20px;
      min-height: 100px; } }

.login-wrapper {
  width: 100%;
  max-width: 100%;
  padding-top: 24px;
  padding-bottom: 24px;


 }
  @media (max-width: 575px) {
    .login-wrapper {
      width: 100%; } }
  .login-wrapper label {
    font-size: 14px;
    font-weight: bold;
    color: rgb(37, 150, 190); }
  .login-wrapper .form-control {
    border: none;
    border-bottom: 1px solid #e7e7e7;
    border-radius: 0;
    padding: 9px 5px;
    min-height: 40px;
    font-size: 18px;
    font-weight: normal; }
    .login-wrapper .form-control::-webkit-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::-moz-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control:-ms-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::-ms-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::placeholder {
      color: #b0adad; }
  .login-wrapper .login-btn {
    padding: 13px 20px;
    background-color: #51abcb;
    border-radius: 10px;
    font-size: 15px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 14px; }
    .login-wrapper .login-btn:hover {
      border: 1px solid #51abcb;
      background-color: #fff;
      color: #134b5f; }
  .login-wrapper a.forgot-password-link {
    color: #080808;
    font-size: 15px;
    text-decoration: underline;
    display: inline-block;
    margin-bottom: 54px; }
    @media (max-width: 575px) {
      .login-wrapper a.forgot-password-link {
        padding-left: 20px;
        margin-bottom: 16px; } }
  .login-wrapper-footer-text {
    font-size: 15px;
    color: #000;
    margin-bottom: 0; }

.login-title {
  font-size: 25px;
  color: rgb(37, 150, 190);
  font-weight: bold;
  margin-bottom: 50px; }

.login-img {
  width: 100%;
  height: 100vh;
  -o-object-fit: cover;
     object-fit: cover;
  -o-object-position: left;
     object-position: left; }

.myi {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= base_url() ?>/img/continentea.jpg), no-repeat center center;
  background-size: cover; width: auto;
}


/*# sourceMappingURL=login.css.map */

</style>
<body>
    <main>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 login-section-wrapper">
        <h1 class="login-title font-weight-bold text-center text-dark"><b>Log in</b></h1>
        <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
        <div class="login-wrapper my-auto">
          <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>" placeholder="email@example.com">
            </div>
            <div class="form-group mb-4">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <input type="submit" class="btn btn-block login-btn" type="button" value="Login">
          </form>
          <a href="#!" class="forgot-password-link">Forgot password?</a>
          <p class="login-wrapper-footer-text text-center">Don't have an account? <a href="<?= base_url('signup') ?>" class="text-reset"><b>Register here</b></a></p>

        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="img/cont2.jpg" alt="login image" class="login-img">
      </div>
    </div>
  </div>
</main>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
