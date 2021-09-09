<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('MdlDonasi');

    }

    public function index(){

        $getDataDonasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
        $data['tmpDonasi'] = $getDataDonasi;

        $this->load->view('Donasi/dataDonasi', $data);
    }

    public function add(){

        $this->load->view('Donasi/tambahDonasi');
    }

    public function create(){

        $nama_donasi = $this->input->post('nama_donasi');
        $kategori_donasi = $this->input->post('kategori_donasi');
        $target_donasi = $this->input->post('target_donasi');
        $masa_donasi = $this->input->post('masa_donasi');
        $deskripsi_donasi = $this->input->post('deskripsi_donasi');

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        $selisih = strtotime($masa_donasi) - strtotime($dateNow);
        $masa_aktif = $selisih/(60*60*24);

        $img1 = $this->input->post('img1');
        $img2 = $this->input->post('img2');
        $img3 = $this->input->post('img3');
        $img4 = $this->input->post('img4');
        $img5 = $this->input->post('img5');

        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $target_donasiStr = str_replace($reg, $regStr, $target_donasi);
        $perolehan_donasiStr = str_replace($reg, $regStr, $perolehan_donasi);

        $dataInsert = array(
            
            'id_donasi' => '',
            'nama_donasi' => $nama_donasi,
            'kategori_donasi' => $kategori_donasi,
            'target_donasi' => $target_donasiStr,
            'perolehan_donasi' => '0',
            'masa_donasi' => $masa_donasi,
            'deskripsi_donasi' => $deskripsi_donasi,
            'tgl_donasi' => $dateNow,
            'masa_aktif' => $masa_aktif,
            'img1' => 'front/images/donasi/'.$img1,
            'img2' => 'front/images/donasi/'.$img2,
            'img3' => 'front/images/donasi/'.$img3,
            'img4' => 'front/images/donasi/'.$img4,
            'img5' => 'front/images/donasi/'.$img5

        );

        $this->MdlDonasi->insertDonasi('data_donasi', $dataInsert);
        $this->session->set_flashdata('message', 'Success Tambah Donasi');

        redirect(base_url('admin/Donasi/add'));
    }

    public function edit($id_donasi){

        $where = array('id_donasi' => $id_donasi);

        $data['tmpDonasi'] = $this->MdlDonasi->editDonasi('data_donasi', $where)->result();
        $this->load->view('Donasi/editDonasi', $data);
    }

    public function update(){

        $id_donasi = $this->input->post('id_donasi');
        $nama_donasi = $this->input->post('nama_donasi');
        $kategori_donasi = $this->input->post('kategori_donasi');
        $target_donasi = $this->input->post('target_donasi');
        $perolehan_donasi = $this->input->post('perolehan_donasi');
        $masa_donasi = $this->input->post('masa_donasi');
        $deskripsi_donasi = $this->input->post('deskripsi_donasi');

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        $selisih = strtotime($masa_donasi) - strtotime($dateNow);
        $masa_aktif = $selisih/(60*60*24); //60detik*60menit*24jam == seharian
        
        $img1 = $this->input->post('img1');
        $img2 = $this->input->post('img2'); 
        $img3 = $this->input->post('img3');
        $img4 = $this->input->post('img4');
        $img5 = $this->input->post('img5');

        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $target_donasiStr = str_replace($reg, $regStr, $target_donasi);
        $perolehan_donasiStr = str_replace($reg, $regStr, $perolehan_donasi);

        $dataUpdate = array(

            'nama_donasi' => $nama_donasi,
            'kategori_donasi' => $kategori_donasi,
            'target_donasi' => $target_donasiStr,
            'perolehan_donasi' => $perolehan_donasiStr,
            'masa_donasi' => $masa_donasi,
            'deskripsi_donasi' => $deskripsi_donasi,
            'masa_aktif' => $masa_aktif

        );
      
        if(!empty($img1)){
            $dataUpdate['img1'] = 'front/images/donasi/'.$img1;
        }
        if(!empty($img2)){
            $dataUpdate['img2'] = 'front/images/donasi/'.$img2;
        }
        if(!empty($img3)){
            $dataUpdate['img3'] = 'front/images/donasi/'.$img3;
        }
        if(!empty($img4)){
            $dataUpdate['img4'] = 'front/images/donasi/'.$img4;
        }
        if(!empty($img5)){
            $dataUpdate['img5'] = 'front/images/donasi/'.$img5;
        }

        $where = array('id_donasi' => $id_donasi);

        $this->MdlDonasi->updateDonasi('data_donasi', $where, $dataUpdate);
        $this->session->set_flashdata('message', 'Success Update Donasi');

        redirect(base_url('admin/Donasi'));
    }

    public function refresh(){

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        $selisih = strtotime($masa_donasi) - strtotime($dateNow);
        $masa_aktif = $selisih/(60*60*24);

        $dataUpdate = array(

            'masa_aktif' => $masa_aktif
        );
    }

    public function delete($id_donasi){
        
        if( $id_donasi > 0 ) {
            
            $where = array('id_donasi' => $id_donasi);

            $this->MdlDonasi->deleteDonasi('data_donasi', $where);
            $this->session->set_flashdata('message', 'Success Delete Donasi');

			redirect(base_url('admin/Donasi'));
		}
		else{
            
            redirect(base_url('admin/Donasi'));
			exit;

		}
    }
}
?>