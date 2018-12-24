<!-- WRAP EM ALL -->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            
            <h3><i class="fa fa-angle-right"></i>Update Jadwal</h3>
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
                    <form action="<?php echo base_url(); ?>index.php/controller_penjadwalan/updateJadwal" method="POST">
                      <input class="input-small" type="hidden" name="id_jadwal" placeholder="id_jadwal" maxlength="10" value="<?php echo $Jadwal_penyiraman[0]->id_jadwal ?>">
                      <tr>
                        <td><span class="uneditable-input input-medium"><?php echo $Jadwal_penyiraman[0]->id_jadwal; ?></span></td>
                        <td><input class="input-small" type="text" name="jadwal_penyiraman" placeholder="hh:mm:ss" maxlength="8" value="<?php echo $Jadwal_penyiraman[0]->jadwal_penyiraman ?>"></td>
                        <td><input class="input-small" type="text" name="taman" placeholder="taman" maxlength="15" value="<?php echo $Jadwal_penyiraman[0]->taman ?>"></td>
                        <td><input class="btn btn-warning" type="submit" value="Update"></td>
                        <td><a href="<?php echo base_url()."index.php/controller_penjadwalan/pengelolaanJadwal"; ?>" class="btn btn-danger">Cancel</a></td>
                        <td></td>
                      </tr>
                    </form>
                  </tbody>
                </table>
              </div>

              </div>
            </div>
           </section><!--/wrapper -->
        </section><!-- /MAIN CONTENT -->

        <!--main content end-->

    </section>
<!-- END WRAP EM ALL -->