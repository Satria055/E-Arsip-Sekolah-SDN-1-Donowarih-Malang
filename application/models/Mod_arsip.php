<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_arsip extends CI_Model {

	public function add_arsip($data){
		$this->db->insert('arsip', $data);
		return true;
	}

	public function read_arsip(){
		$inbox = $this->db->get('arsip');
		return $inbox->result();
	}

	public function view_arsip($id){
		return $this->db->get_where('arsip', array('id' => $id));
	}

}

/* End of file Mod_surat.php */
/* Location: ./application/models/Mod_surat.php */