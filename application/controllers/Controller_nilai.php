<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_nilai extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_nilai');
		$this->load->library('session');
	}

	public function tampilSemuaNilai($id, $idKelas){
		$data = $this->Model_nilai->tampilSemuaNilai($id,$idKelas);
		$param = array(
			'data' 	=> $data,
			'idSiswa' => $id,
			'idKelas' => $idKelas,
			'data_login' =>  $this->session->userdata(),
		);
		// var_dump($param);
		$this->load->view('headerWali');
		$this->load->view('WKDaftarNilai', $param);
		$this->load->view('footer');
	}

	public function tampilNilaiSiswa($key,$id, $idKelas, $mataPelajaran){
		$data = $this->Model_nilai->tampilNilaiSiswa($id, $idKelas, $mataPelajaran);
		$param = array(
			'data' 	=> $data,
			'idKelas' => $idKelas,
			'idSiswa' => $id,
			'key' => $key,
		);
		// var_dump($param);
		$this->load->view('headerWali');
		$this->load->view('WKMasukEditNilai', $param);
		$this->load->view('footer');
	}

	public function simpanNilaiSiswa(){
		$tabel = 'nilai';
		$tugas1		= $this->input->post('tugas1');
		$tugas2		= $this->input->post('tugas2');
		$uts		= $this->input->post('uts');
		$uas		= $this->input->post('uas');
		$tugas1 = (int)str_replace("",'' , $tugas1);
		$tugas2 = (int)str_replace("",'' , $tugas2);
		$uts = (int)str_replace("",'' , $uts);
		$uas = (int)str_replace("",'' , $uas);
		$nilai_akhir = ($tugas1+$tugas2+$uts+$uas)/4;


		$dataSimpan = array(
			'tugas1'		=> $tugas1,
			'tugas2'		=> $tugas2,
			'uts'			=> $uts,
			'uas'			=> $uas,
			'nilai_akhir'	=> $nilai_akhir,
		);

		$id_siswa = $this->input->post('idSiswa');
		$idKelas = $this->input->post('idKelas');
		$idNilai = $this->input->post('idNilai');

		$this->Model_nilai->simpanNilaiSiswa($dataSimpan, $idNilai, $tabel);

		$data = $this->Model_nilai->tampilSemuaNilai($id_siswa,$idKelas);
		$param = array(
			'data' 	=> $data,
			'idSiswa' => $id_siswa,
			'idKelas' => $idKelas,
			'data_login' =>  $this->session->userdata(),

		);
		$this->load->view('headerWali');
		$this->load->view('WKDaftarNilai', $param);
		$this->load->view('footer');
	}

	public function ubahNilaiSiswa(){
		$tabel = 'nilai';
		$tugas1		= $this->input->post('tugas1');
		$tugas2		= $this->input->post('tugas2');
		$uts		= $this->input->post('uts');
		$uas		= $this->input->post('uas');
		$tugas1 = (int)str_replace("",'' , $tugas1);
		$tugas2 = (int)str_replace("",'' , $tugas2);
		$uts = (int)str_replace("",'' , $uts);
		$uas = (int)str_replace("",'' , $uas);
		$nilai_akhir = ($tugas1+$tugas2+$uts+$uas)/4;
		$dataUbah = array(
			'tugas1'		=> $tugas1,
			'tugas2'		=> $tugas2,
			'uts'			=> $uts,
			'uas'			=> $uas,
			'nilai_akhir'	=> $nilai_akhir,
		);
		// var_dump($data);
		$id_siswa = $this->input->post('idSiswa');
		$idKelas = $this->input->post('idKelas');
		$idNilai = $this->input->post('idNilai');
		// var_dump($id_siswa);
		$this->Model_nilai->ubahNilaiSiswa($dataUbah, $idNilai, $tabel);

		$data = $this->Model_nilai->tampilSemuaNilai($id_siswa,$idKelas);
		$param = array(
			'data' 	=> $data,
			'idSiswa' => $id_siswa,
			'idKelas' => $idKelas,
			'data_login' =>  $this->session->userdata(),

		);
		$this->load->view('headerWali');
		$this->load->view('WKDaftarNilai', $param);
		$this->load->view('footer');
	}

	public function tampilNilaiHarian($id, $idKelas){
		$data = $this->Model_nilai->tampilSemuaNilai($id,$idKelas);
		$param = array(
			'data' 	=> $data,
			'idSiswa' => $id,
			'idKelas' => $idKelas,
			'data_login' =>  $this->session->userdata(),
		);
		// var_dump($param);
		$this->load->view('headerWali');
		$this->load->view('WMNilaiHarian', $param);
		$this->load->view('footer');
	}

}

 ?>
