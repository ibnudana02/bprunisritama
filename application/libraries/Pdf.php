<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once dirname(__FILE__) . '\TCPDF-6.3.5\tcpdf.php';
class Pdf extends TCPDF
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    //Page header
    public function Header()
    {
        // Logo
        $image_file = base_url('assets/img/logo/logo-bpr.png');
        $this->Image($image_file, 5, 2, 15, '', 'PNG', '', 'M', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('times', 'B', 20);
        // Title
        $this->Cell(0, 10, 'PT. BANK PERKREDITAN RAKYAT UNISRITAMA', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer()
    {
        // Position at 15 mm from bottom
        $this->SetY(-9);
        // Set font
        $this->SetFont('dejavusans', 'B', 8);
        // Page number
        $this->Cell(0, 10, 'Formulir Pembukaan Rekening - Bank Unisritama', 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
