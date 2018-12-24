<!-- WRAP EM ALL -->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            
            <h3><i class="fa fa-angle-right"></i>Pengelolaan Jadwal</h3>
            <div class="row mt">
              <div class="col-lg-12">
             
                <table class="table table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>Id Jadwal</th>
                      <th>Jadwal Penyiraman</th>
                      <th>Taman</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($Jadwal_penyiraman as $jdwl){
                      echo "<tr><td>". $jdwl->id_jadwal;
                      echo "</td><td>". $jdwl->jadwal_penyiraman;
                      echo "</td><td>". $jdwl->taman;
                      echo "</td><td>";
                      echo "<a href='". base_url() ."index.php/controller_penjadwalan/formUpdateJadwal/". $jdwl->id_jadwal ."' title='Update'><i class='fa fa-pencil'></i> Update</a>";
                      echo "</td><td>";
                      echo "<a href='". base_url() ."index.php/controller_penjadwalan/deleteJadwal/". $jdwl->id_jadwal ."' title='Delete'><i class='fa fa-trash-o'></i> Delete</a>";
                      echo "</td></tr>";
                    }
                    ?>
                  </tbody>
                  <!-- button -->
                  <tfoot>
                      
                      <td><a type="button" style="cursor:pointer" data-toggle="modal" href="#myModal"><button class="btn btn-success">Insert Jadwal</button></a></td>
                      <td><a type="button" style="cursor:pointer" data-toggle="modal" href="<?php echo base_url(); ?>index.php/pengecekan_jadwal/cek_jadwal"><button class="btn btn-success">Cek Jadwal</button></a></td>
                      <td>
                        
                  </tfoot>
                  <!-- button -->
                </table>
                
                <!-- Modal INSERT-->
                  <div class="col-lg-4">      
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">INSERT JADWAL</h4>
                                </div>
                                <div class="modal-body">
                                  <table class="table">
                                    <!-- <p class="centered"><img class="img-circle" width="80" src="assets/img/ui-sam.jpg"></p>
                                    <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix"> -->
                                  <form action="<?php echo base_url(); ?>index.php/controller_penjadwalan/insertJadwal" method="POST">
                                      <tr>
                                        <!-- <td><span class="uneditable-input input-medium">#</span></td> -->
                                        <td><input type="text" name="jadwal_penyiraman" placeholder="hh:mm:ss" maxlength="8" class="form-control placeholder-no-fix"></td>
                                        <td><input type="text" name="taman" placeholder="taman" maxlength="20" class="form-control placeholder-no-fix"></td>
                                      </tr>
                                  </table>
                                  </div>
                                    <div class="modal-footer centered">
                                      <button data-dismiss="modal" class="btn btn-theme04" type="button">Cancel</button>
                                      <button class="btn btn-theme03" type="submit" value="Insert">Insert</button>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>   
                  </div>
                <!--END Modal INSERT-->

              

              </div>
            </div>
           </section><!--/wrapper -->
        </section><!-- /MAIN CONTENT -->

        <!--main content end-->

    </section>
<!-- END WRAP EM ALL -->
