
<!-- WRAP EM ALL -->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                <div class="col-lg-9 main-chart">
                  
                  <!-- DISPLAY JADWAL PENYIRAMAN -->
                  <div class="row mtbox">

                    <div class="col-md-12 mt">
                      <div class="content-panel">
                            <table class="table table-hover">
                            
                               <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Jadwal Penyiraman</th>
                                      <th>Taman</th>
                              </thead>
                              <tbody id="message-tbody">
                               <?php 
                                  if($jadwal_siram->num_rows() > 0){
                                      foreach ($jadwal_siram->result() as $row) {
                                          # code...
                                 ?>  
                                 <tr>
                                      <td><?php echo $row->id_jadwal; ?></td>
                                      <td><?php echo $row->jadwal_penyiraman; ?></td>
                                      <td><?php echo $row->taman; ?></td>
                                  </tr>
                                  <?php
                                      }
                                  }     
                                 ?>

                                </tbody>
                            </table>
                        </div><!--/content-panel -->
                    </div><!-- /col-md-12 -->
                    
                    <!-- <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                      <div class="box1">
                        <span class="li_heart"></span>
                        <h3>420</h3>
                              </div>
                        <p>420 People liked your page the last 24hs. Whoohoo!</p>
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
                    </div> -->

                  </div>

                <!-- DISPLAY JADWAL PENYIRAMAN -->
                  
                      
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
                    

                    <!-- TEMPERATURE CHARTS -->
                    <div class="row mt">
                      <div class="col-md-12">
                        <div class="content-panel">

                        <div id="chartTemperature" style="height: 300px; width: 100%;"></div>

                        <?php 


                        $taman1="17°";
                        $taman2="7°";

                        print("Suhu taman belakang saat ini: $taman1 <br>");
                        print("Suhu taman depan saat ini: $taman2");
                        ?>
                        <br/>

                        </div>
                      </div> 
                    </div>
                  <!-- TEMPERATURE CHARTS -->
            
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
                        </div>
                        <!-- <div id="calendar" class="mb">
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
                        </div> -->
                    <!-- / calendar -->
                  </div>

              </div> <!--/row -->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      
   <!-- script -->
  <script src="<?php echo base_url('assets/js/extra/jquery.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>" type="text/javascript" ></script>
  <!-- <script src="<?php echo base_url('assets/js/extra/bootstrap.min.js'); ?>" type="text/javascript" ></script> -->
  
  <!-- <script src="<?php echo base_url('assets/extra/gritter/js/jquery.gritter.js'); ?>" type="text/javascript" ></script> -->
  <!-- <script src="<?php echo base_url('assets/js/gritter-conf.js'); ?>" type="text/javascript" ></script> -->
  <script src="<?php echo base_url('assets/js/jquery.sparkline.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/sparkline-chart.js'); ?>" type="text/javascript" ></script>

  <!-- <script src="<?php echo base_url('assets/extra/canvasjs-chart/canvasjs.min.js'); ?>" type="text/javascript" ></script> -->
  <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
 
  <script class="include" type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js'); ?>"></script>

  <!--common script for all pages-->
  <script src="<?php echo base_url('assets/js/common-scripts.js'); ?>"></script>
  

  <!--script for this page-->
  <!-- chart script -->

  <!-- chart script -->

  <!-- calendar script -->
  <script type="application/javascript">
  $(document).ready(function () {
  $("#date-popover").popover({html: true, trigger: "manual"});
  $("#date-popover").hide();
  $("#date-popover").click(function (e) {
      $(this).hide();
  });

  $("#my-calendar").zabuto_calendar({
      today: true,
      action: function () {
          return myDateFunction(this.id, false);
      },
      action_nav: function () {
          return myNavFunction(this.id);
      },
      ajax: {
          url: "show_data.php?action=1",
          modal: true
      },
      legend: [
          {type: "text", label: "Special event: ", badge: "00"},
          {type: "block", label: "Regular event", }
      ]
    });
  });
          
  function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
  }

  </script>

  <!-- <script>
    $(document).ready(function() {
        $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
    });
  </script> -->
  <!-- <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            (string | mandatory) the heading of the notification
            title: 'Welcome to Splash Em All!',
            (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            (string | optional) the image to display on the left
            text: '<?php echo base_url('assets/images/adm-img/bimbo-logo-small.png')?>',
            (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            (int | optional) the time you want it to be alive for before fading out
            time: '',
            (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>