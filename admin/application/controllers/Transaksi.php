<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MdlTransaksi');
        $this->load->model('MdlDonasi');

    }

    public function index()
    {
        $getDataTransaksi = $this->MdlTransaksi->getTransaksi()->result();
        $data['tmpTransaksi'] = $getDataTransaksi;

        $this->load->view('Transaksi/dataTransaksi', $data);
    }
    
    public function edit($id_transaksi)
    {
        $where = array('id_transaksi' => $id_transaksi);
        $data['tmpEditTransaksi'] = $this->MdlTransaksi->editTransaksi('data_transaksi', $where)->result();

        $this->load->view('Transaksi/editTransaksi', $data);
    }

    public function update()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $jumlah_donasi = $this->input->post('jumlah_donasi');

        
        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $jumlah_donasiStr = str_replace($reg, $regStr, $jumlah_donasi);

        $dataUpdate = array(

            'jumlah_donasi' => $jumlah_donasiStr,
            
        );
        
        $where = array('id_transaksi' => $id_transaksi);

        $this->MdlTransaksi->updateTransaksi('data_transaksi', $where, $dataUpdate);

       
        $id_donasi = $this->MdlTransaksi->detailTransaksi("data_transaksi", [  //awal array cek id_donasi berdasarkan id_transaksi

            "id_transaksi" => floatval($id_transaksi)

        ])->first_row()->id_donasi;

      
        $tr = $this->MdlTransaksi->detailTransaksi("data_transaksi", [   //ambil transaksi berdasarkan donasi

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

        redirect(base_url('admin/Transaksi'));
    }


    public function editBayar($id_transaksi)
    {
        $where = array('id_transaksi' => $id_transaksi);
        $data['tmpEditBayar'] = $this->MdlTransaksi->editTransaksi('data_transaksi', $where)->result();

        $this->load->view('Transaksi/editBayar', $data);
    }

    public function updateBayar()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $bayar = $this->input->post('bayar');

        $dataUpdate = array(
            'bayar' => $bayar,
        );
        
        $where = array('id_transaksi' => $id_transaksi);

        $this->MdlTransaksi->updateTransaksi('data_transaksi', $where, $dataUpdate);
        
        //////////////////////////////////////////////////
        
        $id_donasi = $this->MdlTransaksi->detailTransaksi("data_transaksi", [

            "id_transaksi" => floatval($id_transaksi)
            
        ])->first_row()->id_donasi;

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

        redirect(base_url('admin/Transaksi'));
    }

    public function delete($id_transaksi){ 
        
            if( $id_transaksi > 0 ) {
                
                $where = array('id_transaksi' => $id_transaksi);
    
                $this->MdlTransaksi->deleteTransaksi('data_transaksi', $where);
                $id_donasi = $this->MdlTransaksi->detailTransaksi("data_transaksi", [

                    "id_transaksi" => floatval($id_transaksi)

                ])->first_row()->id_donasi;
        
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
                $this->session->set_flashdata('message', 'Success Delete Transaksi');
    
                redirect(base_url('admin/Transaksi'));
            }
            else{
                
                redirect(base_url('admin/Transaksi'));
                exit;
    
            }
        }
    }
?>