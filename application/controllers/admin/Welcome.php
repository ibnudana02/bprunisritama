<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model(array(
			'Berita_model' => 'berita', 'Produk_model' => 'produk',
			'Layanan_model' => 'layanan', 'Jenis_model' => 'jenis',
			'Pegawai_model' => 'pegawai', 'Awards_model' => 'awards',
			'User_model' => 'user', 'Laporan_model' => 'laporan'
		));
	}

	public function home()
	{
		$nama = $this->session->has_userdata('name');
		if (empty($nama)) {

			redirect('admin', 'refresh');
		}
		$data['title'] = 'Administrator - Dashboard';
		$data['heading'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['judul'] = 'BPR Unisritama - Administrator';
		$data['beritaCount'] = $this->berita->getCount()->num_rows();
		$data['produkCount'] = $this->produk->getCount()->num_rows();
		$data['layananCount'] = $this->layanan->getAll()->num_rows();
		$data['jenisCount'] = $this->jenis->getAll()->num_rows();
		$data['pegawaiCount'] = $this->pegawai->getAll()->num_rows();
		$data['awardsCount'] = $this->awards->getAll()->num_rows();
		$data['laporanCount'] = $this->laporan->getAll()->num_rows();
		$this->load->view('template/admin_header', $data);
		$this->load->view('admin/home');
		$this->load->view('template/admin_footer');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'BPR Unisritama - Login';
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/auth_footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'id_user' => $user['id_user'],
					'name' => $user['name'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Selamat Datang <strong>' . $user['name'] . '</strong> di Admin Panel - Bank Unisritama!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button></div>'
				);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
				redirect('admin');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email doesnt exist!</div>');
			redirect('admin');
		}
	}

	public function registration()
	{
		$nama = $this->session->has_userdata('name');
		if (empty($nama)) {

			redirect('admin', 'refresh');
		}

		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Minimal 8 character'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run()) {
			$this->user->simpan();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah User</div>');
			redirect('admin/users');
			// echo 'berhasil';
		} else {
			$data['title'] = 'Administrator - Tambah User';
			$data['heading'] = 'Dashboard';
			$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
			$data['judul'] = 'BPR Unisritama - Administrator';
			$data['role'] = $this->user->getRole()->result();
			$this->load->view('template/admin_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('template/admin_footer');
		}
	}

	public function users()
	{
		$nama = $this->session->has_userdata('name');
		if (empty($nama)) {

			redirect('admin', 'refresh');
		}
		$data['title'] = 'Administrator - Users';
		$data['heading'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['judul'] = 'BPR Unisritama - Administrator';
		$data['users'] = $this->user->getAll()->result();
		$this->load->view('template/admin_header', $data);
		$this->load->view('admin/users');
		$this->load->view('template/admin_footer');
	}

	public function error_page()
	{
		$this->load->view('error_page');
		$this->load->view('template/admin_footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout</div>');
		redirect('admin');
	}
}
