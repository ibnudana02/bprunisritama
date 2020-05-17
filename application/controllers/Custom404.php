<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom404 extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        
        $this->session->sess_destroy();
        $this->output->set_status_header('404');
        $this->load->view('error_page');
        $this->load->view('template/admin_footer');
    }
}

/* End of file Custom404.php */
