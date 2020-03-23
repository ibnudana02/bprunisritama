<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        // $this->load->view('template/slider');
        $this->load->view('tentang/profil');
        $this->load->view('template/footer');
    }
}
