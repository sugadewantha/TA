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
  <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
  <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
  <link href="<?php echo base_url('assets/css/lineicons/style.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
  <!-- custom style -->
  <link href="<?php echo base_url('assets/css/adminstyle.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
  <link href="<?php echo base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet" type="text/css"  media="all" />

</head>
<body>
<!-- WRAP EM ALL -->
   
  <section id="container" >
      
       <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
            
                <p class="centered"><a href="#"><img src="<?php echo base_url('assets/images/users/author.png')?>" class="img-circle" width="60"></a></p>
                <h5 class="centered">Sugadewantha</h5>
                  
                <li class="mt">
                    <a class="active" href="<?php echo base_url()."index.php/controller_admin/dashboard"; ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url()."index.php/controller_admin/penyiraman"; ?>" >
                        <i class="fa fa-tint fa-lg"></i>
                        <span>Penyiraman Tanaman</span>
                    </a>
                    <!-- <ul class="sub">
                        <li><a  href="<?php echo base_url()."index.php/controller_admin/formComponent"; ?>">Form Component</a></li>
                    </ul> -->
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url()."index.php/controller_admin/pengelolaanJadwal"; ?>" >
                        <i class="fa fa-calendar"></i>
                        <span>Pengelolaan Jadwal</span>
                    </a>
                    <!-- <ul class="sub">
                        <li>
                          <a  href="<?php echo base_url()."index.php/adminController/bannerConfig"; ?>"><i class="fa fa-plus"></i>Add Banner</a>
                        </li>
                        <li>
                          <a  href="<?php echo base_url()."index.php/adminController/editBanner"; ?>"><i class="fa fa-edit"></i>Banner Edit</a>
                        </li>
                    </ul> -->
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->
        
  </section>
<!-- END WRAP EM ALL -->

  <!-- script -->
  <script src="<?php echo base_url('assets/js/extra/jquery.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js'); ?>" type="text/javascript" ></script>
  <!-- common script all admin pages -->
  <script src="<?php echo base_url('assets/js/common-scripts.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/gritter/js/jquery.gritter.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/assets/js/gritter-conf.js'); ?>" type="text/javascript" ></script>

</body>
</html>