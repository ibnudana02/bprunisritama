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

    public function detail($slug)
    {
        $data['row'] = $this->berita->getBySlug($slug);
    }
}

/* End of file News.php */
