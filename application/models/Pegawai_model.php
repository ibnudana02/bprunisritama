<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

    private $_table = 'pegawai';
    public $id_pegawai;
    public $id_jabatan;
    // public $jabatan;
    public $nama;

    public function getAll()
    {
        $this->db->select('*')
            ->from($this->_table);
        $this->db->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan', 'left');

        return $this->db->get()->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pegawai = uniqid();
        $this->id_jabatan = htmlspecialchars($post['jabatan']);
        $this->nama = htmlspecialchars(strtoupper($post['nama']));

        $this->db->insert($this->_table, $this);
    }
}

/* End of file Pegawai_model.php */
