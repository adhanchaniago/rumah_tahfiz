<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model 
{
	public $table='tb_siswa';
    public function tampil_siswa()
    {
        $this->db->from($this->table);
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result_array();
    }

    function getdataid($id_siswa){
        $this->db->where('id_siswa',$id_siswa); // where no induk
        return $this->db->get($this->table)->result_array(); // me-return hasil dari get tb_siswa
    }

    public function save_siswa($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function edit_siswa($id)
    {
    $this->db->where('id_siswa', $id);
    return $this->db->get($this->table)->row_array();
    }

    public function details_siswa($id)
    {
        $this->db->where('id_siswa', $id);
        return $this->db->get($this->table)->row_array();
    }

    public function delete_siswa($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete($this->table);
    }

    public function update($id,$data)
    {
        $this->db->where('id_siswa',$id);
        $this->db->update($this->table,$data);
    }

    public function save_walimurid($data)
    {
        $this->db->insert('tb_walimurid', $data);
    }

    public function get_walimurid()
    {
        $this->db->from('tb_walimurid');
        $this->db->order_by('id_walimurid', 'desc');
        return $this->db->get()->result_array();

    }


}
 