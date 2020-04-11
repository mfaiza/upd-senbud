<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    protected $table;
    
    function __construct(){
       parent::__construct();
       
       $this->load->model('GlobalCrud','crud');
       $this->load->model('UserModel','user');
     //  if($this->session->userdata('role') != 1){
     //      redirect('login');
     //  }
    }
    
    function index(){
        $data = array(
           'set_siswa' => $this->crud->count_table('siswa'),
           'set_ekskul' => $this->crud->count_table('ekskul'),
           'set_akun' => $this->crud->count_table('user'),
           'set_pendaftar' => $this->crud->count_table('registrasi')
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('layouts/footer');
    }
    
    function siswa(){
        $data = array(
            'set' => $this->crud->all('siswa')->result()
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('admin/siswa/kelola',$data);
        $this->load->view('layouts/footer');
    }

    function pengguna(){
        $data = array(
            'set' => $this->crud->twoTablesFusionCondition('user','siswa','*','user.id_siswa=siswa.id_siswa','role','0')->result(),
            'set_siswa' => $this->crud->all('siswa')->result(),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('admin/pengguna/kelola',$data);
        $this->load->view('layouts/footer');
    }

    function tambahadmin(){
     
        $data = array(
            'set' => $this->crud->get('user',["role" =>'1'])->result()
        );       
        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('admin/kelola',$data);
        $this->load->view('layouts/footer');        
    }
    function addadmin(){
        $this->validation();
        if($this->form_validation->run() == FALSE){
            $this->message = "Isi Semua Data dengan Benar!!!";
            $this->session->set_flashdata('warning',$this->message);
            redirect('admin/tambahadmin');
        }else{
            $query = array(
                'username' => $this->input->post('username'),
                'password' => sha1($this->input->post('password')),
                'role' => '1',
                'id_siswa' => '1',
            );
            $this->crud->insert('user',$query);
            $this->message = "Data Admin berhasil disimpan!!!";
            $this->session->set_flashdata('success', $this->message);
            redirect('admin/tambahadmin');
        }
    }

    function deleteadmin($id){
        $this->crud->delete('user','id_user',$id);
        $this->message = "Data Admin Berhasil Dihapus !";
        $this->session->set_flashdata('success',$this->message);            
        redirect('admin/tambahadmin');
    }

    function ekskul(){
        $data = array(
            'set' => $this->crud->all('ekskul')->result(),
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('admin/ekskul/kelola',$data);
        $this->load->view('layouts/footer');
    }

    function galeri(){
        $data = array(
            'set' => $this->crud->twoTablesFusion('dokumentasi','ekskul','*','dokumentasi.id_ekskul=ekskul.id_ekskul')->result()
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('galeri/kelola',$data);
        $this->load->view('layouts/footer');
    }

    function validation(){
        $this->form_validation->set_rules('username','','required');
        $this->form_validation->set_rules('password','','required');
    }
    
}
