<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlTransaksi extends CI_Model{

    public function getTransaksi(){

        $query = "SELECT data_transaksi.id_transaksi, data_transaksi.id_donasi, 
            data_transaksi.jumlah_donasi, data_transaksi.kode_transaksi, 
                data_transaksi.tgl_transaksi, data_transaksi.bayar, data_transaksi.nama_donatur,
                    data_transaksi.no_telp_donatur, data_transaksi.pesan_donatur, data_donasi.id_donasi, data_donasi.nama_donasi 
                        FROM `data_transaksi` JOIN data_donasi 
                            ON data_transaksi.id_donasi = data_donasi.id_donasi";
            
        return $this->db->query($query);
    }

    public function getAllTransaksiHari($tgl_transaksi){

        $query = "SELECT * FROM data_transaksi JOIN data_donasi 
                    ON data_transaksi.id_donasi = data_donasi.id_donasi
                        WHERE tgl_transaksi = '$tgl_transaksi' AND bayar = '1'";  

        return $this->db->query($query);
    }

    public function getAllTransaksiBulan($bulan){

        $query = "SELECT * FROM data_transaksi JOIN data_donasi 
                    ON data_transaksi.id_donasi = data_donasi.id_donasi
                        WHERE MONTH(tgl_transaksi) = '$bulan' AND bayar = '1'"; 

        return $this->db->query($query);
    }
    

    public function editTransaksi($table, $where){

        return $this->db->get_where($table, $where);
    }

    public function updateTransaksi($table, $where, $data) {

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deleteTransaksi($table, $where){

        $this->db->delete($table, $where);
    }
    
    public function detailTransaksi($table, $where){

        return $this->db->get_where($table, $where);

    }
    public function searchTransaksi($kode_transaksi){

        $this->db->select('*');
        $this->db->from('data_transaksi');
        $this->db->like('kode_transaksi', $kode_transaksi);

        return $this->db->get()->result();

    }
}

?>