<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_rapor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_nilai');
		$this->load->library('session');
	}

	public function lihatNilaiRapor($id, $idKelas){
		$data = $this->Model_nilai->lihatNilaiRapor($id, $idKelas);
		$catatan = $data[0]->catatan;
		$ratarata =0;
		$pembagi = 0;
		foreach ($data as $nilai) {
			$ratarata += $nilai->nilai_akhir;
			$pembagi++;
		}
		$ratarata = $ratarata/$pembagi;
		var_dump($ratarata);
		$param = array(
			'data' 	=> $data,
			'idKelas' => $idKelas,
			'idSiswa' => $id,
			'catatan' => $catatan,
			'ratarata' => $ratarata,
		);
		$this->load->view('headerWali');
		$this->load->view('WKRapor', $param);
		$this->load->view('footer');
	}

	public function tampilRapor($id, $idKelas){
		$data = $this->Model_nilai->lihatNilaiRapor($id, $idKelas);
		$catatan = $data[0]->catatan;
		$ratarata =0;
		$pembagi = 0;
		foreach ($data as $nilai) {
			$ratarata += $nilai->nilai_akhir;
			$pembagi++;
		}
		$ratarata = $ratarata/$pembagi;
		var_dump($ratarata);
		$param = array(
			'data' 	=> $data,
			'idKelas' => $idKelas,
			'idSiswa' => $id,
			'catatan' => $catatan,
			'ratarata' => $ratarata,
		);
		$this->load->view('headerWali');
		$this->load->view('WMRapor', $param);
		$this->load->view('footer');
	}

	public function simpanCatatan(){
		$id_kelas = $this->input->post('idKelas');
		$id_siswa = $this->input->post('idSiswa');
		$tabel = 'nilai';
		$dataSimpan = array(
			'catatan'		=> $this->input->post('catatan'),
		);
		var_dump($dataSimpan);

		$data = $this->Model_nilai->simpanCatatan($dataSimpan, $id_siswa, $id_kelas,$tabel);


		$data = $this->Model_nilai->lihatNilaiRapor($id_siswa, $id_kelas);
		$ratarata =0;
		foreach ($data as $nilai) {
			$ratarata += $nilai->nilai_akhir;
		}
		$ratarata = $ratarata/2;
		$catatan = $data[0]->catatan;
		$param = array(
			'data' 	=> $data,
			'idKelas' => $id_kelas,
			'idSiswa' => $id_siswa,
			'catatan' => $catatan,
			'ratarata' => $ratarata,
		);
		$this->load->view('headerWali');
		$this->load->view('WKRapor', $param);
		$this->load->view('footer');


	}
}
