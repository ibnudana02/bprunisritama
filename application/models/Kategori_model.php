<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = 'kategori';
    public $id_kategori;
    public $kategori;
    public $created_by;
    public $created_on;
    // public $update_by;
    // public $update_on;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kategori = htmlspecialchars(uniqid());
        $this->kategori = $post['kategori'];
        $this->created_by = $this->session->userdata('name');
        $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_kategori' => $id));
    }
}
