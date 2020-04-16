<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Layanan_model', 'layanan');
    }


    public function index()
    {
        $data['title'] = 'Produk';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $data['data'] = $this->layanan->getAll();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/Layanan');
        $this->load->view('template/admin_footer');
    }
    public function add_layanan()
    {
        $this->form_validation->set_rules('layanan', 'Layanan', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run()) {
            $this->layanan->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Layanan</div>');
            redirect('admin/layanan', 'refresh');
        }

        $data['title'] = 'Tambah Layanan';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahLayanan');
        $this->load->view('template/admin_footer');
    }
}

/* End of file Layanan.php */
