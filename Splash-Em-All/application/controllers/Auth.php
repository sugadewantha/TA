<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for (all) non logged in users
 */
class Auth extends CI_Controller {	

	public function logged_in_check()
	{
		if ($this->session->userdata("logged_in")) {
			redirect("controller_admin");
		}
	}

	public function index()
	{	
		$this->logged_in_check();
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if ($this->form_validation->run() == true) 
		{
			$this->load->model('auth_model', 'auth');	
			// check the username & password of user
			$status = $this->auth->validate();
			if ($status == ERR_INVALID_USERNAME) {
				$this->session->set_flashdata("error", "Username is invalid");
			}
			elseif ($status == ERR_INVALID_PASSWORD) {
				$this->session->set_flashdata("error", "Password is invalid");
			}
			else
			{
				// success
				// store the user data to session
				$this->session->set_userdata($this->auth->get_data());
				$this->session->set_userdata("logged_in", true);
				// redirect to dashboard
				redirect("controller_admin");
			}
		}

		// $this->load->view("header");		
		$this->load->view("view_login"); // View Login Form
		// $this->load->view("footer");
	}

	public function logout()
	{
		$this->session->unset_userdata("logged_in");
		$this->session->sess_destroy();
		redirect("auth");
	}

}