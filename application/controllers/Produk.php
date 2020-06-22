<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Kategori_model' => 'kategori', 'Berita_model' => 'berita', 'Produk_model' => 'produk', 'Jenis_model' => 'jenis', 'User_model' => 'user'));
    }

    public function index()
    {
        $this->load->view('template/header');
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

    public function ppob()
    {
        $data['judul'] = 'Payment Point Online Bank';
        $data['category'] = $this->kategori->getAll(); //Ambil data kategori
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $data['row'] =  $this->produk->getPayment(); //Ambil data berita
        // var_dump($data['row']);
        $this->load->view('template/header', $data);
        $this->load->view('produk/pmb', $data);
        $this->load->view('template/footer');
    }

    public function deposito()
    {
        $data['judul'] = 'Deposito | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Deposito';
        $data['data'] = $this->produk->getDep()->result();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function tabungan()
    {
        $data['judul'] = 'Tabungan | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Tabungan';
        $data['data'] = $this->produk->getTab()->result();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function kredit()
    {
        $data['judul'] = 'Kredit | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Kredit';
        $data['data'] = $this->produk->getKrd()->result();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function dana()
    {
        $data['judul'] = 'Produk Dana | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk Dana';
        $data['data'] = $this->produk->getDana()->result();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function produk()
    {
        $data['judul'] = 'Produk | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk';
        $data['data'] = $this->produk->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function detailProduk($slug)
    {
        // $row = $this->produk->getById($id);
        $row = $this->produk->getBySlug($slug);
        $data['judul'] = ucwords($row->produk) . ' | Bank Unisritama';
        $data['dps'] = $this->produk->getDep()->result();
        $data['tab'] = $this->produk->getTab()->result();
        $data['krd'] = $this->produk->getKrd()->result();
        $data['berita'] = $this->berita->getLima();
        $data['row'] = $row;
        $this->load->view('template/header', $data);
        $this->load->view('produk/detailProduk', $data);
        $this->load->view('template/footer');
    }

    public function createTab()
    {
        $this->form_validation->set_rules('produk', 'Produk', 'required|trim');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $produk = $this->produk; //produk model disimpan dalam variable
        if ($this->form_validation->run()) { //jika form_validation berhasil dijalankan, fungsi save() atau simpan data dijalankan
            $produk->save();
            $this->session->set_flashdata('message', 'Berhasil ditambahkan');
            redirect('admin/produk', 'refresh');
        }

        $data['judul'] = 'Pembukaan Rekening Tabungan | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk';
        $data['jenis'] = $this->produk->getTab()->result();
        $data['prop'] = $this->user->getProv();
        // $data['kab'] = $this->user->viewByProvinsi();
        $this->load->view('template/header', $data);
        $this->load->view('produk/bukaRek', $data);
        $this->load->view('template/footer');
    }

    public function listkota()
    {
        $id = $this->input->post('prop');
        $kota = $this->user->viewByProvinsi($id);
        // print_r($kota);
        // die;
        $lists = "<option value=''>Pilih</option>";
        foreach ($kota as $row) {
            // $d = $row->nama;
            $lists .= "<option value='" . $row->id . "'>" . $row->nama . "</option>";
            // $lists .= "<option value=" . $row->id . ">" . $row->nama . "</option>";
        }
        $callback = array('list_kota' => $lists);
        echo json_encode($callback);
    }

    public function getKota()
    {
        $id = $this->input->post('prop');
        $kota = $this->user->viewByProvinsi($id);
        var_dump($kota);
        echo json_encode($kota);
    }
}
