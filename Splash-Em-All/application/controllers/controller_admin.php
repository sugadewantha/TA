<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_admin extends CI_Controller {

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
	// public function __construct() {
	// 	parent::__construct();
		
	// 	if ($this->session->userdata('username')=="") {
	// 		redirect('Welcome');
			
	// 	}
	// 	$this->load->helper('text');
	// }
	function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id_user')){
            redirect(base_url());
        }

        //  $this->load->model('Admin_Model');
        // $this->load->model('Banner_Model');
    }

	public function index()
	{
		$this->dashboard();
	}

	// === fungsi link ===

	public function dashboard(){
		$data['title'] = "Dashboard";
		// $data['active'] = "active";
		// $data['role'] = "ADMIN";
		// $this->load->model('Jadwal_penyiraman');
		// $data['Jadwal_penyiraman'] = $this->Jadwal_penyiraman->get_all();
		$data['jadwal_siram'] = $this->db->query('SELECT jadwal_penyiraman.id_jadwal, jadwal_penyiraman.jadwal_penyiraman, jadwal_penyiraman.taman from jadwal_penyiraman');

		$this->load->view("header", $data);
		$this->load->view("sidebar");		
		$this->load->view("view_dashboard");
		$this->load->view("footer");
	}

	public function charts(){
		$data['title'] = "charts";
		// $data['active'] = "active";
		// $data['role'] = "ADMIN";

	
		$this->load->view("view_charts");

	}

	public function penyiraman(){
		$data['title'] = "Penyiraman Tanaman";
		// $data['active'] = "active"; 
		// $data['role'] = "ADMIN";

		$this->load->view("header", $data);
		$this->load->view("sidebar");
		$this->load->view("view_penyiraman");
		$this->load->view("footer");
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
	
	// fungsi untuk menghancurkan session pada halaman admin
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('akses');
		session_destroy();
		redirect('Auth'); //Welcome
	}

	
}