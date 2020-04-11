<?php 

if(defined('basepath')) exit ('no direct access script allowed');

class Senbud extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('GlobalCrud','crud');
	}

	function create(){
		$this->validation();
		if($this->form_validation->run() == FALSE){

			$this->message = "Komponen Senbud Wajib Diisi !";
	        $this->session->set_flashdata('warning',$this->message);            
	        redirect('admin/senbud');

		} else {

			$query = array(
				'nama_senbud' => $this->input->post('nama_senbud'),
				'penanggung_jawab' => $this->input->post('penanggung_jawab'),
				'lokasi' => $this->input->post('lokasi'),
				'hari' => $this->input->post('hari'),
				'jam_mulai' => $this->input->post('jam_mulai'),
				'jam_selesai' => $this->input->post('jam_selesai')
				
			);
			$this->crud->insert('senbud',$query);
			$this->message = "Data Senbud Berhasil Disimpan !";
	        $this->session->set_flashdata('success',$this->message);            
	        redirect('admin/senbud');

		}
		

	}

	function get($id){
		$query = array(
			'id_senbud' => $id
		);

		$result = $this->crud->get('senbud',$query)->row();
		echo json_encode($result);
	}

	function update(){
		$query = array(
				'nama_senbud' => $this->input->post('nama_senbud'),
				'penanggung_jawab' => $this->input->post('penanggung_jawab'),
				'lokasi' => $this->input->post('lokasi'),
				'hari' => $this->input->post('hari'),
				'jam_mulai' => $this->input->post('jam_mulai'),
				'jam_selesai' => $this->input->post('jam_selesai'),
			);
		$this->crud->update('senbud',$query,'id_senbud',$this->input->post('id_senbud'));
		$this->message = "Data Senbud Berhasil Diubah !";
        $this->session->set_flashdata('success',$this->message);            
        redirect('admin/senbud');
	}

	function destroy($id){
		$this->crud->delete('senbud','id_senbud',$id);
		$this->message = "Data Senbud Berhasil Dihapus !";
        $this->session->set_flashdata('success',$this->message);            
        redirect('admin/senbud');
	}

	function data_pendaftar($id_senbud){
		$data = array(
			'set' => $this->crud->threeTablesFusionCondition(
				'registrasi',
				'senbud',
				'siswa',
				'siswa.id_siswa as id_siswa,
				 siswa.nama_siswa as nama,
				 siswa.nis as nis,
				 siswa.kelas as kelas,
				 siswa.jurusan as jurusan,
				 siswa.rombel as rombel,
				 registrasi.tanggal_daftar as tanggal,
				 senbud.id_senbud as id_senbud
				',
				'senbud.id_senbud=registrasi.id_senbud',
				'siswa.id_siswa=registrasi.id_siswa',
				'registrasi.id_senbud',
				$id_senbud)->result()

		);


        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('admin/senbud/pendaftar',$data);
        $this->load->view('layouts/footer');
	}

	function hapus_pendaftar($id_senbud,$id_siswa){
		$this->crud->delete_pendaftar($id_senbud,$id_siswa);
		$this->message = "Data Pendaftar Berhasil Dihapus !";
        $this->session->set_flashdata('success',$this->message);            
        redirect('admin/senbud');

	}

	function validation(){
        $this->form_validation->set_rules('nama_senbud','','required');
        $this->form_validation->set_rules('penanggung_jawab','','required');
        $this->form_validation->set_rules('lokasi','','required');
        $this->form_validation->set_rules('hari','','required');
        $this->form_validation->set_rules('jam_mulai','','required');
 		$this->form_validation->set_rules('jam_selesai','','required');
	}
}