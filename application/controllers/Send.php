<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send extends CI_Controller {

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
			$send = $this->Mod_surat->read_send_alumni($username);
		}
		elseif($level == 'Murid')
		{
			$send = $this->Mod_surat->read_inbox_murid($username);
		}
		elseif($level == 'Wali Murid')
		{
			$send = $this->Mod_surat->read_send_wali_murid($username);
		}
		elseif($level == 'Guru')
		{
			$send = $this->Mod_surat->read_send_guru($username);
		}
		elseif($level == 'Komite')
		{
			$send = $this->Mod_surat->read_inbox_komite($username);
		}
		else
		{
			$send = $this->Mod_surat->read_send();
		}

		$data = array(
			'title' => "E-Arsip",
			'send' => $send,
			'disposisi' => $this->Mod_master->get_disposisi(),
			'pengguna' => $this->Mod_master->get_pengguna(),
			'tujuan_sekolah' => $this->Mod_master->get_users(),
			'tujuan_external' => $this->Mod_master->get_pengguna()
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('send/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "E-Arsip",
			'views' => $this->Mod_surat->views($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('send/update');
		$this->load->view('tmp_site/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "E-Arsip",
			'views' => $this->Mod_surat->views($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('send/detail');
		$this->load->view('tmp_site/footer');
	}

	public function add()
	{
		if(isset($_POST['submit'])){
			$tanggal 	= $this->input->post('tanggal');
			$nomor 		= $this->input->post('nomor');
			$pengirim	= $this->input->post('pengirim');
			$tertuju	= $this->input->post('tertuju');
			$alamat 	= $this->input->post('alamat');
			$perihal 	= $this->input->post('perihal');
			$berkas		= strtotime().'-'.$_FILES['berkas']['name'];
			$disposisi 	= $this->input->post('disposisi');
			$isi 		= $this->input->post('isi_disposisi');
			$is_approved = $this->input->post('is_approved');

			$new_name = time().'-'.$berkas;
			$config['file_name'] 		= $new_name;
			$config['upload_path'] 		= './media/suratkeluar/';
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
				'tanggal' 		=> $tanggal,
				'nomor' 		=> $nomor,
				'pengirim' 		=> $pengirim,
				'perihal' 		=> $perihal,
				'tertuju'		=> $tertuju,
				'alamat' 		=> $alamat,
				'berkas' 		=> $upload["upload_data"]['file_name'],
				'disposisi' 	=> $disposisi,
				'isi_disposisi' => $isi,
				'is_approved'	=> $is_approved
			);

			$data_arsip = array(
				'judul' => $perihal,
				'nomor' => $nomor,
				'tgl'	  => $tanggal,
				'file_name' => $upload["upload_data"]['file_name'],
				'file_path' => $config['upload_path'],
				'jenis_surat' => 0,
				'uploader' => $pengirim,
				'time_added' => date('Y-m-d H:i:s'),
				'is_approved' => $is_approved
			);

			$this->Mod_arsip->add_arsip($data_arsip);
			$this->Mod_surat->add_send($data);
			redirect('Send');
		}
	}

	public function update_send()
	{
		if(isset($_POST['submit'])){
			$id 		= $this->input->post('id');
			$tanggal 	= $this->input->post('tanggal');
			$nomor 		= $this->input->post('nomor');
			$pengirim	= $this->input->post('pengirim');
			$tertuju	= $this->input->post('tertuju');
			$alamat 	= $this->input->post('alamat');
			$perihal 	= $this->input->post('perihal');
			$berkas		= $this->input->post('berkas');
			$disposisi 	= $this->input->post('disposisi');
			$isi 		= $this->input->post('isi_disposisi');
			$is_approved = $this->input->post('is_approved');

			$data = array(
				'id'			=> $id,
				'tanggal' 		=> $tanggal,
				'nomor' 		=> $nomor,
				'pengirim' 		=> $pengirim,
				'perihal' 		=> $perihal,
				'tertuju'		=> $tertuju,
				'alamat' 		=> $alamat,
				'berkas' 		=> $berkas,
				'disposisi' 	=> $disposisi,
				'isi_disposisi' => $isi,
				'is_approved'	=> $is_approved
			);

			$this->db->where('id', $id);
			$this->Mod_surat->update_send($data);
			redirect('Send');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_surat->delete_send($id, 'surat_keluar');
		redirect('Send');
	}

}

/* End of file Send.php */
/* Location: ./application/controllers/Send.php */