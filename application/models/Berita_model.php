<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    private $_table = 'berita';
    public $id_berita;
    public $id_kategori;
    public $judul;
    public $isi;
    public $image;
    public $created_by;
    public $created_on;
    public $update_by;
    public $update_on;

    public function getAll()
    {
        $this->db->select('*')
            ->from('berita')
            ->join('kategori', 'kategori.id_kategori = berita.id_kategori');
        return $this->db->get()->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_berita' => $id]);
    }

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_berita = uniqid();
        $this->id_kategori = htmlspecialchars($post['kategori']);
        $this->judul = htmlspecialchars($post['judul']);
        $this->isi = htmlspecialchars($post['isi']);
        $this->image = $this->_uploadImage();
        $this->created_by = $this->session->userdata('name');
        $this->created_on = date('Y-m-d H:i:s');
        $this->update_by = '';
        $this->update_on = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'C:/xampp/htdocs/bprunisritama/upload/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $this->id_berita;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        // return "default.jpg";
        return $this->upload->display_errors();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_berita' => $id));
    }
}
