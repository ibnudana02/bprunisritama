<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Awards_model extends CI_Model
{

    private $_table = 'penghargaan';
    public $id_penghargaan;
    public $nama;
    public $gambar;

    public function getAll()
    {
        $this->db->select('*')
            ->from($this->_table);
        return $this->db->get()->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_penghargaan = uniqid();
        $this->nama = htmlspecialchars(strtoupper($post['nama']));
        $this->gambar = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_penghargaan;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;

        // $config['max_width']  = 1024 * 3;
        // $config['max_height']  = 768 * 3;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            // redirect('admin/berita');
        } else {
            return $this->upload->file_name;
        }
    }
}

/* End of file Awards_model.php */
