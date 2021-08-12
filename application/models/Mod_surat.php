<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_surat extends CI_Model {

	public function add_inbox($data){
		$this->db->insert('surat_masuk', $data);
		return true;
	}

	public function update_inbox($data){
		$this->db->update('surat_masuk', $data);
		return true;
	}

	public function read_inbox(){
		$inbox = $this->db->order_by('id', 'DESC');
		$inbox = $this->db->get('surat_masuk');
		return $inbox->result();
	}

	public function read_inbox_alumni($username){
		$inbox = $this->db->order_by('id', 'DESC');
		$inbox = $this->db->where_in('tujuan', [$username, 'Alumni']);
		$inbox = $this->db->or_where('pengirim', $username);
		//$inbox = $this->db->where('is_approved', 1);
		$inbox = $this->db->get('surat_masuk');
		return $inbox->result();
	}

	public function read_inbox_murid($username){
		$inbox = $this->db->order_by('id', 'DESC');
		$inbox = $this->db->where_in('tujuan', [$username, 'Murid']);
		//$inbox = $this->db->or_where('pengirim', $username);
		$inbox = $this->db->where('is_approved', 1);
		$inbox = $this->db->get('surat_masuk');
		return $inbox->result();
	}

	public function read_inbox_wali_murid($username){
		$inbox = $this->db->order_by('id', 'DESC');
		$inbox = $this->db->where_in('tujuan', [$username, 'Wali Murid']);
		$inbox = $this->db->or_where('pengirim', $username);
		//$inbox = $this->db->where('is_approved', 1);
		$inbox = $this->db->get('surat_masuk');
		return $inbox->result();
	}

	public function read_inbox_guru($username){
		$inbox = $this->db->order_by('id', 'DESC');
		$inbox = $this->db->where_in('tujuan', ['Guru',$username]);
		$inbox = $this->db->where('is_approved', 1);
		//$inbox = $this->db->or_where('pengirim', $username);
		$inbox = $this->db->get('surat_masuk');
		return $inbox->result();
	}

	public function read_inbox_komite($username){
		$inbox = $this->db->order_by('id', 'DESC');
		$inbox = $this->db->where_in('tujuan', [$username, 'Komite']);
		$inbox = $this->db->or_where('pengirim', $username);
		//$inbox = $this->db->where('is_approved', 1);
		$inbox = $this->db->get('surat_masuk');
		return $inbox->result();
	}

	public function view($id){
		return $this->db->get_where('surat_masuk', array('id' => $id));
	}

	public function delete_inbox($id){
		return $this->db->delete('surat_masuk', array('id' => $id));
	}

	// Model untuk surat keluar

	public function add_send($data){
		$this->db->insert('surat_keluar', $data);
		return true;
	}

	public function update_send($data){
		$this->db->update('surat_keluar', $data);
		return true;
	}

	public function read_send(){
		$send = $this->db->order_by('id', 'DESC');
		$send = $this->db->get('surat_keluar');
		return $send->result();
	}

	public function read_send_alumni($username){
		$send = $this->db->order_by('id', 'DESC');
		$send = $this->db->where_in('tertuju', ['Alumni', $username]);
		$send = $this->db->where('is_approved', 1);
		$send = $this->db->get('surat_keluar');
		return $send->result();
	}

	public function read_send_murid($username){
		$send = $this->db->order_by('id', 'DESC');
		$send = $this->db->where_in('tertuju', ['Murid', $username]);
		//$send = $this->db->where('is_approved', 1);
		$send = $this->db->get('surat_keluar');
		return $send->result();
	}

	public function read_send_wali_murid($username){
		$send = $this->db->order_by('id', 'DESC');
		$send = $this->db->where_in('tertuju', ['Wali Murid', $username]);
		$send = $this->db->where('is_approved', 1);
		$send = $this->db->get('surat_keluar');
		return $send->result();
	}

	public function read_send_guru($username){
		$send = $this->db->order_by('id', 'DESC');
		$send = $this->db->where_in('tertuju', ['Guru', $username]);
		$inbox = $this->db->or_where('pengirim', $username);
		//$send = $this->db->where('is_approved', 1);
		$send = $this->db->get('surat_keluar');
		return $send->result();
	}

	public function read_send_komite($username){
		$send = $this->db->order_by('id', 'DESC');
		$send = $this->db->where_in('tertuju', ['Komite', $username]);
		//$send = $this->db->where('is_approved', 1);
		$send = $this->db->get('surat_keluar');
		return $send->result();
	}

	public function views($id){
		return $this->db->get_where('surat_keluar', array('id' => $id));
	}

	public function delete_send($id){
		return $this->db->delete('surat_keluar', array('id' => $id));
	}




	public function count_inbox()
	{
		$query = $this->db->query("SELECT * FROM surat_masuk");
        $inbox = $query->num_rows();
        return $inbox;
	}

	public function count_send()
	{
		$query = $this->db->query("SELECT * FROM surat_keluar");
        $send = $query->num_rows();
        return $send;
	}

	public function count_inbox_alumni($username){
		$inbox = $this->db->order_by('id', 'DESC');
		$inbox = $this->db->where('pengirim', $username);
		$inbox = $this->db->or_where('tujuan', 'Alumni');
		$inbox = $this->db->get('surat_masuk');
		return $inbox->num_rows();
	}

	public function count_send_alumni($username){
		$send = $this->db->order_by('id', 'DESC');
		$send = $this->db->where('tertuju', 'Alumni');
		$send = $this->db->where('tertuju', $username);
		$send = $this->db->get('surat_keluar');
		return $send->num_rows();
	}

}

/* End of file Mod_surat.php */
/* Location: ./application/models/Mod_surat.php */