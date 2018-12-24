<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	// lodad fungsi view login
	public function index()
	{
		$this->load->view('view_login');
	}

	// cek indentitas login untuk mengecek username dan pasword
	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);

		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		echo "coba";
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['username'] = $sess->username;
				$sess_data['akses'] = $sess->akses;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('akses')=='admin') {
				redirect('controller_admin');
				// echo "suster";
			}
			elseif ($this->session->userdata('akses')=='editor') {
				// echo "dokter";
				redirect('controller_editor');
			}
			elseif ($this->session->userdata('akses')=='staff') {
				// echo "dokter";
				redirect('controller_staff');
			}			
		}
		// else {
		// 	echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		// }
	}

	
}
