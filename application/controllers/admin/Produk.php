<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $nama = $this->session->has_userdata('name');
        if (empty($nama)) {

            redirect('admin', 'refresh');
        }
        $this->load->model('Jenis_model', 'jenis');
        $this->load->model('Produk_model', 'produk');
    }


    public function index()
    {
        $data['title'] = 'Produk';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->produk->getAll();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/produk');
        $this->load->view('template/admin_footer');
    }

    public function add_produk()
    {
        $this->form_validation->set_rules('produk', 'Produk', 'required|trim');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $produk = $this->produk; //produk model disimpan dalam variable
        if ($this->form_validation->run()) { //jika form_validation berhasil dijalankan, fungsi save() atau simpan data dijalankan
            $produk->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Category</div>');
            redirect('admin/produk', 'refresh');
        }
        //Tampilkan Form tambah kategori
        $data['data'] = $this->jenis->getAll();
        $data['title'] = 'Tambah Produk';
        $data['heading'] = 'Tambah Produk';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahProduk');
        $this->load->view('template/admin_footer');
    }
}

/* End of file Produk.php */
