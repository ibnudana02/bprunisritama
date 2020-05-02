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

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_produk' => $id])->row();
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id_produk' => $id));
    }

    private function _deleteImage($id)
    {
        $produk = $this->getById($id);
        if ($produk->image != null) {
            $filename = explode(".", $produk->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/produk/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/produk/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_produk;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('admin/add_produk');
        } else {
            // return $this->upload->file_name;
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './upload/produk/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '70%';
            $config['width'] = 1200;
            $config['height'] = 760;
            // $config['new_image'] = './upload/produk/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            return $gbr['file_name'];
        }
    }

    public function getAll()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', $this->_table . '.jenis=jenis.id_jenis');
        return $this->db->get()->result();
    }

    public function getCount()
    {
        // return $this->db->get($this->_table);
        return $this->db->get($this->_table);
    }

    public function getPmb()
    {
        $Value = '5e95457d76d01';
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', $this->_table . '.jenis=jenis.id_jenis');
        $this->db->where('id_jenis', $Value);
        return $this->db->get()->row();
    }

    public function getTab()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', 'produk.jenis=jenis.id_jenis')
            ->where('id_jenis', '5e9545a2ecf3e');
        return $this->db->get();
    }

    public function getKrd()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', 'produk.jenis=jenis.id_jenis')
            ->where('id_jenis', '5e95459d30794');
        return $this->db->get();
    }
}

/* End of file Porduk_model.php */
