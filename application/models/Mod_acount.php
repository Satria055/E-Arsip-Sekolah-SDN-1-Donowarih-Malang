<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_acount extends CI_Model {

    function edit_acount($user_id,$full_name,$username,$passwordx){
        $hasil=$this->db->query("UPDATE pengguna SET full_name='$full_name',username='$username',password='$passwordx' WHERE id='$user_id'");
        return $hsl;
    }


}

/* End of file Mod_acount.php */
/* Location: ./application/models/Mod_acount.php */