<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function getProfil($id)
    {
        return $this->db->get_where($this->_table, ['id_user' => $id])->row();
    }
}

/* End of file User_model.php */
