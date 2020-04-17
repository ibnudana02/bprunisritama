<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $nama = $this->session->has_userdata('name');
        if (empty($nama)) {

            redirect('admin', 'refresh');
        }
        $this->load->model('Slider_model', 'slider');
    }


    public function index()
    {
        $data['title'] = 'Produk';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/Slider');
        $this->load->view('template/admin_footer');
    }

    public function tambahSlider()
    {
        $this->form_validation->set_rules('slider', 'Nama Slider', 'trim|required');


        $data['title'] = 'Produk';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/Slider');
        $this->load->view('template/admin_footer');
    }
}

/* End of file Slider.php */
