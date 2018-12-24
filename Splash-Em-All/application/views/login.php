<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Splash Em' All - Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('assets/css/theme-default.css');?>">
        <!-- EOF CSS INCLUDE -->     
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('assets/css/style.css'); ?>">                               
    </head>
    <body>

        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo cs-login">
                <!-- <div class="cs-img-login">
                   <img src="<?php echo base_url('assets/images/logo.png');?>"> 
                </div> -->
                </div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <?php echo form_open('Welcome/cek_login'); ?>
                    <form class="form-horizontal"> 
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" name="username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    <!-- </form> -->
                    
                    </form>
                    <?php  echo form_close();?>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; Smart Planting Systems | Splash Em' All.
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </body>
</html>