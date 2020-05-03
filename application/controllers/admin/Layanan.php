<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
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
        $this->load->model('Layanan_model', 'layanan');
    }


    public function index()
    {
        $data['title'] = 'Layanan';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $data['data'] = $this->layanan->getAll()->result();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/Layanan');
        $this->load->view('template/admin_footer');
    }
    public function add_layanan()
    {
        $this->form_validation->set_rules('layanan', 'Layanan', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run()) {
            $this->layanan->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Layanan</div>');
            redirect('admin/layanan', 'refresh');
        }

        $data['title'] = 'Tambah Layanan';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahLayanan');
        $this->load->view('template/admin_footer');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404(); //jika tidak ada $id yang dipilih, tampilkan error page
        if ($this->layanan->delete($id)) { //jika $id terpilih, lakukan hapus data 
            $this->session->set_flashdata( //tambahkan pesan jika berhasil
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hapus layanan <strong>Berhasil!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>'
            );
            redirect(site_url('admin/layanan')); //arahkan ke halaman list layanan
        }
    }
}

/* End of file Layanan.php */
