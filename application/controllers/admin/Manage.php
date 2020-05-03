<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends CI_Controller
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
        $this->load->model('Tentang_model', 'kantor');
    }

    public function kantor()
    {
        $data['title'] = 'Data Kantor';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $data['data'] = $this->kantor->get_kantor()->result();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/Kantor', $data);
        $this->load->view('template/admin_footer');
    }

    public function tambah_kantor()
    {
        $this->form_validation->set_rules('kantor', 'Kantor', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        if ($this->form_validation->run()) {
            $this->kantor->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Kantor</div>');
            redirect('admin/kantor', 'refresh');
        }

        $data['title'] = 'Tambah Data Kantor';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahKantor');
        $this->load->view('template/admin_footer');
    }
}
