<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('MdlTransaksi');

    }

    public function index($kt) {

        $where = array('kode_transaksi' => $kt);
        $dataT['tmpTransaksi'] = $this->MdlTransaksi->detailTransaksi('data_transaksi', $where)->result();

        $this->load->view('transaksiPembayaran', $dataT);
    }
}

?>