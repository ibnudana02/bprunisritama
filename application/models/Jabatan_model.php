<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{
    private $_table = 'jabatan';
    public $id_jabatan;
    public $jabatan;
    public $alias;

    public function getAll()
    {
        $this->db->select('*')
            ->from($this->_table);
        $this->db->order_by('jabatan', 'asc');

        return $this->db->get()->result();
    }

    public function save()
    {

        $post = $this->input->post();
        $this->id_jabatan = uniqid();
        $this->jabatan = htmlspecialchars(strtoupper($post['jabatan']));
        $this->alias = htmlspecialchars(strtoupper($post['alias']));

        $this->db->insert($this->_table, $this);
    }
}
