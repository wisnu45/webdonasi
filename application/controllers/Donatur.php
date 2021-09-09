<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('MdlDonatur');
        $this->load->model('MdlDonasi');
        $this->load->model("MdlTransaksi");
    }

    public function register($id_donasi){

        $where = array('id_donasi' => $id_donasi);
        $data['donasi'] = $this->MdlDonasi->detailDonasi('data_donasi', $where)->result();

        $this->load->view('registrasiDonatur', $data);
    }

    public function create(){

        $id_donasi = $this->input->post('id_donasi');
        $nama_donatur = $this->input->post('nama_donatur');
        $no_telp_donatur = $this->input->post('no_telp_donatur');
        $pesan_donatur = $this->input->post('pesan_donatur');
        $jumlah_donasi = $this->input->post('jumlah_donasi');

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');
        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $jumlah_donasiStr = str_replace($reg, $regStr, $jumlah_donasi);

        $ktNum = rand(01, 1000);
        $d = date('d');
        $kt = 'DoKu'.$d.'0'.$ktNum;
        
        $nominal = $jumlah_donasiStr + rand(01, 999);
          
        $dataInsert = array(
            
            'id_transaksi' => '',
            'id_donasi' => $id_donasi,
            'nama_donatur' => $nama_donatur,
            'no_telp_donatur' => $no_telp_donatur,
            'pesan_donatur' => $pesan_donatur,
            'jumlah_donasi' => $nominal,
            'kode_transaksi' => $kt,
            'tgl_transaksi' => $dateNow,
        );

        $this->MdlDonatur->insert('data_transaksi', $dataInsert);
        
        
        $tr = $this->MdlTransaksi->detailTransaksi("data_transaksi", [
            
            "id_donasi" => intval($id_donasi),
            "bayar" => 1
            
        ])->result();
        
        $perolehan_donasi = [];

        foreach($tr as $v) {
            
            $perolehan_donasi[] = floatval($v->jumlah_donasi);
        }

        $total_perolehan_donasi = array_sum($perolehan_donasi);

        $this->MdlDonasi->update(floatval($id_donasi), [
            "perolehan_donasi" => $total_perolehan_donasi
        ]);

        $this->session->set_flashdata('message_success', 'Register anda terkirim');
        redirect(base_url('transaksi/'.$kt));

    }

}


?>