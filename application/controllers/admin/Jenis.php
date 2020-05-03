<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jenis extends CI_Controller
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
        $this->load->model('Jenis_model', 'produk');
    }


    public function index()
    {
        $data['title'] = 'Jenis Produk';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->produk->getAll()->result();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/jenis');
        $this->load->view('template/admin_footer');
    }

    public function add_jenis()
    {
        $this->form_validation->set_rules('jenis', 'Jenis Produk', 'required|trim');
        $produk = $this->produk; //produk model disimpan dalam variable
        if ($this->form_validation->run()) { //jika form_validation berhasil dijalankan, fungsi save() atau simpan data dijalankan
            $produk->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Category</div>');
            redirect('admin/jenis', 'refresh');
        }
        //Tampilkan Form tambah kategori
        $data['title'] = 'Tambah Produk';
        $data['heading'] = 'Tambah Jenis Produk';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahJenis');
        $this->load->view('template/admin_footer');
    }
}

/* End of file Jenis.php */
