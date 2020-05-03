<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
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
        $this->load->model(array('Pegawai_model' => 'pegawai', 'Jabatan_model' => 'jabatan'));
    }

    public function index()
    {
        $data['title'] = 'Data Pegawai';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->pegawai->getAll()->result();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/pegawai');
        $this->load->view('template/admin_footer');
    }

    public function tambahPegawai()
    {
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'trim|required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');

        $pegawai = $this->pegawai;
        if ($this->form_validation->run()) {
            $pegawai->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah Data Pegawai!</div>');
            redirect('admin/pegawai', 'refresh');
        } else {
            $data['title'] = 'Administrator - Data Pegawai';
            $data['heading'] = 'Dashboard';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $data['judul'] = 'BPR Unisritama - Administrator';
            $data['jabatan'] = $this->jabatan->getAll();
            // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gagal tambah pegawai!</div>');
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/tambahPegawai');
            $this->load->view('template/admin_footer');
        }
    }
}

/* End of file Pegawai.php */
