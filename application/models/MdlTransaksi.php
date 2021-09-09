<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlTransaksi extends CI_Model {

    public function getTransaksi ($table)
    {
        return $this->db->get_where($table);
    }
    
    public function detailTransaksi($table, $where){

        return $this->db->get_where($table, $where);

    }
}
?>