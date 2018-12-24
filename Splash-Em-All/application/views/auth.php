<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
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
<!-- <div class="login-wrap"> -->
  <!-- <div class="login-form"> -->
     
    <div class="container">
    <div class="login-square">
    		<div class="row login-wrapper">
    			<div class="col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-3">

          <h1><img src="<?php echo base_url('assets/images/bimbo-logo-cartoon.png')?>" alt="logo"></h1>

    				<div class="panel panel-default">
    					<div class="panel-heading">
    						<strong>Login Form</strong>
    					</div>
    					<div class="panel-body">  
                <?php $error = $this->session->flashdata("error"); ?>
    						<div class="alert alert-<?php echo $error ? 'warning' : 'info' ?> alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $error ? $error : 'Enter your username and password' ?>
                  </div>
    						<?php echo form_open(); ?>  
                  <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>              
    							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
    								
    								<div class="input-group">
    									<!-- <span class="input-group-addon">
    										<i class="glyphicon glyphicon-user"></i>
    									</span> -->
    									<input type="text" name="username" value="<?php echo set_value("username") ?>" placeholder="Username " id="username"  class="form-control">   
    								</div>  
                    <?php echo $error; ?>
                    <i class="fa fa-user"></i>
    							</div>
                  <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
    							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
    								<div class="input-group">
    									<!-- <span class="input-group-addon">
    										<i class="glyphicon glyphicon-lock"></i>
    									</span> -->
    									<input type="password" name="password" id="password" placeholder="Password" class="form-control">
    								</div> 
                    <?php echo $error; ?>
                    <i class="fa fa-lock"></i>
    							</div>
                  <div class="form-group ">
    							<input type="submit" value="Login" class="log-btn">
                  </div>
                  
                <h2>"Please Login First!"</h2>
    						<?php echo form_close(); ?>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  <!-- END CONTENT -->
<!-- END WRAP EM ALL -->

  <!-- script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
  <script src="<?php echo base_url('assets/js/extra/jquery.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/extra/lightbox.min.js'); ?>" type="text/javascript"></script>

  <!-- login-custom.js -->

</body>
</html>