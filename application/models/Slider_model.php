<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Slider_model extends CI_Model
{

    private $_table = 'slider';
    public $id_slider;
    public $slider;
    public $image;
    public $aktif;

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_slider = uniqid();
        $this->slider = htmlspecialchars($post['slider']);
        $this->image = $this->_uploadImage();
        $this->aktif = htmlspecialchars($post['aktif']);
        $this->db->insert($this->_table, $this);
    }

    public function getAll()
    {
        return $this->db->get($this->_table);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_slider' => $id])->row();
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id_slider' => $id));
    }

    private function _deleteImage($id)
    {
        $slider = $this->getById($id);
        if ($slider->image != null) {
            $filename = explode(".", $slider->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/slider/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/slider/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_slider;
        $config['overwrite'] = true;
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('admin/add_slider');
        } else {
            // return $this->upload->file_name;
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './upload/slider/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '70%';
            $config['width'] = 1920;
            $config['height'] = 920;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            return $gbr['file_name'];
        }
    }
}

/* End of file Slider_model.php */
