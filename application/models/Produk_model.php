<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = 'produk';
    public $produk;
    public $deskripsi;
    public $jenis;
    public $image;
    public $penulis;
    public $created_on;
    public $update_by;
    public $update_on;

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_produk = uniqid();
        $this->produk = htmlspecialchars($post['produk']);
        $this->deskripsi = htmlspecialchars($post['deskripsi']);
        $this->jenis = $post['jenis'];
        $this->image = $this->_uploadImage();
        $this->penulis = $this->session->userdata('name');
        $this->created_on = date('Y-m-d H:i:s');
        $this->update_by = '';
        $this->update_on = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_produk;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('admin/add_produk');
        } else {
            return $this->upload->file_name;
        }
    }

    public function getAll()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', $this->_table . '.jenis=jenis.id_jenis');
        return $this->db->get()->result();
    }
}

/* End of file Porduk_model.php */
