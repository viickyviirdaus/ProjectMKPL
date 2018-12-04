<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_waliKelas extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Model_waliKelas');
		$this->load->library('session');
	}

	public function tampilWaliKelasAktif(){
		$data = $this->Model_waliKelas->tampilWaliKelasAktif();
		$param = array(
			'data'		=> $data,
		);
		$this->load->view('headerAdmin');
		$this->load->view('AWaliKelasAktif', $param);
		$this->load->view('footer');
	}

	public function tampilWaliKelasTidakAktif(){
		$data = $this->Model_waliKelas->tampilWaliKelasTidakAktif();
		$param = array(
			'data'		=> $data,
		);
		$this->load->view('headerAdmin');
		$this->load->view('AWaliKelasTidakAktif', $param);
		$this->load->view('footer');
	}

	public function nonaktifkanAkunWaliKelas($id){
		$this->Model_waliKelas->nonaktifkanAkunWaliKelas($id);

		$data = $this->Model_waliKelas->tampilWaliKelasAktif();
		$param = array(
			'data'		=> $data,
		);
		$this->load->view('headerAdmin');
		$this->load->view('AWaliKelasAktif', $param);
		$this->load->view('footer');
	}
	public function ambilDataWaliKelas($id){
		$data = $this->Model_waliKelas->ambilDataWaliKelas($id);
		$param = array(
			'data'		=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('ABiodataWaliKelas', $param);
		$this->load->view('footer');
	}

	public function ubahDataWaliKelas(){
		$tabel = 'wali_kelas';

		$id = $this->input->post('id');

		$data = array(
			'nama'				=> $this->input->post('nama'),
			'nip'				=> $this->input->post('nip'),
			'password'			=> md5($this->input->post('password')),
		);

		$this->Model_waliKelas->ubahDataWaliKelas($id, $data, $tabel);

		$data = $this->Model_waliKelas->tampilWaliKelasAktif();
		$param = array(
			'data'		=> $data,
		);
		$this->load->view('headerAdmin');
		$this->load->view('AWaliKelasAktif', $param);
		$this->load->view('footer');
	}

	public function tambahAkunWaliKelas(){
		$tabel = 'wali_kelas';
		$data = array(
			'nama'		=> $this->input->post('nama'),
			'nip'		=> $this->input->post('nip'),
			'password'	=> md5($this->input->post('psw')),
			'status'	=> 'aktif'
		);

		$this->Model_waliKelas->tambahAkunWaliKelas($data, $tabel);
		$param = array(
			'buatAkun'		=> "ya",
		);
		$this->load->view('headerAdmin');
		$this->load->view('dashboardAdmin', $param);
		$this->load->view('footer');
	}
}
