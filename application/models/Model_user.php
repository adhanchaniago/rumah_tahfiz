<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model 
{
    public function tampil_user()
    {
        $this->db->from('tb_siswa');
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result_array();
    }
}