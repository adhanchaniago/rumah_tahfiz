<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_user');
    }

	public function index()
	{
        $this->load->view('user/header');
        $this->load->view('user/dashboard');
        $this->load->view('user/footer');
    }

    public function v_tb_user()
    {
        $data['tb_siswa'] = $this->Model_user->tampil_user();
        $this->load->view('user/header');
        $this->load->view('user/v_tb_user', $data);
        $this->load->view('user/footer');
    }

    public function tambah_hafalan()
    {
        $this->load->view('user/header');
        $this->load->view('user/v_tambah_hafalan');
        $this->load->view('user/footer');
    }
}