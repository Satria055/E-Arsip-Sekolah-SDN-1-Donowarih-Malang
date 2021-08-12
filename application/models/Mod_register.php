<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_register extends CI_Model {

	public function add($data){
		$this->db->insert('users', $data);
		return true;
	}	
		public function add_pengguna($data){
		$this->db->insert('pengguna', $data);
		return true;
	}

}

/* End of file Mod_register.php */
/* Location: ./application/models/Mod_register.php */