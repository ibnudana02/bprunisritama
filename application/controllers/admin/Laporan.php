<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
        $this->load->model('Laporan_model', 'laporan');
    }


    public function index()
    {
        $data['title'] = 'Company Report';
        $data['heading'] = 'Company Report';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->laporan->getAll()->result();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/laporan');
        $this->load->view('template/admin_footer');
    }

    public function tambah_laporan()
    {
        $this->form_validation->set_message('required', 'Field Tidak boleh dikosongkan');
        $this->form_validation->set_rules('laporan', 'Laporan', 'required|trim');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required|trim');
        $this->form_validation->set_rules('dokumen', 'Dokumen');
        $laporan = $this->laporan;
        if ($this->form_validation->run()) {
            $laporan->save();
            $this->session->set_flashdata('message', 'Laporan berhasil ditambahkan');
            redirect('admin/laporan', 'refresh');
        }

        $data['title'] = 'Upload Company Report';
        $data['heading'] = 'Upload Company Report';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['tipe'] = $this->laporan->getTipe()->result();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/tambahLaporan');
        $this->load->view('template/admin_footer');
    }

    public function delete($id)
    {
        if (!isset($id)) show_404(); //jika tidak ada $id yang dipilih, tampilkan error page
        if ($this->laporan->delete($id)) { //jika $id terpilih, lakukan hapus data 
            $this->session->set_flashdata( //tambahkan pesan jika berhasil
                'alert',
                'Hapus Laporan Berhasil!'
            );
            redirect(site_url('admin/laporan')); //arahkan ke halaman list berita
        }
    }
}

/* End of file Gcg.php */
