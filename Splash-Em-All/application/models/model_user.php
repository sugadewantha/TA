<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		// untuk load data user dari database
		public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}

	}

?>
