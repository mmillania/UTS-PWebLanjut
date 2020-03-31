<!doctype html>
<html lang="en">

  <head>
    <title>Car Rent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?php echo base_url()?>https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_customer/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_customer/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_customer/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_customer/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_customer/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_customer/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_customer/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_customer/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_customer/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="<?php echo base_url('Customer/Beranda')?>">CarRent</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="<?php echo base_url('Customer/Beranda')?>">Home</a></li>
                  <?php if($this->session->userdata('nama')) { ?>
                  <li><a href="<?php echo base_url('Customer/Data_mobil')?>">Cars</a></li>
                  <li><a href="<?php echo base_url('Customer/About')?>">About</a></li>
                   <li><a href="<?php echo base_url('Auth/Logout')?>">Logout</a></li>
                   
                   <?php } else { ?>
                    <li><a href="<?php echo base_url('Customer/About')?>">About</a></li>
                    <li><a href="<?php echo base_url('Register')?>">Register</a></li>
                    <li><a href="<?php echo base_url('Auth/login')?>">Login</a></li>
                    
                    <?php } ?>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>