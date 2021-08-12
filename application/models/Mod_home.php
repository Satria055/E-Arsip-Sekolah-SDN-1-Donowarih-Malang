<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_home extends CI_Model {

	public function check($username, $password, $level){
		$this->db->where('username', $username);
		$this->db->where('password', password_verify($password, $hash));
		$this->db->where('level', $level);

		$signin = $this->db->get('pengguna')->row_array();
		return $signin;
	}	

}

/* End of file Mod_login.php */
/* Location: ./application/models/Mod_login.php */