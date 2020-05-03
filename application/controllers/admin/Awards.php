<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Awards extends CI_Controller
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
        $this->load->model(array('Awards_model' => 'awards'));
    }

    public function index()
    {
        $data['title'] = 'Data Penghargaan';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->awards->getAll()->result();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/awards');
        $this->load->view('template/admin_footer');
    }

    public function tambahAwards()
    {
        $this->form_validation->set_rules('nama', 'Nama Penghargaan', 'trim|required');

        $award = $this->awards;
        if ($this->form_validation->run()) {
            $award->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah Data Penghargaan!</div>');
            redirect('admin/awards', 'refresh');
        } else {
            $data['title'] = 'Administrator - Data Penghargaan';
            $data['heading'] = 'Dashboard';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $data['judul'] = 'BPR Unisritama - Administrator';
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/tambahPenghargaan');
            $this->load->view('template/admin_footer');
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404(); //jika tidak ada $id yang dipilih, tampilkan error page
        if ($this->awards->delete($id)) { //jika $id terpilih, lakukan hapus data 
            $this->session->set_flashdata( //tambahkan pesan jika berhasil
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hapus Penghargaan <strong>Berhasil!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>'
            );
            redirect(site_url('admin/awards')); //arahkan ke halaman list berita
        }
    }
}

/* End of file Awards.php */
