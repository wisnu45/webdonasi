<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('MdlTransaksi');
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        $this->load->helper('url');
    }

    public function index(){

        $this->load->view('Laporan/laporanPage');
    }

    public function harian() {

        $excel = new PHPExcel();
        $excel->getProperties()->setCreator('Lembaga Manajemen Infaq')
                    ->setLastModifiedBy('Lembaga Manajemen Infaq')
                    ->setTitle("Laporan Transaksi Donasi Harian")
                    ->setSubject("Laporan Transaksi Donasi Harian")
                    ->setDescription("Laporan Transaksi Donasi Harian")
                    ->setKeywords("Data Transaksi Donasi Harian");
                    
        $style_col = array(
        'font' => array('bold' => true),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
        );

        $style_row = array(
        'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
        );
        
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $lapor = $this->MdlTransaksi->getAllTransaksiHari($tgl_transaksi)->result();
        
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Transaksi Donasi Harian");
        $excel->getActiveSheet()->mergeCells('A1:H1');
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $excel->setActiveSheetIndex(0)->setCellValue('A3', 'No');
        $excel->setActiveSheetIndex(0)->setCellValue('B3', 'Nama Donasi');
        $excel->setActiveSheetIndex(0)->setCellValue('C3', 'Nama Donatur');
        $excel->setActiveSheetIndex(0)->setCellValue('D3', 'No Telepon');
        $excel->setActiveSheetIndex(0)->setCellValue('E3', 'Kode Transaksi');
        $excel->setActiveSheetIndex(0)->setCellValue('F3', 'Tanggal Donasi');
        $excel->setActiveSheetIndex(0)->setCellValue('G3', 'Jumlah Donasi');
        $excel->setActiveSheetIndex(0)->setCellValue('H3', 'Total Donasi' .tgl_indo($tgl_transaksi));

        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);

        $no = 1;
        $numrow = 4;
        $total_Donasi = 0;

        foreach($lapor as $data){

            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nama_donasi);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_donatur);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->no_telp_donatur);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->kode_transaksi);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, tgl_indo($data->tgl_transaksi));
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow,'Rp '.nominal($data->jumlah_donasi));
      
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      
            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
            $total_Donasi += $data->jumlah_donasi;
        }

        $excel->setActiveSheetIndex(0)->setCellValue('H4','Rp '.nominal($total_Donasi));
        $excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_row);

        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(35); // Set width kolom F
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // Set width kolom G
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(40); // Set width kolom H
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        
        $excel->getActiveSheet(0)->setTitle("Laporan Data Transaksi Donasi Harian");
        $excel->setActiveSheetIndex(0);
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Laporan Donasi Harian.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }

    public function listBulan() {

        $listBulan = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        );

        return $listBulan;
    }

    public function bulanan() {

        $listBulan = $this->listBulan();
        $excel = new PHPExcel();
        $excel->getProperties()->setCreator('Lembaga Manajemen Infaq')
                            ->setLastModifiedBy('Lembaga Manajemen Infaq')
                            ->setTitle("Laporan Transaksi Donasi Bulanan")
                            ->setSubject("Laporan Transaksi Donasi Bulanan")
                            ->setDescription("Laporan Transaksi Donasi Bulanan")
                            ->setKeywords("Data Transaksi Donasi Bulanan");
        $style_col = array(
        'font' => array('bold' => true),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
        );

        $style_row = array(
        'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
        );
        
        $bulan = $this->input->post('bulan');
        $lapor = $this->MdlTransaksi->getAllTransaksiBulan($bulan)->result();
        
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Transaksi Donasi Bulan ".$listBulan[$bulan]);
        $excel->getActiveSheet()->mergeCells('A1:H1');
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $excel->setActiveSheetIndex(0)->setCellValue('A3', 'No');
        $excel->setActiveSheetIndex(0)->setCellValue('B3', 'Nama Donasi');
        $excel->setActiveSheetIndex(0)->setCellValue('C3', 'Nama Donatur');
        $excel->setActiveSheetIndex(0)->setCellValue('D3', 'No Telepon');
        $excel->setActiveSheetIndex(0)->setCellValue('E3', 'Kode Transaksi');
        $excel->setActiveSheetIndex(0)->setCellValue('F3', 'Tanggal Donasi');
        $excel->setActiveSheetIndex(0)->setCellValue('G3', 'Jumlah Donasi');
        $excel->setActiveSheetIndex(0)->setCellValue('H3', 'Total Donasi Bulan '.$bulan);

        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);

        $no = 1;
        $numrow = 4;
        $total_Donasi = 0;
        foreach($lapor as $data){

            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nama_donasi);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_donatur);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->no_telp_donatur);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->kode_transaksi);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, tgl_indo($data->tgl_transaksi));
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow,'Rp '.nominal($data->jumlah_donasi));
      
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      
            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
            $total_Donasi += $data->jumlah_donasi;
        }
        
        $excel->setActiveSheetIndex(0)->setCellValue('H4','Rp '.nominal($total_Donasi));
        $excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_row);

        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(35); // Set width kolom F
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // Set width kolom G
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(40); // Set width kolom H
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        
        $excel->getActiveSheet(0)->setTitle("Laporan Data Transaksi Donasi Bulanan");
        $excel->setActiveSheetIndex(0);
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Laporan Transaksi Donasi Bulanan.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }
}

?>