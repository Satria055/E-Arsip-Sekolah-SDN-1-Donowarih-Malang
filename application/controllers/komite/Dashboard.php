<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') != "Komite"){
            redirect(base_url('Login'));
        }

        $this->load->model(['Mod_helper','Mod_surat', 'Mod_master']);
	}

	public function index()
	{
		$data = array(
			'title' => "E-Arsip",
			'inbox' => $this->Mod_surat->count_inbox(),
			'send' => $this->Mod_surat->count_send(),
			'disposisi' => $this->Mod_master->get_disposisi(),
			'tujuan_sekolah' => $this->Mod_master->get_users(),
			'tujuan_external' => $this->Mod_master->get_pengguna()
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('backend/index');
		$this->load->view('tmp_site/footer');
	}

	public function user()
	{
		echo "Halaman User";
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
