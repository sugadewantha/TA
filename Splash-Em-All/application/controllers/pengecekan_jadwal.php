<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengecekan_jadwal extends CI_Controller {

	// lodad fungsi view 
	// public function index()
	// {
	// 	$this->load->view('view_dashboard');
	// }

	// pengecekan jadwal penyiraman tanaman
	public function cek_jadwal() {

		$this->load->model('Jadwal_penyiraman');
		$current_time = date("H:i");
		$jadwal_penyiraman = $this->Jadwal_penyiraman->get_all();
		foreach ($jadwal_penyiraman as $key => $value) {
			
		
			if (date('H:i', strtotime($value->jadwal_penyiraman)) == $current_time){
				//fungsi sementara sebelum mengoprasikan penyiraman di wemos
				echo "Ada Jadwal Saat Ini <br>";
				echo "<a href='". base_url() ."index.php/controller_penjadwalan/pengelolaanJadwal"."' title='Back'><br>Back</a>";
				
			}

		}
	}

	
}
