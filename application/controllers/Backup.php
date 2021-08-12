<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => "E-Arsip",
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('backup/read');
		$this->load->view('tmp_site/footer');
	}

	function backup_db()
	{
		$this->load->dbutil();
		$backup = $this->dbutil->backup();

		$this->load->helper('file');
		write_file('/', $backup);

		$this->load->helper('download');
		force_download('e-arsip.sql', $backup);
	}

}

/* End of file Backup.php */
/* Location: ./application/controllers/Backup.php */