<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acount extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_acount');
	}

	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$data = array(
			'title' => "E-Arsip Edit Profil Pengguna",
		);
        
		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/upd_acount');
		$this->load->view('tmp_site/footer');		
	}

	public function update_data()
	{
		$user_id = $this->input->post('id');
		$full_name = $this->input->post('full_name');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$passwordx = password_hash($password, PASSWORD_DEFAULT)."\n";
		$this->Mod_acount->edit_acount($user_id,$full_name,$username,$passwordx);
		redirect('Acount');
	}

}

/* End of file Acount.php */
/* Location: ./application/controllers/Acount.php */