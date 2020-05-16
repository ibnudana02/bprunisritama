<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $nama = $this->session->has_userdata('name');
        if (empty($nama)) {
            redirect('admin', 'refresh');
        } elseif ($this->session->userdata('role_id') !== "1") {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }


    public function index()
    {
        $data['title'] = 'Company Report';
        $data['heading'] = 'Company Report';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->berita->getAll()->result();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/laporan');
        $this->load->view('template/admin_footer');
    }



}

/* End of file Gcg.php */
