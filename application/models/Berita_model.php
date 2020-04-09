<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    private $_table = 'berita';
    public $id_berita;
    public $id_kategori;
    public $judul;
    public $isi;
    public $image;
    public $penulis;
    public $created_on;
    public $update_by;
    public $update_on;

    public function getAll()
    {
        $this->db->select('*')
            ->from('berita')
            ->join('kategori', 'kategori.id_kategori = berita.id_kategori');
        return $this->db->get()->result();
    }

    public function getLima()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->limit(5);
        return $this->db->get()->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_berita' => $id])->row();
    }

    public function getCount()
    {
        // $this->db->select('id_berita')
        return $this->db->get($this->_table);
    }

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_berita = uniqid();
        $this->id_kategori = htmlspecialchars($post['kategori']);
        $this->judul = htmlspecialchars(ucwords($post['judul']));
        $this->isi = htmlspecialchars($post['isi']);
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
        $config['file_name'] = $this->id_berita;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;

        // $config['max_width']  = 1024 * 3;
        // $config['max_height']  = 768 * 3;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('admin/berita');
        } else {
            return $this->upload->file_name;
        }
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id_berita' => $id));
    }

    private function _deleteImage($id)
    {
        $berita = $this->getById($id);
        if ($berita->image != null) {
            $filename = explode(".", $berita->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/$filename.*"));
        }
    }
}
