<?php 
class Jadwal_penyiraman extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['jadwal_penyiraman']=="" || $data['taman']=="")
			return 0;
		$str = $this->db->insert_string('jadwal_penyiraman', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('jadwal_penyiraman');
		return $query->result();
	}
	function get($id_jadwal){
		$query = $this->db->get_where('jadwal_penyiraman', array('id_jadwal' => $id_jadwal));
		return $query->result();
	}
	function update($data){
		if($data['id_jadwal']=="" || $data['jadwal_penyiraman']=="" || $data['taman']=="")
			return 0;
		$query = $this->db->update('jadwal_penyiraman', $data, array('id_jadwal' => $data['id_jadwal']));
		return $query;
	}
	function delete($id_jadwal){
		$query = $this->db->delete('jadwal_penyiraman', array('id_jadwal' => $id_jadwal));
		return $query;
	}
	
	function check_jadwal($data){
			$query = $this->db->get_where('jadwal_penyiraman', $data);
			return $query;
	}

} ?>