<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masterController extends CI_Controller {

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
		$this->login();
	}

	// === fungsi link ===

	public function login(){
		// $data['title'] = "Home Page"; 
		// $load['banner'] = $this->db->select('*')->from('banner')->get()->result();
		$this->load->view("view_login"); //, $load
		
	}

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
	function cekjadwal($id_jadwal){
		$data['active'] = "Jadwal_penyiraman";
		$this->load->model('Jadwal_penyiraman');
		$data['Jadwal_penyiraman'] = $this->Jadwal_penyiraman->get($id_jadwal);

		$this->load->view("header", $data);
		$this->load->view("sidebar");
		$this->load->view("view_admin/updateJadwal",$data);
		$this->load->view('footer');
	}

	//registration
	function registration(){ 
		$data['title'] = "Registration Page"; 
		$this->load->view("view_registration", $data);
	}	

	function show_data(){
		$this->load->view("show_data", $data);
	}

	public function formComponent(){
		// $data['title'] = "Home Page"; 
		// $load['banner'] = $this->db->select('*')->from('banner')->get()->result();
		$this->load->view("form_component"); //, $load
		
	}
}