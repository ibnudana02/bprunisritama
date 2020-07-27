<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ups extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->library('Excel');
    }


    public function index()
    {
        $data['data'] = $this->user->getKab(); // ambil data dari M_Index
        $this->load->view('V_Index', $data);
    }
    public function importExcel()
    {
        $fileName = $_FILES['file']['name'];
        $config['upload_path'] = './assets/'; //path upload
        $config['file_name'] = $fileName;  // nama file
        $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
        $config['max_size'] = 10000; // maksimal sizze

        $this->load->library('upload'); //meload librari upload
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            echo $this->upload->display_errors();
            exit();
        }

        $inputFileName = './assets/' . $fileName;

        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        for ($row = 2; $row <= $highestRow; $row++) {                  //  Read a row of data into an array                 
            $rowData = $sheet->rangeToArray(
                'A' . $row . ':' . $highestColumn . $row,
                NULL,
                TRUE,
                FALSE
            );

            // Sesuaikan key array dengan nama kolom di database                                                         
            $data = array(
                "prov" => $rowData[0][0],
                "kab" => $rowData[0][1],
                "kec" => $rowData[0][2],
                "kode" => $rowData[0][3],
                "nama" => $rowData[0][4]
            );

            $insert = $this->db->insert("desa", $data);
        }
        redirect('Ups');
    }

    public function ref()
    {
        $this->load->model('Nasabah_model', 'nsb');
        $nsb = $this->nsb->createRef();
        print_r($nsb);
        die;
    }
}

/* End of file Ups.php */
