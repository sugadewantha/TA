<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- icon  -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/bimbo-icon.png'); ?>" type="image/x-icon">
  <!-- style -->
  <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
  <link href="<?php echo base_url('assets/css/adminstyle.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
  <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
  <link href="<?php echo base_url('assets/css/lightbox.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
  <link href="<?php echo base_url('assets/css/responsive.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
  <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet" type="text/css" >

</head>
<body>
<!-- WRAP EM ALL -->
  <div class="login-wrap">
    <div class="login-form">
        <h1><img src="<?php echo base_url('assets/images/bimbo-logo-cartoon.png')?>" alt="logo"></h1>
         <div class="form-group ">
           <input type="text" class="form-control" placeholder="Username " id="userName" name="username">
           <i class="fa fa-user"></i>
         </div>
         <div class="form-group log-status">
           <input type="password" class="form-control" placeholder="Password" id="passwod" name="password">
           <i class="fa fa-lock"></i>
         </div>
        <span class="alert">Invalid Credentials</span>
        <a class="link" href="#">Lost your password?</a>
        <!-- <button type="button" class="log-btn">Log in</button> -->
        <div class="form-group ">
          <input type="submit" class="log-btn" value="Login">
        </div>
        <li><a href="<?php echo base_url()."index.php/adminController/dashboard"; ?>">Login here</a></li> 
        <h2>"Please Login First!"</h2>
    </div>
  </div>
   <!-- END CONTENT -->
<!-- END WRAP EM ALL -->

  <!-- script -->
  <script src="<?php echo base_url('assets/js/extra/jquery.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/extra/lightbox.min.js'); ?>" type="text/javascript"></script>
  <!-- login-custom.js -->

</body>
</html>