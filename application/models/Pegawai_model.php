<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

    private $_table = 'pegawai';
    public $id_pegawai;
    public $id_jabatan;
    // public $parent_job;
    public $nama;

    public function getAll()
    {
        $this->db->select('pegawai.id_pegawai, pegawai.nama, pegawai.parent_job, pegawai.tag, jabatan.jabatan')
            ->from($this->_table);
        $this->db->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->order_by('pegawai.nama', 'Asc');


        return $this->db->get();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pegawai = uniqid();
        $this->id_jabatan = htmlspecialchars($post['jabatan']);
        // $this->parent_job = htmlspecialchars($post['atasan']);
        $this->nama = htmlspecialchars(strtoupper($post['nama']));

        $this->db->insert($this->_table, $this);
    }

    public function getPegawai()
    {
        $this->db->select('*')
            ->from('pegawai')
            ->join();
    }
}

/* End of file Pegawai_model.php */
