<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan_model extends CI_Model
{
    private $_table = 'layanan';
    public $id_layanan;
    public $layanan;
    public $deskripsi;

    public function save()
    {
        $post = $this->input->post();
        $this->id_layanan = uniqid();
        $this->layanan = htmlspecialchars($post['layanan']);
        $this->deskripsi = htmlspecialchars($post['deskripsi']);

        $this->db->insert($this->_table, $this);
    }

    public function getAll()
    {
        return $this->db->get($this->_table);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_layanan' => $id));
    }
}

/* End of file Layanan_model.php */
