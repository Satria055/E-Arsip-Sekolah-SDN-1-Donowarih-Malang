<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_nilai extends CI_Model {

	public function add($data){
		$this->db->insert('nilai', $data);
		return true;
	}	

	public function update($data){
		$this->db->update('nilai', $data);
	}

	public function read(){
		$nilai = $this->db->order_by('id', 'DESC');
		$nilai = $this->db->get('nilai');
		return $nilai->result();
	}

	public function detail($id){
		return $this->db->get_where('nilai', array('id' => $id));
	}

	public function delete($id){
		return $this->db->delete('nilai', array('id' => $id));
	}	

	public function count_nilai()
	{
		$query = $this->db->query("SELECT * FROM nilai");
        $nilai = $query->num_rows();
        return $nilai;
	}

}

/* End of file Mod_nilai.php */
/* Location: ./application/models/Mod_nilai.php */