<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_home','Mod_helper']);
	}

	public function index()
	{
		$data = array(
			'title' => "Aplikasi E Arsip SDN 1 Donowarih Malang",
		);

		$this->load->view('users/Home', $data);
	}
// Proses Login
	public function signin()
	{
		 $username   = $this->input->post('username');
         $password   = $this->input->post('password');
         $level      = $this->input->post('level');
        // periksa apakah input username atau password kosong atau tidak 
        if(empty($username) or empty($password) or empty($level)){
            $msg = 'USERNAME ATAU PASSWORD TIDAK BOLEH KOSONG!';
            $this->session->set_flashdata('message', $msg);
            redirect('home');
            //kembalikan tampilan browser ke halaman depan 
        }else{

         $mysession = $this->Mod_home->check($username, $password, $level);
         if(!empty($mysession)){
         	$session = array(
                'user_id'       => $mysession['id'],
         		'full_name' => $mysession['full_name'],
                'username' => $mysession['username'],
         		'level' => $mysession['level'],
         		'status' => "login"
         	);

         	$this->session->set_userdata($session);

         	if($mysession['level'] == 'Alumni'){
         		redirect('alumni/Dashboard'); die();
         	}elseif($mysession['level'] == 'Wali Murid'){
         		redirect('walimurid/Dashboard'); die();
         	}elseif($mysession['level'] == 'Murid'){
               redirect('murid/Dashboard'); die();
            }
         }
            else{
                      $this->session->set_flashdata('message', 'Login Gagal Ulangi Kembali'); // Buat session flashdata
                      redirect('home'); // Redirect ke halaman login
            }
        }
	}

        public function logout() {
        $this->session->sess_destroy();
        redirect('Home');
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */