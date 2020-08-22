<?php 

class M_login extends CI_Model
{	
	public function cek_login($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}	

	public function check_account($username,$password)
    {
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }
}