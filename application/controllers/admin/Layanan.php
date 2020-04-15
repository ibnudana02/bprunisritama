<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['title'] = 'Produk';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahLayanan');
        $this->load->view('template/admin_footer');
    }
}

/* End of file Layanan.php */
