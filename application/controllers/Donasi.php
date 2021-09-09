<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

    public function __construct() {
        
        parent::__construct();
        $this->load->model('MdlDonasi');
    }

    public function detail($id_donasi){

        date_default_timezone_set("Asia/Bangkok");
        $masa_donasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
    
        foreach($masa_donasi as $item) {
            
            $dateNow = date('Y-m-d H:m:s');

            $masa_donasi_item = $item->masa_donasi;
            $selisih = strtotime($masa_donasi_item) - strtotime($dateNow);

            $masa_aktif = $selisih/(60*60*24);
            $dataUpdate = array(

                'masa_aktif' => $masa_aktif
            
            );       
        
                $this->MdlDonasi->masaAktif($dataUpdate, 'data_donasi', $item->id_donasi);
     
        }

        $where = array('id_donasi' => $id_donasi);
        $data['donasi'] = $this->MdlDonasi->detailDonasi('data_donasi', $where)->result();

        $this->load->view('detailDonasi', $data);
    }
}

?>