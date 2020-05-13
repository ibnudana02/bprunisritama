<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Kategori_model' => 'kategori', 'Berita_model' => 'berita', 'Produk_model' => 'produk'));
    }


    public function pengkinian_data()
    {
        $data['judul'] = 'Pengkinian Nasabah';
        $data['category'] = $this->kategori->getAll(); //Ambil data kategori
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $this->load->view('template/header', $data);
        $this->load->view('news/pengkinian_data', $data);
        $this->load->view('template/footer');
    }

    public function berita()
    {
        $data['judul'] = 'Berita Terbaru | Bank Unisritama';
        $data['berita'] = $this->berita->getAll()->result();
        $this->load->view('template/header', $data);
        $this->load->view('news/berita', $data);
        $this->load->view('template/footer');
    }

    public function detailBerita($slug)
    {
        $row = $this->berita->getBySlug($slug);
        $data['judul'] = ucwords($row->judul).' | Bank Unisritama';
        $data['category'] = $this->kategori->getAll(); //Ambil data kategori
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $data['row'] = $this->berita->getBySlug($slug);
        $this->load->view('template/header', $data);
        $this->load->view('news/detailBerita', $data);
        $this->load->view('template/footer');
    }
}

/* End of file News.php */
