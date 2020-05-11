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
        $data['judul'] = 'Deposito | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Deposito';
        $data['data'] = $this->produk->getDep();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function tabungan()
    {
        $data['judul'] = 'Tabungan | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Tabungan';
        $data['data'] = $this->produk->getTab();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function kredit()
    {
        $data['judul'] = 'Kredit | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Kredit';
        $data['data'] = $this->produk->getKrd();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function dana()
    {
        $data['judul'] = 'Produk Dana | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk Dana';
        $data['data'] = $this->produk->getDana();
        // print_r($data['data']->result());
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function awards()
    {
        $this->load->view('template/header');
        $this->load->view('tentang/awards');
        $this->load->view('template/footer');
    }
}
