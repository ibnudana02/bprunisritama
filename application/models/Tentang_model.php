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

    public function get_kategori()
    {
        $this->db->select('*')
            ->from('kategori');
        return $this->db->get()->result();
    }
}
