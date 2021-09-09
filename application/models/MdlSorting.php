<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlSorting extends CI_Model {

    public function ascen($table) {

        $this->db->order_by('nama_donasi', 'ASC');
        $query = $this->db->get($table);

        return $query;
    }

    public function descen($table) {
        
        $this->db->order_by('nama_donasi', 'DESC');
        $query = $this->db->get($table);

        return $query;
    }
}

?>