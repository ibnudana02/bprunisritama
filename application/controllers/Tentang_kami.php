<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Pegawai_model' => 'pegawai', 'Awards_model' => 'awards'));
    }


    public function index()
    {
        $data['judul'] = 'Profil Perusahaan';
        $this->load->view('template/header', $data);
        $this->load->view('tentang/profil');
        $this->load->view('template/footer');
    }

    public function sejarah()
    {
        $data['judul'] = 'Sejarah Pendirian';
        $this->load->view('template/header', $data);
        $this->load->view('tentang/sejarah');
        $this->load->view('template/footer');
    }

    public function visi_misi()
    {
        $data['judul'] = 'Visi dan Misi';
        $this->load->view('template/header', $data);
        $this->load->view('tentang/visi_misi');
        $this->load->view('template/footer');
    }

    public function manajemen()
    {
        $data['judul'] = 'Board Manajemen';
        $this->load->view('template/header', $data);
        $this->load->view('tentang/board');
        $this->load->view('template/footer');
    }

    public function awards()
    {
        $data['judul'] = 'Penghargaan';
        $data['data'] = $this->awards->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('tentang/awards');
        $this->load->view('template/footer');
    }

    public function contact()
    {
        $data['judul'] = 'Hubungi Kami';
        $this->load->view('template/header', $data);
        $this->load->view('tentang/contact');
        $this->load->view('template/footer');
    }

    public function struktur()
    {
        $data['judul'] = 'Struktur Organisasi';
        $data['data'] = $this->pegawai->getAll();
        $d = $this->pegawai->getAll();
        // echo json_encode($d);
        $this->load->view('template/header', $data);
        $this->load->view('tentang/struktur');
        $this->load->view('template/footer');
    }
}
