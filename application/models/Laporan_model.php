<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    private $_table = 'laporan';
    public $id_laporan;
    public $laporan;
    public $tipe;
    public $dokumen;
    public $created_on;
    public $created_by;

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_laporan = uniqid();
        $this->laporan = htmlspecialchars($post['laporan']);
        $this->tipe = htmlspecialchars($post['tipe']);
        $this->dokumen = $this->_uploadFile();
        $this->created_by = $this->session->userdata('name');
        $this->created_on = date('Y-m-d H:i:s');
        // var_dump($this);die;
        $this->db->insert($this->_table, $this);
    }

    private function _uploadFile()
    {
        $config['upload_path'] = './upload/laporan/';
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $this->id_laporan;
        $config['overwrite'] = true;
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('dokumen')) {
            $this->session->set_flashdata('alert', $this->upload->display_errors());
            redirect('admin/add_laporan');
        } else {
            // $dok = $this->upload->data();
            return $this->upload->file_name;
        }
    }

    public function getTipe()
    {
        return $this->db->get('tipe');
    }

    public function getAll()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('tipe', $this->_table . '.tipe=tipe.id_tipe');
        return $this->db->get();
    }

    public function getGcg()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->where('tipe', '5ebfa858d95c0');
        return $this->db->get();
    }

    public function getPub()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->where('tipe', '5ebfa858d95c2');
        return $this->db->get();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_laporan' => $id])->row();
    }

    public function delete($id)
    {
        $this->_deleteDokumen($id);
        return $this->db->delete($this->_table, array('id_laporan' => $id));
    }
    private function _deleteDokumen($id)
    {
        $laporan = $this->getById($id);
        if ($laporan->dokumen != null) {
            $filename = explode(".", $laporan->dokumen)[0];
            return array_map('unlink', glob(FCPATH . "upload/laporan/$filename.*"));
        }
    }
}

/* End of file Laporan_model.php */
