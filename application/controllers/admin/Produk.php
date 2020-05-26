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
        } elseif ($this->session->userdata('role_id') !== "1") {
            $this->session->sess_destroy();
            redirect(base_url());
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
            $this->session->set_flashdata('message', 'Berhasil ditambahkan');
            redirect('admin/produk', 'refresh');
        }
        //Tampilkan Form tambah kategori
        $data['data'] = $this->jenis->getAll()->result();
        $data['title'] = 'Tambah Produk';
        $data['heading'] = 'Tambah Produk';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahProduk');
        $this->load->view('template/admin_footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/produk');

        $this->form_validation->set_rules('produk', 'Produk', 'required|trim');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $produk = $this->produk; //produk model disimpan dalam variable
        if ($this->form_validation->run()) { //jika form_validation berhasil dijalankan, fungsi save() atau simpan data dijalankan
            $produk->update();
            $this->session->set_flashdata('message', 'Berhasil disimpan');
            redirect('admin/produk', 'refresh');
        }

        $data['data'] = $this->jenis->getAll()->result();
        $data['title'] = 'Edit Produk';
        $data['heading'] = 'Edit Produk';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['produk'] = $produk->getById($id);
        // print_r($data['produk']);
        if (!$data["produk"]) show_404();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/edit_produk', $data);
        $this->load->view('template/admin_footer');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404(); //jika tidak ada $id yang dipilih, tampilkan error page
        if ($this->produk->delete($id)) { //jika $id terpilih, lakukan hapus data 
            $this->session->set_flashdata( //tambahkan pesan jika berhasil
                'alert',
                'Hapus Produk <strong>Berhasil!</strong>'
            );
            redirect(site_url('admin/produk')); //arahkan ke halaman list kategori
        }
    }
}

/* End of file Produk.php */
