<?php 

if(defined('basepath')) exit ('No direct access script allowed');

class User extends CI_Controller {
    
    var $message;

    function __construct(){
        parent::__construct();
        $this->load->model('GlobalCrud','crud');
        date_default_timezone_set('Asia/Jakarta');
        
        if($this->session->userdata('role') != '0'){
            redirect('login','refresh');
        }
    }
    
    function registerEkskul(){


        $count = array(
            'id_siswa' => $this->session->userdata('id_siswa')
        );

        $data = array(
            'set' => $this->crud->all('ekskul')->result(),
            'set_siswa' => $this->crud->twoTablesFusionCondition('user','siswa','*','user.id_siswa = siswa.id_siswa','id_user',$this->session->userdata('id_user'))->result(),
            'set_ekskul' => $this->crud->twoTablesFusionCondition('registrasi_ekskul','ekskul','*','registrasi_ekskul.id_ekskul= ekskul.id_ekskul','id_siswa',$this->session->userdata('id_siswa'))->result(),
            'total_ekskul' => $this->crud->get('registrasi_ekskul',$count)->num_rows()
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('user/registerEkskul',$data);
        $this->load->view('layouts/footer');
    }

    function registerSenbud(){


        $count = array(
            'id_siswa' => $this->session->userdata('id_siswa')
        );

        $data = array(
            'set' => $this->crud->all('senbud')->result(),
            'set_siswa' => $this->crud->twoTablesFusionCondition('user','siswa','*','user.id_siswa = siswa.id_siswa','id_user',$this->session->userdata('id_user'))->result(),
            'set_senbud' => $this->crud->twoTablesFusionCondition('registrasi_senbud','senbud','*','registrasi_senbud.id_senbud= senbud.id_senbud','id_siswa',$this->session->userdata('id_siswa'))->result(),
            'total_senbud' => $this->crud->get('registrasi_senbud',$count)->num_rows()
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('user/registerSenbud',$data);
        $this->load->view('layouts/footer');
    }

    function registeredEkskul($id_ekskul){

        $cek = array(
            'id_siswa' => $this->session->userdata('id_siswa'),
            'id_ekskul' => $id_ekskul      
        );

        $result = $this->crud->get('registrasi_ekskul',$cek)->num_rows();
        if($result > 0){
            $this->message = 'Anda tidak bisa mengikuti ekskul yang sama lebih dari satu';
            $this->session->set_flashdata('warning',$this->message);
            redirect('user/registerEkskul');

        } else {

            $count = array(
                 'id_siswa' => $this->session->userdata('id_siswa')      
            );

            $total = $this->crud->get('registrasi_ekskul',$count)->num_rows();

            if($total >= 3){

                $this->message = 'Anda tidak bisa mengikuti ekskul lebih dari 3';
                $this->session->set_flashdata('warning',$this->message);
                redirect('user/registerEkskul');

            } else {

                $query = array(
                    'id_ekskul' => $id_ekskul,
                    'id_siswa'  => $this->session->userdata('id_siswa'),
                    'tanggal_daftar' => date('Y-m-d')
                );

                $this->crud->insert('registrasi_ekskul',$query);
                $this->message = 'Anda berhasil mengikuti ekskul :)';
                $this->session->set_flashdata('success',$this->message);
                redirect('user/registerEkskul');
            }

        }
    }

    function registeredSenbud($id_senbud){

        $cek = array(
            'id_siswa' => $this->session->userdata('id_siswa'),
            'id_senbud' => $id_senbud      
        );

        $result = $this->crud->get('registrasi_senbud',$cek)->num_rows();
        if($result > 0){
            $this->message = 'Anda tidak bisa mengikuti senbud yang sama lebih dari satu';
            $this->session->set_flashdata('warning',$this->message);
            redirect('user/registerSenbud');

        } else {

            $count = array(
                 'id_siswa' => $this->session->userdata('id_siswa')      
            );

            $total = $this->crud->get('registrasi_senbud',$count)->num_rows();

            if($total >= 3){

                $this->message = 'Anda tidak bisa mengikuti senbud lebih dari 3';
                $this->session->set_flashdata('warning',$this->message);
                redirect('user/registerSenbud');

            } else {

                $query = array(
                    'id_senbud' => $id_senbud,
                    'id_siswa'  => $this->session->userdata('id_siswa'),
                    'tanggal_daftar' => date('Y-m-d')
                );

                $this->crud->insert('registrasi_senbud',$query);
                $this->message = 'Anda berhasil mengikuti senbud :)';
                $this->session->set_flashdata('success',$this->message);
                redirect('user/registerSenbud');
            }

        }
    }

    function galeriEkskul(){
        $data = array(
            'set' => $this->crud->twoTablesFusion('dokumentasi_ekskul','ekskul','*','dokumentasi_ekskul.id_ekskul=ekskul.id_ekskul')->result()
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('galeri/kelolaEkskul',$data);
        $this->load->view('layouts/footer');
    }
    
    function galeriSenbud(){
        $data = array(
            'set' => $this->crud->twoTablesFusion('dokumentasi_senbud','senbud','*','dokumentasi_senbud.id_senbud=senbud.id_senbud')->result()
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('galeri/kelolaSenbud',$data);
        $this->load->view('layouts/footer');
    }
    
    
    
    
}