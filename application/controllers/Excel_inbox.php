<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_inbox extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model(['Mod_surat','Mod_helper']);
	}

	public function index()
	{
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$excel = new PHPExcel();

		// Settingan awal fil excel
    	$excel->getProperties()->setCreator('Puguh Sulistyo Pambudi')
                 ->setLastModifiedBy('Puguh Sulistyo Pambudi')
                 ->setTitle("Laporan Data Surat Masuk")
                 ->setSubject("Data Surat Masuk")
                 ->setDescription("Laporan Data SUrat Masuk")
                 ->setKeywords("Data Surat Masuk");

        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
	    $style_col = array(
	      'font' 		=> array('bold' => true), // Set font nya jadi bold
	      'alignment' 	=> array(
	      'horizontal' 	=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
	      'vertical' 	=> PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	      ),

	      'borders' 	=> array(
	        'top' 		=> array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
	        'right' 	=> array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
	        'bottom' 	=> array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
	        'left' 		=> array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	      )
	    );


	    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
	    $style_row = array(
	        'alignment' => array(
	        'vertical' 	=> PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	      ),
	        'borders' 	=> array(
	        'top' 		=> array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
	        'right' 	=> array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
	        'bottom'	=> array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
	        'left' 		=> array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	      )
	    );


	    $excel->setActiveSheetIndex(0)->setCellValue('A1', "LAPORAN" );
	    $excel->getActiveSheet()->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
	    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
	    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
	    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); 

	    $excel->setActiveSheetIndex(0)->setCellValue('A2', "DATA SURAT MASUK");
	    $excel->getActiveSheet()->mergeCells('A2:E2'); // Set Merge Cell pada kolom A1 sampai E1
	    $excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(TRUE); // Set bold kolom A1
	    $excel->getActiveSheet()->getStyle('A2')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
	    $excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	     $sekolah = $this->Mod_helper->sekolah();
	    foreach($sekolah as $key=>$row){

	    $excel->setActiveSheetIndex(0)->setCellValue('A3', $row->nama_sekolah);
	    $excel->getActiveSheet()->mergeCells('A3:E3'); // Set Merge Cell pada kolom A1 sampai E1
	    $excel->getActiveSheet()->getStyle('A3')->getFont()->setBold(TRUE); // Set bold kolom A1
	    $excel->getActiveSheet()->getStyle('A3')->getFont()->setSize(14); // Set font size 15 untuk kolom A1
	    $excel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); 

		}

	    // Buat header tabel nya pada baris ke 3
	    $excel->setActiveSheetIndex(0)->setCellValue('A6', "NO"); 
	    $excel->setActiveSheetIndex(0)->setCellValue('B6', "TANGGAL"); 
	    $excel->setActiveSheetIndex(0)->setCellValue('C6', "NOMOR SURAT");
	    $excel->setActiveSheetIndex(0)->setCellValue('D6', "PENGIRIM");
	    $excel->setActiveSheetIndex(0)->setCellValue('E6', "DISPOSISI");
	    

	    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
	    $excel->getActiveSheet()->getStyle('A6')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('B6')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('C6')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('D6')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('E6')->applyFromArray($style_col);
	   

	    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
	    $inbox = $this->Mod_surat->read_inbox();
	    $no = 1; 
	    $numrow = 7; 
	    foreach($inbox as $row){ 
	      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
	      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $row->tanggal);
	      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $row->nomor);
	      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $row->pengirim);
	      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $row->disposisi);
	     

	   	// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
	      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
	      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
	      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
	      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
	      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
	   
	      
	      $no++; // Tambah 1 setiap kali looping
	      $numrow++; // Tambah 1 setiap kali looping
	    }


	    // Set width kolom
	    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); 
	    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
	    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20); 
	    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); 
	    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);

	    
	    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
	    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);


	    // Set orientasi kertas jadi LANDSCAPE
	    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	    // Set judul file excel nya
	    $excel->getActiveSheet(0)->setTitle("Surat Masuk");
	    $excel->setActiveSheetIndex(0);
	    // Proses file excel
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    header('Content-Disposition: attachment; filename="Laporan Surat Masuk.xlsx"'); // Set nama file excel nya
	    header('Cache-Control: max-age=0');
	    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	    $write->save('php://output');
   
	}


}

/* End of file Excel_inbox.php */
/* Location: ./application/controllers/Excel_inbox.php */