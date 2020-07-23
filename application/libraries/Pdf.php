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
}
