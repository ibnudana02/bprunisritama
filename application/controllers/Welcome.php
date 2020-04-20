<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Layanan_model' => 'layanan', 'Slider_model' => 'slider'));
	}


	public function index()
	{
		// $this->load->view('welcome_message');
		$data['judul'] = 'BPR Unisritama - Mitra Ekonomi Kerakyatan';
		$data['data'] = $this->layanan->getAll()->result();
		$data['slider'] = $this->slider->getAll()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/slider', $data);
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function html()
	{
		$this->load->view('test.html');
	}
}
