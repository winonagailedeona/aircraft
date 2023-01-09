<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="<?php

use App\Models\CheckoutModel;

 echo base_url('/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/css/style.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
        <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Food AirCraft</title>

      <?php if(!empty(session()->get('checkout'))) {
        $checkout = new CheckoutModel();
        $checkout->where('user_id', session()->get('id'))->delete();
        }?>
</head>
<link rel="icon" href="<?= base_url() ?>/img/logo.jpg" type="image/x-icon">
<style>

.search-container form {
    position: relative;
    border-color: #62E3E7;
    background-color: #62E3E7;
}
.search-container form button {
    position: absolute;
    right: 0;
    top: 0;
    height: 100%;
    width: 50px;
    background: transparent;
    border: transparent;
    font-size: 20px;
    color: #62E3E7;
    cursor: pointer;
    outline: 0;
}

.posi2 {
    font-size: 20px;
}
.siz {
    font-size: 60px;
}
.sizz {
    font-size: 50px;
}
.text-color {
  color: #3998ba;
}

.na {
  border-radius: 10px;
}

.mypage {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= base_url() ?>/img/drinks.jpg), no-repeat center center;
  background-size: cover;
}

.des {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= base_url() ?>/img/dessert.jpg), no-repeat center center;
  background-size: cover;
}
.ric {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= base_url() ?>/img/ricemeal.jpg), no-repeat center center;
  background-size: cover;
}
.pas {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= base_url() ?>/img/pasta.jpg), no-repeat center center;
  background-size: cover;
}
.san {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= base_url() ?>/img/sandwich.jpg), no-repeat center center;
  background-size: cover;
}
.emp {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= base_url() ?>/img/others.jpg), no-repeat center center;
  background-size: cover;
}
.pic {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= base_url() ?>/img/pica.jpg), no-repeat center center;
  background-size: cover;
}
.about {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= base_url() ?>/img/continentea.jpg), no-repeat center center;
  background-size: cover;
}

</style>
