<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlDonasi extends CI_Model 
{
    public function getDonasi($table) {

        return $this->db->get($table);
    }
    public function detailDonasi($table, $where){

        return $this->db->get_where($table, $where);

    }

    public function update($id, $data) {
        $query = $this->db->where("id_donasi", $id)->update("data_donasi",$data);
        return $query;
    }
    public function insertDonasi($table, $data) {

        $this->db->insert($table, $data);
    }

    public function editDonasi($table, $where){

        return $this->db->get_where($table, $where);
    }

    public function updateDonasi($table, $where, $data) {

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deleteDonasi($table, $where){

        $this->db->delete($table, $where);
    }

}

?>