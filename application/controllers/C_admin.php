<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_siswa');
        $this->load->library('upload');
        //ini pnting untuk ke amanan login
        if ($this->session->userdata('level') !== 'admin' or
        $this->session->userdata('logged_in') !== true
    ) {
        $this->session->set_flashdata('error', 'Anda tidak punya akses untuk menu admin');
        redirect('c_login');
    }
    }

	public function index()
	{
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
    
    public function v_tb_siswa()
    {
        $data['tb_siswa'] = $this->Model_siswa->tampil_siswa();
        $this->load->view('admin/header');
        $this->load->view('admin/v_tb_siswa', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_siswa()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/v_tambah_siswa');
        $this->load->view('admin/footer');
    }

       // tambah kan fungsi upload  untuk semua
       public function upload($name)
       {
           $config['upload_path'] = './assets/images/'; //path folder
           $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
           $config['encrypt_name'] = true; //nama yang terupload nantinya
   
           $this->upload->initialize($config);
           if (!empty($_FILES[$name]['name'])) {
               if ($this->upload->do_upload($name)) {
                   $gbr = $this->upload->data();
                   // Compress Image
                   $config['image_library'] = 'gd2';
                   $config['source_image'] = './assets/images/' . $gbr['file_name'];
                   $config['create_thumb'] = false;
                   $config['maintain_ratio'] = false;
                   $config['quality'] = '60%';
                   $config['width'] = 710;
                   $config['height'] = 420;
                   $config['new_image'] = './assets/images/' . $gbr['file_name'];
                   $this->load->library('image_lib', $config);
                   $this->image_lib->resize();
                   $response['data'] = $gbr['file_name'];
                   $response['status'] = 'success';
                   return $response;
               } else {
                   $response['status'] = 'error';
                   return $response;
                   // redirect('c_admin/V_berita');
               }
   
           } else {
               return $response['status'] = 'image not found';
           }
  
           function ambildataid()
           {
              $id_siswa = $this->input->post('id_siswa'); //Menangkap inputan no induk
              $data = $this->Model_siswa->getdataid($id_siswa); // Menampung value return dari fungsi getDataByNoinduk ke variabel data
              echo json_encode($data); 
          }
      }

    public function save_siswa()
    {
        $image = $this->upload('image');
        if ($image['status']=='success') {
            $data =[
                'no_induk' =>$this->input->post('no_induk'),
                'nama' =>$this->input->post('nama'),
                'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
                'tgl_lahir' =>$this->input->post('tgl_lahir'),
                'alamat' =>$this->input->post('alamat'),
                'status' =>$this->input->post('status'),
                'no_hp' =>$this->input->post('no_hp'),
                'image' =>$image['data'],
            ];
            $this->Model_siswa->save_siswa($data);
            // print_r($data);
            $this->session->set_flashdata('success', 'data success in save');
            redirect('c_admin/v_tb_siswa');
        }else {
            $this->session->set_flashdata('error','Foto yang anda masukan tidak sesui dengan kreteria sisten !!');
            redirect('c_admin/v_tb_siswa');
        }
    }

        public function edit_siswa($id)
        {
            $data['edit'] = $this->Model_siswa->edit_siswa($id);
            $this->load->view('admin/header');
            $this->load->view('admin/v_edit_siswa',$data);
            $this->load->view('admin/footer');
        }
    
        public function delete_siswa($id)
        {
            $this->Model_siswa->delete_siswa($id);
            $this->session->set_flashdata('error','data di hapus');
            redirect('c_admin/v_tb_siswa');
        }

        public function update($id)
        {
            $image = $this->upload('image');
            if ($image['status'] == 'success') {
               $data =[
                   'no_induk'     =>$this->input->post('no_induk'),
                   'nama'         =>$this->input->post('nama'        ),
                   'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                   'tgl_lahir'    =>$this->input->post('tgl_lahir'),
                   'alamat'       =>$this->input->post('alamat'),
                   'status'       =>$this->input->post('status'),
                   'no_hp'        =>$this->input->post('no_hp'),
                   'image'        =>$image['data'],
                   ];
               }else {
                    $data =[
                        'no_induk'     =>$this->input->post('no_induk'),
                        'nama'         =>$this->input->post('nama'),
                        'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                        'tgl_lahir'    =>$this->input->post('tgl_lahir'),
                        'alamat'       =>$this->input->post('alamat'),
                        'status'       =>$this->input->post('status'),
                        'no_hp'        =>$this->input->post('no_hp'),
                        ];
               }
               $this->Model_siswa->update($id,$data);
               // print_r($data);
            
            $this->session->set_flashdata('success','Data berhasil di ubah');
            redirect('c_admin/v_tb_siswa');
        }
    
}
