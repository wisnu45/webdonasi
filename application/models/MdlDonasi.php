<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlDonasi extends CI_Model {
    
    public function getDonasi($table) {
        
        return $this->db->get($table);
    }

    public function detailDonasi($table, $where){

        return $this->db->get_where($table, $where);
    }

    public function update($id, $data) {

        $query = $this->db->where("id_donasi", $id)->update("data_donasi", $data);
        return $query;
    }

    public function masaAktif($data, $table, $where){
     
        $this->db->where('id_donasi', $where);
        $this->db->update($table, $data);
       
    }
}

?>