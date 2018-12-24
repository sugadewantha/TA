<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_penjadwalan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
		$this->pengelolaanJadwal();
	}

	public function pengelolaanJadwal($message = -1, $messageData=""){
		$data['title'] = "Pengelolaan Jadwal";
		// $data['active'] = "active";  
		// $data['role'] = "ADMIN";
		$this->load->model('Jadwal_penyiraman');
		$data['Jadwal_penyiraman'] = $this->Jadwal_penyiraman->get_all();
		$data['messageData'] = $messageData;
		$this->load->view("header", $data);
		$this->load->view("sidebar");
		$this->load->view("view_pengelolaan_jadwal",$data);
		if($message > 0)
			$this->load->view('sukses', $data);
		else if($message == 0)
			$this->load->view('gagal', $data);
		$this->load->view("footer");
	}
	//jadwal_penyiraman
	function viewJadwal($message = -1, $messageData=""){
		$data['active'] = "Jadwal_penyiraman";
		$this->load->model('Jadwal_penyiraman');
		$data['Jadwal_penyiraman'] = $this->Jadwal_penyiraman->get_all();
		$data['messageData'] = $messageData;

		$this->load->view("header", $data);
		$this->load->view("sidebar");
		$this->load->view("view_pengelolaan_jadwal",$data);
		if($message > 0)
			$this->load->view('sukses', $data);
		else if($message == 0)
			$this->load->view('gagal', $data);
		$this->load->view("footer");
	}
	function insertJadwal(){
		$data['active'] = "Jadwal_penyiraman";
		$this->load->model('Jadwal_penyiraman');
		$message = $this->Jadwal_penyiraman->insert($_POST);

		$this->viewJadwal($message, "diinputkan");
	}
	function formUpdatejadwal($id_jadwal){
		$data['title'] = "Update Jadwal";
		$data['active'] = "Jadwal_penyiraman";
		$this->load->model('Jadwal_penyiraman');
		$data['Jadwal_penyiraman'] = $this->Jadwal_penyiraman->get($id_jadwal);

		$this->load->view("header", $data);
		$this->load->view("sidebar");
		$this->load->view("view_admin/updateJadwal",$data);
		$this->load->view('footer');
	}
	function updateJadwal(){
		$data['active'] = "Jadwal_penyiraman";
		$this->load->model('Jadwal_penyiraman');
		$message = $this->Jadwal_penyiraman->update($_POST);

		$this->viewJadwal($message,"diupdate");
	}
	function deleteJadwal($id_jadwal){
		$data['active'] = "Jadwal_penyiraman";
		$this->load->model('Jadwal_penyiraman');
		$message = $this->Jadwal_penyiraman->delete($id_jadwal);

		$this->viewJadwal($message,"dihapus");
	}
	//cek jadwal
	function cekjadwal(){
		$this->load->model('Jadwal_penyiraman');
		// $data['Jadwal_penyiraman'] = $this->Jadwal_penyiraman->get_all();
		// $hasil = $this->Jadwal_penyiraman->check_jadwal($data)
		$current_time = date("H:i");
		$jadwal_penyiraman = $this->Jadwal_penyiraman->get_all();
		foreach ($jadwal_penyiraman as $key => $value) {
			
		
			if (date('H:i', strtotime($value->jadwal_penyiraman)) == $current_time){
				echo "Ada Jadwal Saat Ini <br>";
				echo "<a href='". base_url() ."index.php/controller_penjadwalan/pengelolaanJadwal"."' title='Back'><br>Back</a>";
				
			}
			// echo $value->jadwal_penyiraman;
			// echo '<br/>';
		}
		
		// echo $current_time;	
		
  //       $data['jadwal_penyiraman'] = $jadwal_penyiraman;
		// $data['jadwal_penyiraman'] = date('H:i',strtotime($this->input->post('jadwal_penyiraman')));
		// $start_time = ['jadwal_penyiraman'];
		// $end_time = ['jadwal_penyiraman' == 0];
		// $current_time = date("H:i:s");

	    // if ($start_time == $jadwal_penyiraman)
	    // {
	    //     echo "Jadwal Saat Ini <br>";
	    //     echo "The time is " . date("H:i:sa");
	    //     // terdapat jadwal saat ini
	    //     echo "<a href='". base_url() ."index.php/controller_penjadwalan/pengelolaanJadwal"."' title='Back'><br>Back</a>";
	    // }
	    // else
	    // {
	    //     if($start_time != $jadwal_penyiraman)
	    //     {
	    //         echo "Tidak Ada Jadwal Saat Ini <br>";
	    //         echo $current_time;
	    //        	// terdapat jadwal pada jam lain
	    //        	echo "<a href='". base_url() ."index.php/controller_penjadwalan/pengelolaanJadwal"."' title='Back'><br>Back</a>";

	    //     }
	    //     else
	    //     {
	    //         echo "Jadwal Tidak Ditemukan <br>";
	    //         // jadwal belum diset
	    //         echo "<a href='". base_url() ."index.php/controller_penjadwalan/pengelolaanJadwal"."' title='Back'><br>Back</a>";
	    // 	   }
	    // }
 

		// $data['active'] = "Jadwal_penyiraman";
		// $this->load->model('Jadwal_penyiraman');
		// $data['Jadwal_penyiraman'] = $this->Jadwal_penyiraman->get($id_jadwal);
		// $this->load->view("header", $data);
		// $this->load->view("sidebar");
		// $this->load->view("view_admin/updateJadwal",$data);
		// $this->load->view('footer');
	}
}