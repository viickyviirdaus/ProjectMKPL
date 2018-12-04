<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_siswa extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_siswa');
		$this->load->library('session');
	}

	public function tampilSiswaAktif(){
		$data = $this->Model_siswa->tampilSiswaAktif();
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('ASiswaAktif', $param);
		$this->load->view('footer');
	}

	public function tampilSiswa($idKelas){
		$data = $this->Model_siswa->dataSiswa($idKelas);
		$param = array(
			'data' 	=> $data,
			'idKelas' => $idKelas,
			'data_login' =>  $this->session->userdata('data_login'),
		);

		$this->load->view('headerWali');
		$this->load->view('WKDaftarSiswa', $param);
		$this->load->view('footer');
	}

	public function tampilSiswaTidakAktif(){
		$data = $this->Model_siswa->tampilSiswaTidakAktif();
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('ASiswaTidakAktif', $param);
		$this->load->view('footer');
	}
	public function nonaktifkanAkunSiswa($id){
		$this->Model_siswa->nonaktifkanAkunSiswa($id);

		$data = $this->Model_siswa->tampilSiswaAktif();
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('ASiswaAktif', $param);
		$this->load->view('footer');
	}

	public function ambilDataSiswa($nis){
		$data = $this->Model_siswa->ambilDataSiswa($nis);
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('ABiodataSiswa', $param);
		$this->load->view('footer');
	}

	public function ubahDataSiswa(){ 

		$config['upload_path'] = './uploads/';
		$config['file_name']   = 'foto';
		$config['allowed_types']  = 'jpeg|gif|jpg|png';
 
		$this->load->library('upload', $config);

		$file_name = "";

		$this->upload->initialize($config);

		if ( $this->upload->do_upload('avatar')){
			$data = $this->upload->data();
			$file_name = $data['file_name'];
		}else{
			var_dump($this->upload->display_errors());
		}

		$tabel = 'siswa';
		
		$id = $this->input->post('id');

		$data = array(
			'nama_siswa'		=> $this->input->post('nama'),
			'nis'				=> $this->input->post('nis'),
			'nisn'				=> $this->input->post('nisn'),
			'jenis_kelamin'		=> $this->input->post('jk'),
			'password'			=> md5($this->input->post('password')),
			'foto'				=> $file_name
		);

		$this->Model_siswa->ubahDataSiswa($id, $data, $tabel);

		$data = $this->Model_siswa->tampilSiswaAktif();
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('ASiswaAktif', $param);
		$this->load->view('footer');
	}

	public function tambahAkunSiswa(){
		$config['upload_path'] = './uploads/';
		$config['file_name']   = $this->input->post('nis');
		$config['allowed_types']  = 'jpeg|gif|jpg|png';
 
		$this->load->library('upload', $config);

		$file_name = "";

		$this->upload->initialize($config);

		if ( $this->upload->do_upload('avatar')){
			$data = $this->upload->data();
			$file_name = $data['file_name'];
		}else{
			var_dump($this->upload->display_errors());
		}

		$tabel = 'siswa';

		$data = array(
			'nama_siswa'		=> $this->input->post('nama'),
			'nis'				=> $this->input->post('nis'),
			'nisn'				=> $this->input->post('nisn'),
			'jenis_kelamin'		=> $this->input->post('jk'),
			'password'			=> md5($this->input->post('psw')),
			'foto'				=> $file_name,
			'status'			=> 'aktif'
		);
		$this->Model_siswa->tambahAkunSiswa($data, $tabel);
		$param = array(
			'buatAkun'		=> "ya",
		);
		$this->load->view('headerAdmin');
		$this->load->view('dashboardAdmin', $param);
		$this->load->view('footer');
	}
}	