<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('Berita_model' => 'berita', 'Produk_model' => 'produk'));
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
