<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $nama = $this->session->has_userdata('name');
        if (empty($nama)) {

            redirect('admin', 'refresh');
        }
        $this->load->model('User_model', 'user');
    }


    public function index()
    {
        $data['title'] = 'Profil - User';
        $data['heading'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->user->getProfil()->row_array();
        // var_dump($data['data']);
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/profil');
        $this->load->view('template/admin_footer');
    }
}

/* End of file Profil.php */
