<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlLogin extends CI_Model 
{
    public function authAdmin($username, $password)
    {
        $query = $this->db->query("SELECT * FROM data_admin WHERE username = '$username' AND password = '$password'");
        return $query;
    }
}

?>