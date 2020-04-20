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
        return $this->db->get();
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
        $config['upload_path'] = './upload/awards/';
        $config['allowed_types'] = 'jpg|png';
        $config['file_name'] = $this->id_penghargaan;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
        } else {
            return $this->upload->file_name;
        }
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_penghargaan' => $id])->row();
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id_penghargaan' => $id));
    }

    private function _deleteImage($id)
    {
        $award = $this->getById($id);
        if ($award->gambar != null) {
            $filename = explode(".", $award->gambar)[0];
            return array_map('unlink', glob(FCPATH . "upload/awards/$filename.*"));
        }
    }
}

/* End of file Awards_model.php */
