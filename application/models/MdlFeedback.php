<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlFeedback extends CI_Model {

    public function getFeedback($table) {
        
        return $this->db->get($table);
    }

    public function insert($table, $data) {
        
        $this->db->insert($table, $data);
    }

}

?>