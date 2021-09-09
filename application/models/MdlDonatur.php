<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlDonatur extends CI_Model {

    public function getDonatur($table) {
        
        return $this->db->get($table);
    }

    public function insert($table, $data) {
        
        $this->db->insert($table, $data);
    }

}
?>