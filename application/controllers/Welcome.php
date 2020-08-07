<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Layanan_model' => 'layanan', 'Slider_model' => 'slider', 'Berita_model' => 'berita', 'Produk_model' => 'produk', 'User_model' => 'user'));
	}


	public function index()
	{
		$data['judul'] = 'BPR Unisritama - Mitra Ekonomi Kerakyatan';
		$data['data'] = $this->layanan->getAll()->result();
		$data['slider'] = $this->slider->getAll()->result();
		$data['berita'] = $this->berita->getAll()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/slider', $data);
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function test()
	{
		$data['judul'] = 'BPR Unisritama - Mitra Ekonomi Kerakyatan';
		$this->load->view('template/header', $data);
		// $this->load->view('produk/tabungan', $data);
		$this->load->view('unik');
		$this->load->view('template/footer');
	}

	public function getkota()
	{
		$kab_domisili = '';
		$id = $this->input->post('id');
		$kota = $this->user->viewByProvinsi($id);
		$lists = "<option value=''>Pilih</option>";
		foreach ($kota as $data) {
			$lists .= "<option value='" . $data->kode . "'>";
			$lists .= $data->nama . "</option>";
		}
		$callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
		echo json_encode($callback);
	}

	public function getcamat()
	{
		$id_prop = $this->input->post('id_prop');
		$id_kota = $this->input->post('id_kota');
		$camat = $this->user->viewByKab($id_prop, $id_kota);
		$lists = "<option value=''>Pilih</option>";
		foreach ($camat as $row) {
			$lists .= "<option value='" . $row->kode . "'>" . $row->nama . "</option>";
		}
		$callback = array('list_camat' => $lists);
		echo json_encode($callback);
	}
	public function getdesa()
	{
		$id_prop = $this->input->post('id_prop');
		$id_kota = $this->input->post('id_kota');
		$id_camat = $this->input->post('id_camat');
		$desa = $this->user->viewByCam($id_prop, $id_kota, $id_camat);
		$lists = "<option value=''>Pilih</option>";
		foreach ($desa as $row) {
			$lists .= "<option value='" . $row->kode . "'>";
			$lists .= $row->nama . "</option>";
		}
		$callback = array('list_desa' => $lists);
		echo json_encode($callback);
	}

	public function upload()
	{
		$this->load->model('Nasabah_model', 'nsb');
		$this->form_validation->set_rules('nama', 'Nama', 'trim');
		$this->form_validation->set_rules('ft_identitas', 'Foto', 'trim');
		$this->form_validation->set_rules('ft_kk', 'Foto', 'trim');
		$this->form_validation->set_rules('ft_selfie', 'Foto', 'trim');
		$this->form_validation->set_rules('ft_ttd', 'Foto', 'trim');
		$this->form_validation->set_rules('ft_npwp', 'Foto', 'trim');


		if ($this->form_validation->run()) {
			$this->nsb->unggah();
			// redirect('Welcome/upload', 'refresh');
		}
		$this->load->view('multi');
	}

	public function step()
	{
		$this->load->view('step');
	}
}
