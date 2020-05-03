<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $this->load->model('Kategori_model', 'kategori');
    }

    public function index()
    {
        $data['title'] = 'Kategori Berita';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->kategori->getAll();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/kategori');
        $this->load->view('template/admin_footer');
    }

    public function add_kategori()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $kategori = $this->kategori; //Kategori model disimpan dalam variable
        if ($this->form_validation->run()) { //jika form_validation berhasil dijalankan, fungsi save() atau simpan data dijalankan
            $kategori->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Category</div>');
            redirect('admin/kategori', 'refresh');
        }
        //Tampilkan Form tambah kategori
        $data['title'] = 'Tambah Kategori';
        $data['heading'] = 'Tambah Kategori Berita';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahKategori');
        $this->load->view('template/admin_footer');
    }

    public function delete_kategori($id = null)
    {
        if (!isset($id)) show_404(); //jika tidak ada $id yang dipilih, tampilkan error page
        if ($this->kategori->delete($id)) { //jika $id terpilih, lakukan hapus data 
            $this->session->set_flashdata( //tambahkan pesan jika berhasil
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hapus Kategori Berita <strong>Berhasil!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>'
            );
            redirect(site_url('admin/kategori')); //arahkan ke halaman list kategori
        }
    }
}
