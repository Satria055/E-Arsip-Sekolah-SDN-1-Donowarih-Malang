<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_register','Mod_helper']);
	}

	public function index()
	{
		$data = array(
			'title' => "Halaman Registrasi",
		);

		$this->load->view('users/registration', $data);
	}


	public function signup()
	{
		if(isset($_POST['submit'])){

			$fullname 	= $this->input->post('full_name');
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');
			$password2 	= $this->input->post('password2');
			$level 		= $this->input->post('level');

			if($password != $password2){
				 echo "<script> alert('Maaf, Password Tidak Sama.') </script>"; die(redirect('Registration','refresh'));
			}

			$data = array(
				'full_name' 	=> $fullname,
				'username' 		=> $username,
				'password' 		=> password_hash($password, PASSWORD_DEFAULT)."\n",
				'level' 		=> $level
			);

			$insert=$this->Mod_register->add_pengguna($data);
			 if($insert){
            echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('Home').'";</script>';
        	}else{
        		 echo "<script> alert('Maaf, Registrasi Anda Gagal, Ulangi Kembali.') </script>"; die(redirect('Registration','refresh'));
        	}
			
		}
	}

}

/* End of file Registration.php */
/* Location: ./application/controllers/Registration.php */