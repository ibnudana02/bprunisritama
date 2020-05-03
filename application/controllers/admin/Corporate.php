<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Corporate extends CI_Controller
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
        $this->load->model('Tentang_model', 'tentang');
    }


    public function index()
    {
        $data['title'] = 'Administrator - Tentang';
        $data['heading'] = 'Corporate';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Corporate';
        $data['data'] = $this->tentang->get_company();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tentang');
        $this->load->view('template/admin_footer');
    }
}

/* End of file Corporate.php */
