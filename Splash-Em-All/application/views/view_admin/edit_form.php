<!--  WRAP EM ALL -->
  <section id="container" >
     
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url('assets/images/users/author.png')?>" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Sugadewantha</h5>
                    
                  <li class="mt">
                      <a href="<?php echo base_url()."index.php/adminController/dashboard"; ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Additional Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url()."index.php/adminController/calendarPage"; ?>">Calendar</a></li>
                          <li><a  href="<?php echo base_url()."index.php/adminController/adminGallery"; ?>">Gallery</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Page Configuration</span>
                      </a>
                      <ul class="sub">
                          <li>
                            <a  href="<?php echo base_url()."index.php/adminController/bannerConfig"; ?>"><i class="fa fa-plus"></i>Add Banner</a>
                          </li>
                          <li>
                            <a style="color: #FFFFFF;" href="<?php echo base_url()."index.php/adminController/editBanner"; ?>"><i class="fa fa-edit"></i>Banner Edit</a>
                          </li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

       <?php
        if (isset($query)){
            foreach ($query->result_array() as $row) {

            }
            if (empty($row['photo'])) {
              $photo = "default.gif";
            }else{
              $photo = $row['photo'];
            }
        }
       ?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Banner Edit Form</h3>

          <!-- <form action="<?php echo base_url('index.php/adminController/set_banner'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal" role="form">  -->
          <form class="form-horizontal" role="form">
          <div class="row mt">            
            <div class="col-lg-12">
              <div class="col-md-9">

                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 100%;">
                          <?php
                            if (empty($row['photo'])){$photo = "default.gif";}else{$photo = 'photo/'.$row['photo'];}
                          ?> 
                          <img src="<?php echo base_url()."/images/".$banner->photo ?>" alt="" />
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100%; line-height: 20px;"></div>
                    <div>
                        <span class="fileupload-new">
                          <a href="<?php echo base_url('index.php/adminController/set_banner/'.$banner->id); ?>" class="btn btn-info"> Change Images</a>
                        </span>
                        <span class="btn btn white btn file fileupload-exists">Choose Images<input type="file" class="default" name="userfile" required /></span>
                        <?php if (!empty($row['photo'])){ ?>
                        <a href="<?php echo base_url().'adminController/edit_banner'.$row['id'].'/photo'; ?>" class="btn btn-danger fileupload-new"><i class="fa fa-trash"></i> Delete Images</a>
                        <?php  } ?>
                        <a href="#" name="foto" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Delete Images</a>
                      <div class="form-group">
                        <br/>
                        <div class="col-md-9">
                          <!-- <button type="submit" class="btn btn-success">Save</button> -->
                        </div>
                      </div>
                    </div>
                  </div>

                </div> <!-- end col-md-9 -->
                <!--  -->
              </div> <!-- end col-lg-12 -->

              <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"></h2>
                </div>
              </div>


                <!-- <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-new thumbnail" style="width: 250px; height: 150px;">

                    <?php
                      if (empty($row['photo'])) {
                        $photo = "no_image_200x150.gif";
                      }else{
                        $photo = 'images/'.$row['photo'];
                      }
                    ?>
                    <img src="<?php echo base_url()."/images/".$banner->photo  ?>" style="max-width: 100%;">
                    </div>
                    
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 60%; max-height: 350px; line-height: 20px;"></div>
                    <div>
                      <span class="btn btn-white btn-file">
                        <span class="fileupload-new">Choose Images</span>
                        <span class="fileupload-exists">Change Images</span>
                        <input type="file" class="default" name="userfile"/>

                      </span>
                         <?php if (!empty($row['photo'])){ ?>
                                    <a href="" class="btn btn-danger fileupload-new"><i class="fa fa-trash"></i> Delete Images</a>
                                <?php  } ?>
                                <a href="#" name="foto" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Delete Images</a>
                    </div>
                  </div> -->


            </div>
          </form>
        </section>
      </section>

        <!--main content end-->
    </section>
<!-- END WRAP EM ALL