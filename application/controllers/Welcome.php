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

	public function getDati()
	{
		$id = $this->input->post('id');
		$data = $this->input->post('data');


		$n = strlen($id);
		$m = ($n == 2 ? 5 : ($n == 5 ? 8 : 13));
		// die;

		if ($data == "kabupaten") {
			$daerah = $this->user->viewKab($id, $n, $m);
			// var_dump($daerah);
			$lists = "<option value=''>Pilih</option>";
			foreach ($daerah as $data) {
				$lists .= "<option value='" . $data->kode . "'>";
				$lists .= $data->nama . "</option>";
			}
			$callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
			echo json_encode($callback);
		} elseif ($data == "kecamatan") {
			$daerah = $this->user->viewKec($id, $n, $m);
			$lists = "<option value=''>Pilih</option>";
			foreach ($daerah as $data) {
				$lists .= "<option value='" . $data->kode . "'>";
				$lists .= $data->nama . "</option>";
			}
			$callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
			echo json_encode($callback);
		} elseif ($data = "desa") {
			$daerah = $this->user->viewDesa($id, $n, $m);
			$lists = "<option value=''>Pilih</option>";
			foreach ($daerah as $data) {
				$lists .= "<option value='" . $data->kode . "'>";
				$lists .= $data->nama . "</option>";
			}
			$callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
			echo json_encode($callback);
		}
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
		$data['judul'] = 'Pembukaan Rekening Tabungan | Bank Unisritama';
		$data['agama'] = $this->db->get_enum('nasabah_tab', 'agama');
		$data['tujuan_buka'] = $this->db->get_enum('nasabah_tab', 'tujuan_buka');
		$data['status_rumah'] = $this->db->get_enum('nasabah_tab', 'status_rumah');
		$data['pendidikan'] = $this->db->get_enum('nasabah_tab', 'pendidikan');
		$data['aw'] = $this->db->get_enum('nasabah_tab', 'hb_ahli_waris');
		$data['status'] = $this->db->get_enum('nasabah_tab', 'status_menikah');
		$data['profesi'] = $this->db->get_enum('nasabah_tab', 'profesi');
		$data['jenis_pekerjaan'] = $this->db->get_enum('nasabah_tab', 'jenis_pekerjaan');
		$data['status_pekerjaan'] = $this->db->get_enum('nasabah_tab', 'status_pekerjaan');
		$data['sumber_dana'] = $this->db->get_enum('nasabah_tab', 'sumber_dana');
		$data['wn'] = $this->db->get_enum('nasabah_tab', 'warga_negara');
		$data['identitas'] = $this->db->get_enum('nasabah_tab', 'jenis_identitas');
		$data['jk'] = $this->db->get_enum('nasabah_tab', 'jenis_kelamin');
		$data['bread'] = 'Home';
		$data['crumb'] = 'Produk';
		$data['jenis'] = $this->produk->getTab()->result();
		$data['prop'] = $this->user->getProv();
		$this->load->view('step', $data);
	}
}
