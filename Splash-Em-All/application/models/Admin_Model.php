<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function get_records(){
        $query = $this->db->get('banner');

        return $query;
    }

    public function get_records_id($id){
        $query = $this->db->get_where('banner', array('id' => $id));

        return $query;
    }

    public function set_banner($id, $data = array()){

        $this->db->where('id', $id);
        $this->db->update('banner', $data); 
    }

    public function update($id, $photo){
        $this->db->query("UPDATE banner SET photo='".$row->photo."' WHERE id = " .$id );
    }

    public function delete($tabel, $field, $id){
        $query = $this->db->delete($tabel, array($field => $id)); 
        return $query;
    }

}

/* End of file admin_m.php */
/* Location: ./application/models/admin_m.php */