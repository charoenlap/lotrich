<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="<?php echo $description;?>">
    <title><?php echo $title; ?></title>
    <meta name="author" content="">


  <link rel="icon" href="assets/image/logo.png" type="image/icon type">

  <title><?php echo $title;?></title>
  <?php if(isset($style)){ 
    foreach ($style as $key => $value) { ?>
    <link rel="stylesheet" href="<?php echo $value;?>">
  <?php } } ?>
  <link rel="stylesheet" href="assets/main.css">
  <link href="assets/boostrap_jquery/css/bootstrap.css" rel="stylesheet" >
  <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">

  <script src="assets/boostrap_jquery/js/jquery.js"></script>
  <script 
    src="assets/boostrap_jquery/js/popper.js"></script>
  <script src="assets/boostrap_jquery/js/bootstrap.js"></script>
  <script src="assets/fontawesome/js/all.js"></script>
  <?php 
  if(isset($script)){
  foreach ($script as $key => $value) { ?>
    <script src="<?php echo $value;?>"></script>
  <?php } } ?>
</head>
<body class="<?php echo (isset($class_body)?$class_body:''); ?>">
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="navbar navbar-expand-md navbar-light">
    
    <div class="mx-auto">
        <a class="navbar-brand mx-auto block-logo" href="<?php echo $link_home; ?>">
          <img src="uploads/logo/slogo.png" alt="" class="logo_header img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto mt-2">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo route('home'); ?>">หน้าหลัก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo route('member/dashboard'); ?>">สมาชิก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $link_result; ?>">ผลรางวัล</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $link_contact; ?>">ติดต่อเรา</a>
          </li>
          
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto  mt-2">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              สมาชิก xxx
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $link_login; ?>">เข้าสู่ระบบ</a>
              <a class="dropdown-item" href="<?php echo $link_register; ?>">สมัครสมาชิก</a>

              <a class="dropdown-item" href="<?php echo $link_dashboard; ?>">สมาชิก</a>
              <a class="dropdown-item" href="<?php echo $link_deposit; ?>">เติมเงิน</a>
              <a class="dropdown-item" href="<?php echo $link_forgot; ?>">ลืมรหัสผ่าน</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo $link_logout; ?>">ออกจากระบบ</a>
            </div>
          </li>
          <li class="my-2 my-lg-0">
            <a class="nav-link" href="#">฿0.00</a>
          </li>
        </ul>
    </div>
</nav>