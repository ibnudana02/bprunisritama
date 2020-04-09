<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Awards_model' => 'awards'));
    }

    public function index()
    {
        $data['title'] = 'Data Penghargaan';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->awards->getAll();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/awards');
        $this->load->view('template/admin_footer');
    }

    public function tambahAwards()
    {
        $this->form_validation->set_rules('nama', 'Nama Penghargaan', 'trim|required');

        $award = $this->awards;
        if ($this->form_validation->run()) {
            $award->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah Data Penghargaan!</div>');
            redirect('admin/awards', 'refresh');
        } else {
            $data['title'] = 'Administrator - Data Penghargaan';
            $data['heading'] = 'Dashboard';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $data['judul'] = 'BPR Unisritama - Administrator';
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/tambahPenghargaan');
            $this->load->view('template/admin_footer');
        }
    }
}
