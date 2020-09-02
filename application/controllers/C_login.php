<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
       
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('C_login');

    }

    //buat akun user
    public function make_account()
    {
        // buat array data yang akan di input
        $username = 'admin';
        $data = [
            'username' => $username,
            'password' => hash('md5', 'admin'),
            'level' => 'admin',
        ];
        // check data sudah ada atau belum di database, biar data user nggak dempet
        // ambil data dari database berdasarkan username
        $check_username = $this->M_login->find('tb_user', 'username', $username);
        // beri perintah if
        if ($check_username->num_rows() > 0) {
            $response = ['status' => 'username sudah terdaftar'];
        } else {
            $this->M_login->create('tb_user', $data);
            $response = ['status' => ' username berhasil di tambahkan'];
        }
        echo json_encode($response);
    }
    //erivikasi akun user
    public function verification()
    {
        //ambil username dan passwor dari databse
        $username = $this->input->post('username');
        $password = $this->input->post('password'); 
        // $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        // $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        
        //cek data ke databse ada atau tida data username
        $check_username = $this->M_login->check_account($username,hash('md5',$password));
        //jika tidak ada kembali ke login dan beri aler
        if ($check_username->num_rows() == '0') {   //jika username di hitung sama dengan 0
            //beri aler dengan flashdata
            $this->session->set_flashdata('error','maaf username dan password salah');
            redirect('c_login');

            //jika ada buat sesi login
        }else {
            $result = $check_username->row_array(); //ambil satu data dari database
                    //buat array untuk session
            $ses_data = [
                    'username' => $result['username'],
                    'level' => $result['level'],
                    'id_user' => $result['id_user'],
                    'logged_in'=>true,
                ];
    //set buat sessionnya 
    $this->session->set_userdata($ses_data);
    //arahkan sesuai level user
    if ($this->session->userdata('level')=='admin') {
        redirect('c_admin');
        }

        }
    }
}

