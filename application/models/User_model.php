<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = 'user';
    public $id_user;
    public $name;
    public $username;
    public $email;
    public $password;
    public $role_id;
    public $image;
    public $date_created;

    public function getProfil()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*')
            ->from($this->_table)
            ->join('role', 'user.role_id=role.id_role')
            ->where('user.id_user', $id);
        return $this->db->get();

        // return $this->db->get_where($this->_table, ['id_user' => $id])->row();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $this->id_user = uniqid();
        $this->name = htmlspecialchars(strtoupper($post['name']));
        $this->username = htmlspecialchars(strtoupper($post['username']));
        $this->email = htmlspecialchars(strtolower($post['email']));
        $this->password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
        $this->role_id = htmlspecialchars($post['role_id']);
        $this->image = $this->_UploadImage();
        $this->date_created = time();

        $this->db->insert($this->_table, $this);
    }

    private function _UploadImage()
    {
        $config['upload_path'] = './upload/user/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_user;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('admin/registration');
        } else {
            return $this->upload->file_name;
        }
    }

    public function getRole()
    {
        return $this->db->get('role');
    }

    public function getAll()
    {
        return $this->db->get($this->_table);
    }

    public function getProv()
    {
        // return $this->db->get('provinsi')->result();
        $this->db->select('kode,nama');
        $this->db->where('LENGTH(kode)', 2);
        return $this->db->get('wilayah_2020')->result();
    }

    public function viewKab($id, $n, $m)
    {
        $this->db->select('kode, nama');
        // LEFT(kode,'$n')='$id'
        $this->db->where('LEFT(kode,' . $n . ')', $id);
        $this->db->where('LENGTH(kode)', $m);
        $this->db->order_by('nama', 'asc');
        return $this->db->get('wilayah_2020')->result();
    }
    public function viewKec($id, $n, $m)
    {
        $this->db->select('kode, nama');
        // LEFT(kode,'$n')='$id'
        $this->db->where('LEFT(kode,' . $n . ')', $id);
        $this->db->where('LENGTH(kode)', $m);
        $this->db->order_by('nama', 'asc');
        return $this->db->get('wilayah_2020')->result();
    }
    public function viewDesa($id, $n, $m)
    {
        $this->db->select('kode, nama');
        // LEFT(kode,'$n')='$id'
        $this->db->where('LEFT(kode,' . $n . ')', $id);
        $this->db->where('LENGTH(kode)', $m);
        $this->db->order_by('nama', 'asc');
        return $this->db->get('wilayah_2020')->result();
    }
}

/* End of file User_model.php */
