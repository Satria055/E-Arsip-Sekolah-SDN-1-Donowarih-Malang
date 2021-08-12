<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_sekolah extends CI_Model {

	public function update($data){
		$this->db->update('tb_sekolah', $data);
		return true;
	}

	public function detail($id){
		return $this->db->get_where('tb_sekolah', array('id' => $id));
	}	

	public function get_sekolah(){
		$sekolah = $this->db->get('tb_sekolah');
		return $sekolah->result();
	}	

}

/* End of file Mod_sekolah.php */
/* Location: ./application/models/Mod_sekolah.php */