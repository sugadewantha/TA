<!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
            <p>&copy; Splash 'em All 2018. All Rights Reserved.</p>
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
<!-- END WRAP EM ALL -->

 <!-- script -->
  <!-- <script src="<?php echo base_url('assets/js/extra/jquery.js'); ?>" type="text/javascript" ></script> -->
  <!-- <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>" type="text/javascript" ></script> -->
  <script src="<?php echo base_url('assets/js/jquery-1.9.1.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js'); ?>" type="text/javascript" ></script>
  <!--custom switch, checkbox & radio-->
  <script src="<?php echo base_url('assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/bootstrap/bootstrap-switch.js'); ?>" type="text/javascript" ></script>

  <!-- <script src="<?php echo base_url('assets/extra/bootstrap-switch/docs/js/highlight.js'); ?>" rel="stylesheet"></script>
    <script src="<?php echo base_url('assets/extra/bootstrap-switch/dist/js/bootstrap-switch.js'); ?>" rel="stylesheet"></script>
    <script src="<?php echo base_url('assets/extra/bootstrap-switch/docs/js/main.js'); ?>" rel="stylesheet"></script> -->

  <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>" type="text/javascript" ></script>
  
  <!-- <script src="<?php echo base_url('assets/extra/jquery-easy-pie-chart/jquery.easy-pie-chart.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.js'); ?>" ></script>
  <script src="<?php echo base_url('assets/js/jquery.customSelect.min.js'); ?>" ></script>
  <script src="<?php echo base_url('assets/js/respond.min.js'); ?>" ></script>
  <script src="<?php echo base_url('assets/extra/ckeditor/ckeditor.js'); ?>" type="text/javascript"></script> -->
  
  <!-- common script all admin pages -->
  <script src="<?php echo base_url('assets/js/common-scripts.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/extra/gritter/js/jquery.gritter.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/gritter-conf.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/form-component.js'); ?>" type="text/javascript" ></script>
  
  <!-- script dashboard page -->
  <!-- <script src="<?php echo base_url('assets/js/easy-pie-chart.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/count.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/sparkline-chart.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/jquery.sparkline.js'); ?>" type="text/javascript"></script>  -->

  <!-- extra plugin script -->
  

  <script type="text/javascript" src="<?php echo base_url('assets/extra/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/extra/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/extra/bootstrap-daterangepicker/moment.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/extra/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/extra/bootstrap-colorpicker/js/bootstrap-colorpicker.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/extra/bootstrap-timepicker/js/bootstrap-timepicker.js'); ?>"></script>
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/extra/bootstrap-fileupload/bootstrap-fileupload.js'); ?>"></script> -->

  <script type="text/javascript" src="<?php echo base_url('assets/extra/advanced-datatable/media/js/jquery.dataTables.js'); ?>" language="javascript" ></script>
  <script type="text/javascript" src="<?php echo base_url('assets/extra/data-tables/DT_bootstrap.js'); ?>"></script>


   <script type="text/javascript">
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartTemperature", {
      exportEnabled: true,
      animationEnabled: true,
      theme: "light2",
      title:{
        text: "Suhu Tanaman - Taman Depan & Taman Belakang"
      },
      axisX: {
        title: "May 2018",
        valueFormatString: "DD MMM"
      },
      axisY: {
        suffix: " °C"
      },     
      toolTip: {
        shared: true
      },
      legend: {
        cursor: "pointer",
        horizontalAlign: "right",
        itemclick: toggleDataSeries
      },
      data: [{
        type: "rangeArea",
        showInLegend: true,
        name: "Taman Depan",
        markerSize: 0,
        yValueFormatString: "#0.## °C",
        dataPoints: [
          { x: new Date(2018, 04, 01), y: [05, 21] },
          { x: new Date(2018, 04, 02), y: [07, 15] },
          { x: new Date(2018, 04, 03), y: [07, 18] },
          { x: new Date(2018, 04, 04), y: [09, 16] },
          { x: new Date(2018, 04, 05), y: [10, 17] },
          { x: new Date(2018, 04, 06), y: [08, 13] },
          { x: new Date(2018, 04, 07), y: [06, 10] },
          { x: new Date(2018, 04, 08), y: [06, 15] },
          { x: new Date(2018, 04, 09), y: [06, 20] },
          { x: new Date(2018, 04, 10), y: [05, 21] },
          { x: new Date(2018, 04, 11), y: [06, 21] },
          { x: new Date(2018, 04, 12), y: [07, 14] }
        ]
      },
      {
        type: "rangeArea",
        showInLegend: true,
        name: "Taman Belakang",
        markerSize: 0,
        yValueFormatString: "#0.## °C",
        dataPoints: [
          { x: new Date(2018, 04, 01), y: [15, 31] },
          { x: new Date(2018, 04, 02), y: [16, 30] },
          { x: new Date(2018, 04, 03), y: [14, 30] },
          { x: new Date(2018, 04, 04), y: [15, 30] },
          { x: new Date(2018, 04, 05), y: [17, 33] },
          { x: new Date(2018, 04, 06), y: [19, 35] },
          { x: new Date(2018, 04, 07), y: [20, 30] },
          { x: new Date(2018, 04, 08), y: [15, 31] },
          { x: new Date(2018, 04, 09), y: [16, 32] },
          { x: new Date(2018, 04, 10), y: [16, 33] },
          { x: new Date(2018, 04, 11), y: [16, 35] },
          { x: new Date(2018, 04, 12), y: [17, 36] }
        ]
      }]
    });
    chart.render();

    function toggleDataSeries(e) {
      if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
      } else {
        e.dataSeries.visible = true;
      }
      e.chart.render();
    }

    }

  </script>
  <script src="<?php echo base_url('assets/extra/canvasjs-chart/canvasjs.min.js'); ?>" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/sparkline-chart.js'); ?>"></script>    
  <script src="<?php echo base_url('assets/js/zabuto_calendar.js'); ?>"></script> 

    <!-- custom select box -->
    <script>
      $(function(){
          $('select.styled').customSelect();
      });
    </script> 

  </body>
</html>