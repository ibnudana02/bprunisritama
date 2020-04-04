<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_model extends CI_Model
{
    public function get_company()
    {
        $this->db->select('*');
        $this->db->from('tentang');
        return $this->db->get()->result_array();
    }

    public function get_kantor()
    {
        $this->db->select('*');
        $this->db->from('kantor');
        return $this->db->get()->result();
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
