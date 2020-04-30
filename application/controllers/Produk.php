<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Kategori_model' => 'kategori', 'Berita_model' => 'berita', 'Produk_model' => 'produk'));
    }

    public function index()
    {
        $this->load->view('template/header');
        // $this->load->view('tentang/profil');
        $this->load->view('template/footer');
    }

    public function pmb()
    {
        $data['judul'] = 'Pembayaran Mahasiswa';
        $data['category'] = $this->kategori->getAll(); //Ambil data kategori
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $data['row'] =  $this->produk->getPmb(); //Ambil data berita
        $this->load->view('template/header', $data); //passing data to header view
        $this->load->view('produk/pmb', $data); //passing data to content view
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
        $data['judul'] = 'Tabungan | Bank Unisritama';
        $data['data'] = $this->produk->getTab()->result();
        // var_dump($data['data']);
        $this->load->view('template/header', $data);
        $this->load->view('produk/tabungan', $data);
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
