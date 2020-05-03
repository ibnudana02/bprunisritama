<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_model extends CI_Model
{
    private $_table = 'kantor';
    public $id_kantor;
    public $kantor;
    public $alamat;
    public $telp;
    public $email;

    public function get_company()
    {
        $this->db->select('*');
        $this->db->from('tentang');
        return $this->db->get()->result();
    }

    public function get_kantor()
    {
        $this->db->select('*');
        $this->db->from('kantor');
        return $this->db->get();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kantor = uniqid();
        $this->kantor = htmlspecialchars($post['kantor']);
        $this->alamat = htmlspecialchars($post['alamat']);
        $this->telp = htmlspecialchars($post['telp']);
        $this->email = htmlspecialchars($post['email']);
        $this->db->insert($this->_table, $this);
    }

    public function get_berita()
    {
        $this->db->select('*')
            ->from('berita')
            ->join('kategori', 'kategori.id_kategori=berita.id_kategori')
            ->order_by('berita.created_on', 'asc');
        return $this->db->get();
    }
}
