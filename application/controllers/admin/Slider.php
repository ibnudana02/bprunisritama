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
        } elseif ($this->session->userdata('role_id') !== "1") {
            $this->session->sess_destroy();
            redirect(base_url());
        }
        $this->load->model('Slider_model', 'slider');
    }


    public function index()
    {
        $data['title'] = 'Produk';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $data['data'] = $this->slider->getAll()->result();
        // print_r($data['data']);
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/Slider');
        $this->load->view('template/admin_footer');
    }

    public function tambahSlider()
    {
        $this->form_validation->set_rules('slider', 'Nama Slider', 'trim|required');
        $this->form_validation->set_rules('aktif', 'Aktif', 'trim|required');


        if ($this->form_validation->run()) {
            $this->slider->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Slider</div>');
            redirect('admin/slider', 'refresh');
        } else {
            $data['title'] = 'Tambah Slider';
            $data['heading'] = 'Dashboard';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $data['judul'] = 'BPR Unisritama - Administrator';
            $data['data'] = $this->db->get_enum('slider', 'aktif');
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/tambahSlider');
            $this->load->view('template/admin_footer');
        }
    }
}

/* End of file Slider.php */
