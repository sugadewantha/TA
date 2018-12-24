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
                      <a class="active" href="<?php echo base_url()."index.php/masterController/dashboard"; ?>">
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
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Page Configuration</span>
                      </a>
                      <ul class="sub">
                          <li>
                            <a  href="<?php echo base_url()."index.php/adminController/bannerConfig"; ?>"><i class="fa fa-plus"></i>Add Banner</a>
                          </li>
                          <li>
                            <a  href="<?php echo base_url()."index.php/adminController/editBanner"; ?>"><i class="fa fa-edit"></i>Banner Edit</a>
                          </li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                <div class="col-lg-9 main-chart">
                
                  <div class="row mtbox">
                    <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                      <div class="box1">
                        <span class="li_heart"></span>
                        <h3>933</h3>
                              </div>
                        <p>933 People liked your page the last 24hs. Whoohoo!</p>
                            </div>
                            <div class="col-md-2 col-sm-2 box0">
                              <div class="box1">
                        <span class="li_cloud"></span>
                        <h3>+48</h3>
                              </div>
                        <p>48 New files were added in your cloud storage.</p>
                            </div>
                            <div class="col-md-2 col-sm-2 box0">
                              <div class="box1">
                        <span class="li_stack"></span>
                        <h3>23</h3>
                              </div>
                        <p>You have 23 unread messages in your inbox.</p>
                            </div>
                            <div class="col-md-2 col-sm-2 box0">
                              <div class="box1">
                        <span class="li_news"></span>
                        <h3>+10</h3>
                              </div>
                        <p>More than 10 news were added in your reader.</p>
                            </div>
                            <div class="col-md-2 col-sm-2 box0">
                              <div class="box1">
                        <span class="li_data"></span>
                        <h3>OK!</h3>
                              </div>
                        <p>Your server is working perfectly. Relax & enjoy.</p>
                    </div>
                  </div>
                  
                      
                  <!-- <div class="row mt">
                    <div class="col-md-4 col-sm-4 mb">
                      <div class="white-panel pn donut-chart">
                        <div class="white-header">
                          <h5>SERVER LOAD</h5>
                        </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 goleft">
                          <p><i class="fa fa-database"></i> 70%</p>
                        </div>
                      </div>
                      <canvas id="serverstatus01" height="120" width="120"></canvas>
                      <script>
                        var doughnutData = [
                            {
                              value: 70,
                              color:"#68dff0"
                            },
                            {
                              value : 30,
                              color : "#fdfdfd"
                            }
                          ];
                          var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                      </script>
                      </div>
                    </div>                    
                </div> -->
                    
                    <div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>VISITS</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
                    </div>
          
          
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->

                  <div class="col-lg-3 ds">
                    <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                  </div>

              </div> <!--/row -->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      
     <!-- script -->
  <script src="<?php echo base_url('assets/js/extra/jquery.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/extra/bootstrap.min.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/extra/gritter/js/jquery.gritter.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/gritter-conf.js'); ?>" type="text/javascript" ></script>
 
  <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to bimbo Admin-Page!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            // (string | optional) the image to display on the left
            image: '<?php echo base_url('assets/images/adm-img/bimbo-logo-small.png')?>',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  // </script>

  //<script type="application/javascript">
  //       $(document).ready(function () {
  //         $("#my-calendar").zabuto_calendar({
  //           today: true,
  //         });
  //       });
  //       </script>