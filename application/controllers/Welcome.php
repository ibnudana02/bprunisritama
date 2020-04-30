<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Layanan_model' => 'layanan', 'Slider_model' => 'slider', 'Berita_model' => 'berita', 'Produk_model' => 'produk'));
	}


	public function index()
	{
		$data['judul'] = 'BPR Unisritama - Mitra Ekonomi Kerakyatan';
		$data['data'] = $this->layanan->getAll()->result();
		$data['slider'] = $this->slider->getAll()->result();
		$data['berita'] = $this->berita->getLima();
		$this->load->view('template/header', $data);
		$this->load->view('template/slider', $data);
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function test()
	{
		$data['data'] = $this->produk->getTab()->result();
		$this->load->view('template/header');
		$this->load->view('produk/tabungan', $data);
		$this->load->view('template/footer');
	}
}
