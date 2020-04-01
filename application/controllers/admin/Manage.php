<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends CI_Controller
{

    public function index()
    {

        $data['title'] = 'Tambah Kategori';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahKategori');
        $this->load->view('template/admin_footer');
    }

    public function add_kategori()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $nama = $this->session->userdata('name');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Kategori Surat - MIS';
            $data['heading'] = 'Add Kategori Surat';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/tambahKategori');
            $this->load->view('template/admin_footer');
        } else {
            $data = [
                'kategori' => htmlspecialchars($this->input->post('kategori', true)),
                'created_by' => htmlspecialchars($nama)
            ];

            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Category</div>');
            redirect('admin/welcome', 'refresh');
        }
    }

    public function delete_kategori($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Hapus Kategori Surat <strong>Berhasil!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>'
        );
        redirect('admin/kategori');
    }
}
