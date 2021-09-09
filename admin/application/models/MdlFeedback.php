<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlFeedback extends CI_Model 
{
    public function getFeedback($table) 
    {
        return $this->db->get($table);
    }

    public function deleteFeedback($table, $where)
    {
        $this->db->delete($table, $where);
    }
}

?>