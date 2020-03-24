<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('tentang/profil');
        $this->load->view('template/footer');
    }

    public function sejarah()
    {
        $this->load->view('template/header');
        $this->load->view('tentang/sejarah');
        $this->load->view('template/footer');
    }

    public function visi_misi()
    {
        $this->load->view('template/header');
        $this->load->view('tentang/visi_misi');
        $this->load->view('template/footer');
    }

    public function manajemen()
    {
        $this->load->view('template/header');
        $this->load->view('tentang/board');
        $this->load->view('template/footer');
    }

    public function awards()
    {
        $this->load->view('template/header');
        $this->load->view('tentang/awards');
        $this->load->view('template/footer');
    }

    public function contact()
    {
        $this->load->view('template/header');
        $this->load->view('tentang/contact');
        $this->load->view('template/footer');
    }
}
