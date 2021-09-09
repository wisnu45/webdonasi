<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('MdlFeedback');

    }

    public function index(){

        $getDataFeedback = $this->MdlFeedback->getFeedback('data_feedback')->result();
        $data['tmpFeedback'] = $getDataFeedback;

        $this->load->view('Feedback/dataFeedback', $data);
    }

    public function delete($id_feedback){

        if( $id_feedback > 0 ) {
            
            $where = array('id_feedback' => $id_feedback);

            $this->MdlFeedback->deleteFeedback('data_feedback', $where);
            $this->session->set_flashdata('message', 'Success Delete Data Feedback');

        redirect(base_url('admin/Feedback'));
		}
		else{
            
            redirect(base_url('admin/Feedback'));
			exit;

		}
    }
}
?>