<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tentang_model', 'tentang');
    }


    public function index()
    {

        $data['title'] = 'Kategori Berita';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->tentang->get_kategori();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/kategori');
        $this->load->view('template/admin_footer');
    }

    public function add_kategori()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $nama = $this->session->userdata('name');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Kategori';
            $data['heading'] = 'Tambah Kategori Berita';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/tambahKategori');
            $this->load->view('template/admin_footer');
        } else {
            $data = [
                'id_kategori' => htmlspecialchars(uniqid()),
                'kategori' => htmlspecialchars(ucwords($this->input->post('kategori', true))),
                'created_by' => htmlspecialchars($nama)
            ];

            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Category</div>');
            redirect('admin/kategori', 'refresh');
        }
    }

    public function add_berita()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
        $nama = $this->session->userdata('name');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Berita';
            $data['heading'] = 'Tambah Berita';
            $data['kategori'] = $this->tentang->get_kategori();
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/tambahBerita');
            $this->load->view('template/admin_footer');
        } else {
            $post = $this->input->post();
            $this->id_berita = uniqid();
            $this->judul = htmlspecialchars(ucwords($this->input->post('judul', true)));
            $this->id_kategori = $this->input->post('kategori', true);
            $this->isi = htmlspecialchars(ucwords($this->input->post('isi', true)));
            $this->image = $this->_uploadImage();
            $this->created_by = htmlspecialchars($nama);

            $this->db->insert('berita', $this);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah berita!</div>');
            // redirect('admin', 'refresh');
        }
    }

    public function _uploadImage()
    {
        $config['upload_path']          = realpath(FCPATH . 'assets/upload/');
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $this->id_berita;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        print_r($config['upload_path']);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        } else {
            return $this->upload->display_errors();
            // return "default.jpg";
        }
    }

    public function delete_kategori($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Hapus Kategori Berita <strong>Berhasil!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>'
        );
        redirect('admin/kategori');
    }
}
