<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller
{
	// fungsi untuk menampilkan halaman home admin/dashboard
	public function index(){
		
		$data['username'] = $this->session->userdata('username');
		$data['akses'] = $this->session->userdata('akses');
		
		$this->load->view('dashboard',$data);
	}
	
	

}
