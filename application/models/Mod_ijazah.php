<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_ijazah extends CI_Model {

	public function add($data){
		$this->db->insert('ijazah', $data);
		return true;
	}	

	public function update($data){
		$this->db->update('ijazah', $data);
	}

	public function read(){
		$ijazah = $this->db->order_by('id', 'DESC');
		$ijazah = $this->db->get('ijazah');
		return $ijazah->result();
	}

	public function detail($id){
		return $this->db->get_where('ijazah', array('id' => $id));
	}

	public function delete($id){
		return $this->db->delete('ijazah', array('id' => $id));
	}

	public function count_ijazah()
	{
		$query = $this->db->query("SELECT * FROM ijazah");
        $ijazah = $query->num_rows();
        return $ijazah;
	}

}

/* End of file Mod_ijazah.php */
/* Location: ./application/models/Mod_ijazah.php */