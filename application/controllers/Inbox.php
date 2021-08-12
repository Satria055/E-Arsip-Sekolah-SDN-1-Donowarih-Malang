<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_surat','Mod_helper','Mod_master', 'Mod_arsip']);
	}

	public function index()
	{

		$level = $this->session->userdata('level');
		$username = $this->session->userdata('username');

		if($level == 'Alumni')
		{
			$inbox = $this->Mod_surat->read_inbox_alumni($username);
		}
		elseif($level == 'Murid')
		{
			$inbox = $this->Mod_surat->read_inbox_murid($username);
		}
		elseif($level == 'Wali Murid')
		{
			$inbox = $this->Mod_surat->read_inbox_wali_murid($username);
		}
		elseif($level == 'Guru')
		{
			$inbox = $this->Mod_surat->read_inbox_guru($username);
		}
		elseif($level == 'Komite')
		{
			$inbox = $this->Mod_surat->read_send_komite($username);
		}
		else
		{
			$inbox = $this->Mod_surat->read_inbox();
		}

		$data = array(
			'title' => "E-Arsip",
			'inbox' => $inbox,
			'disposisi' => $this->Mod_master->get_disposisi(),
			'tujuan_sekolah' => $this->Mod_master->get_users(),
			'tujuan_external' => $this->Mod_master->get_pengguna()
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('inbox/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "E-Arsip",
			'view' => $this->Mod_surat->view($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('inbox/update');
		$this->load->view('tmp_site/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "E-Arsip",
			'view' => $this->Mod_surat->view($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('inbox/detail');
		$this->load->view('tmp_site/footer');
	}

	public function add()
	{
		if(!isset($_POST['submit']['disposisi'])){
			$_POST['submit']['disposisi'] = 'surat-masuk';
		}
		if(isset($_POST['submit'])){
			$tanggal 	= $this->input->post('tanggal');
			$nomor 		= $this->input->post('nomor');
			$pengirim	= $this->input->post('pengirim');
			$tujuan		= $this->input->post('tujuan');
			$perihal 	= $this->input->post('perihal');
			$berkas		= $_FILES['berkas']['name'];
			$disposisi 	= $this->input->post('disposisi');
			$isi 		= $this->input->post('isi_disposisi');
			$is_approved = $this->input->post('is_approved');

			$new_name = time().'-'.$berkas;
			$config['file_name'] 		= $new_name;
			$config['upload_path'] 		= './media/suratmasuk/';
			$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx|xls|xlsx|rar|zip|tar';
			$config['max_size']  		= 2000;
			$config['max_width']  		= 1024;
			$config['max_height']  		= 768;
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('berkas')){
					echo "<script> alert('Maaf, File Gagal Di Upload.') </script>"; die(redirect('inbox','refresh'));
			}
			else{
				$upload = array('upload_data' => $this->upload->data());
				echo "success";
			}	

			$data = array(
				'tanggal' => $tanggal,
				'nomor' => $nomor,
				'pengirim' => $pengirim,
				'tujuan' => $tujuan,
				'perihal' => $perihal,
				'berkas' => $upload["upload_data"]['file_name'],
				'disposisi' => $disposisi,
				'isi_disposisi' => $isi,
				'is_approved' => $is_approved
			);

			$data_arsip = array(
				'judul' => $perihal,
				'nomor' => $nomor,
				'tgl'	  => $tanggal,
				'file_name' => $upload["upload_data"]['file_name'],
				'file_path' => $config['upload_path'],
				'jenis_surat' => 1,
				'uploader' => $pengirim,
				'time_added' => date('Y-m-d H:i:s'),
				'is_approved' => $is_approved
			);

			$this->Mod_arsip->add_arsip($data_arsip);
			$this->Mod_surat->add_inbox($data);
			redirect('Inbox');
		}
	}

	public function update_inbox()
	{
		if(isset($_POST['submit'])){
			$id 		= $this->input->post('id');
			$tanggal 	= $this->input->post('tanggal');
			$nomor 		= $this->input->post('nomor');
			$pengirim	= $this->input->post('pengirim');
			$tujuan		= $this->input->post('tujuan');
			$perihal 	= $this->input->post('perihal');
			$berkas		= $this->input->post('berkas');
			$disposisi 	= $this->input->post('disposisi');
			$isi 		= $this->input->post('isi_disposisi');
			$is_approved = $this->input->post('is_approved');

			$data = array(
				'id' 			=> $id,
				'tanggal' 	=> $tanggal,
				'nomor' 		=> $nomor,
				'pengirim' 	=> $pengirim,
				'tujuan'		=> $tujuan,
				'perihal' 	=> $perihal,
				'berkas' 	=> $berkas,
				'disposisi' => $disposisi,
				'isi_disposisi' 		=> $isi,
				'is_approved' => $is_approved
			);
			$this->db->where('id', $id);
			$this->Mod_surat->update_inbox($data);
			redirect('Inbox');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_surat->delete_inbox($id, 'surat_masuk');
		redirect('Inbox');
	}

}

/* End of file Inbox.php */
/* Location: ./application/controllers/Inbox.php */