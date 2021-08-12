<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_login','Mod_helper']);
	}


	// Memanggil Halaman Login
	public function index()
	{
		$data = array(
			'title' => "Halaman Login Admin Guru dan Komite",
		);

		$this->load->view('users/login', $data);
	}


	// Proses Login
	public function signin()
	{
		 $username   = $this->input->post('username');
         $password   = $this->input->post('password');
         $level      = $this->input->post('level');

         $mysession = $this->Mod_login->check($username, $password, $level);
         if(!empty($mysession)){
         	$session = array(
               'user_id'       => $row->id,
					'username'		=> $mysession['username'],
         		'full_name' => $mysession['full_name'],
         		'level' => $mysession['level'],
         		'status' => "login"
         	);

         	$this->session->set_userdata($session);

         	if($mysession['level'] == 'Admin'){
         		redirect('admin/Dashboard'); die();
         	}elseif($mysession['level'] == 'Guru'){
         		redirect('guru/Dashboard'); die();
         	}elseif($mysession['level'] == 'Komite'){
                redirect('komite/Dashboard'); die();
            }
         }
        else{
            $this->session->set_flashdata('message', 'Login Gagal Ulangi Kembali'); // Buat session flashdata
        	redirect('Login');
        }
	}

        public function logout() {
        $this->session->sess_destroy();
        redirect('Login');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */