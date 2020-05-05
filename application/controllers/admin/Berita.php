<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
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
        $this->load->model(array('Berita_model' => 'berita', 'Kategori_model' => 'kategori'));
    }

    public function index()
    {
        $data['title'] = 'Berita Terbaru';
        $data['heading'] = 'Berita Terbaru';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->berita->getAll()->result();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/berita');
        $this->load->view('template/admin_footer');
    }

    public function add_berita()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
        $berita = $this->berita;
        if ($this->form_validation->run()) {
            $berita->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita berhasil ditambahkan!</div>');
            redirect('admin/berita', 'refresh');
        }
        $data['title'] = 'Tambah Berita';
        $data['heading'] = 'Tambah Berita';
        $data['kategori'] = $this->kategori->getAll();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahBerita');
        $this->load->view('template/admin_footer');
    }

    public function update($id)
    {
        if (!isset($id)) redirect('admin/berita');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi', 'required|trim');

        if ($this->form_validation->run()) {
            $this->berita->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Perubahan berhasil disimpan!</div>');
            redirect('admin/berita', 'refresh');
        } else {
            $data['title'] = 'Tambah Berita';
            $data['heading'] = 'Tambah Berita';
            $data['kategori'] = $this->kategori->getAll();
            $data['data'] = $this->berita->getById($id);
            if (!$data['data']) show_404();
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/editBerita');
            $this->load->view('template/admin_footer');
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404(); //jika tidak ada $id yang dipilih, tampilkan error page
        if ($this->berita->delete($id)) { //jika $id terpilih, lakukan hapus data 
            $this->session->set_flashdata( //tambahkan pesan jika berhasil
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hapus Kategori Berita <strong>Berhasil!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>'
            );
            redirect(site_url('admin/berita')); //arahkan ke halaman list berita
        }
    }
}
