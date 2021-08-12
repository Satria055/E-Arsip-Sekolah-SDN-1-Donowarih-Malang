<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_sekolah');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "E-Arsip",
			'detail' => $this->Mod_sekolah->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/upd_sekolah');
		$this->load->view('tmp_site/footer');		
	}

	public function update_data()
	{
		$id = $this->input->post('id');
		$data = array(
			'id' => $id,
			'kepala_sekolah'	 => $this->input->post('kepala_sekolah'),
			'nip'				 => $this->input->post('nip'),
			'nama_sekolah'		 => $this->input->post('nama_sekolah'),
			'no_telp' 			 => $this->input->post('no_telp'),
			'alamat'			 => $this->input->post('alamat'),
			'website'			 => $this->input->post('website'),
		);

		$this->Mod_sekolah->update($data);
		redirect('Sekolah/update/'.'1');
	}

}

/* End of file Sekolah.php */
/* Location: ./application/controllers/Sekolah.php */