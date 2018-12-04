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