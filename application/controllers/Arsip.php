<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_arsip']);
	}

	public function index()
	{
		
		$data = array(
			'title' => "E-Arsip",
			'arsip' => $this->Mod_arsip->read_arsip(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('arsip/read');
		$this->load->view('tmp_site/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "E-Arsip",
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('arsip/detail');
		$this->load->view('tmp_site/footer');
	}

}

/* End of file Send.php */
/* Location: ./application/controllers/Send.php */