<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('tentang/profil');
        $this->load->view('template/footer');
    }

    public function pmb()
    {
        $this->load->view('template/header');
        $this->load->view('produk/pmb');
        $this->load->view('template/footer');
    }

    public function pob()
    {
        $this->load->view('template/header');
        $this->load->view('produk/pob');
        $this->load->view('template/footer');
    }

    public function deposito()
    {
        $this->load->view('template/header');
        $this->load->view('produk/dps');
        $this->load->view('template/footer');
    }

    public function tabungan()
    {
        $this->load->view('template/header');
        $this->load->view('produk/tab');
        $this->load->view('template/footer');
    }

    public function kredit()
    {
        $this->load->view('template/header');
        $this->load->view('produk/krd');
        $this->load->view('template/footer');
    }

    public function awards()
    {
        $this->load->view('template/header');
        $this->load->view('tentang/awards');
        $this->load->view('template/footer');
    }
}
