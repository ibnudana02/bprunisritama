<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_model extends CI_Model
{

    private $_table = 'jenis';
    public $jenis;

    public function save()
    {
        $post = $this->input->post();
        $this->id_jenis = uniqid();
        $this->jenis = htmlspecialchars($post['jenis']);

        $this->db->insert($this->_table, $this);
    }

    public function getAll()
    {
        return $this->db->get('jenis');
    }

    public function getRek()
    {
        $jenis = array('Deposito', 'Kredit', 'Tabungan');
        $this->db->select('*')
            ->from($this->_table)
            ->where_in('jenis', $jenis);
        return $this->db->get();
    }
}

/* End of file Jenis_model.php */
