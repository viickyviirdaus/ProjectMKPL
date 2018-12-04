<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_kelas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_kelas');
		$this->load->model('Model_mapel');
		$this->load->model('Model_siswa');
		$this->load->model('Model_waliKelas');
		$this->load->library('session');
	}

	public function tampilKelas(){
		$data = $this->Model_kelas->tampilKelas();
		$param = array(
			'data' 	=> $data,
		);
		$this->load->view('headerAdmin');
		$this->load->view('AKelas', $param);
		$this->load->view('footer');
	}

	public function ambilDataKelas($id,$ket){
		if ($ket == 'dataKelas') {
			$data = $this->Model_kelas->ambilDataKelas($id);
			$param = array(
				'data' 			=> $data,
				'wali_kelas'	=> $this->Model_waliKelas->ambilWaliKelasKosong($id),
			);
			$this->load->view('headerAdmin');
			$this->load->view('APerbaruiKelas', $param);
			$this->load->view('footer');
		} elseif ($ket == 'dataSiswa') {
			$siswa = $this->Model_kelas->ambilDataSiswaDalamKelas($id);
			$kelas = $this->Model_kelas->ambilDataKelas($id);
			$param = array(
				'keberadaan'	=> true,
				'id_kelas' 		=> $id,
				'nama_kelas'	=> $kelas->nama_kelas,
				'siswa'			=> $siswa,
				'tahun_ajaran' 	=> $kelas->tahun_ajaran
			);
			$this->load->view('headerAdmin');
			$this->load->view('APerbaruiSiswaDalamKelas', $param);
			$this->load->view('footer');
		} elseif ($ket == 'dataMapel') {			
			$mapel = $this->Model_kelas->ambilDataMapelDalamKelas($id);
			$kelas = $this->Model_kelas->ambilDataKelas($id);
			$param = array(
				'keberadaan'	=> true,
				'id_kelas'		=> $id,
				'nama_kelas'	=> $kelas->nama_kelas,
				'mapel'			=> $mapel,
			);
			$this->load->view('headerAdmin');
			$this->load->view('APerbaruiMapelDalamKelas', $param);
			$this->load->view('footer');
		}
	}

	public function ubahDataKelas(){
		$tabel = 'kelas';
		$id_kelas = $this->input->post('id');
		$data = array(
			'nama_kelas'	=> $this->input->post('nama'),
			'ruang_kelas'	=> $this->input->post('ruang'),
			'tahun_ajaran'	=> $this->input->post('tahun'),
		);
		$this->Model_kelas->ubahDataKelas($id_kelas, $data, $tabel);

		$this->Model_waliKelas->ubahDataKelasWaliKelas($this->input->post('id_wali_kelas'), $id_kelas);
		
		$data = $this->Model_kelas->tampilKelas();
		$param = array(
			'data' 	=> $data,
		);
		$this->load->view('headerAdmin');
		$this->load->view('AKelas', $param);
		$this->load->view('footer');
	}

	public function tambahKelas(){
		$tabel = 'kelas';
		$data = array(
			'nama_kelas'	=> $this->input->post('nama'),
			'ruang_kelas'	=> $this->input->post('ruang'),
			'tahun_ajaran'	=> $this->input->post('tahun'),
		);
		$this->Model_kelas->tambahKelas($data, $tabel);

		$data = $this->Model_kelas->tampilKelas();
		$param = array(
			'data' 	=> $data,
		);
		$this->load->view('headerAdmin');
		$this->load->view('AKelas', $param);
		$this->load->view('footer');
	}
	public function tambahSiswaDalamKelas(){
		$tabel = 'anggota_kelas';
		$id_kelas = $this->input->post('id');
		$kelas = $this->Model_kelas->ambilDataKelas($id_kelas);
		$siswa = $this->Model_siswa->cekDataSiswa($this->input->post('nis'),$kelas->tahun_ajaran);
		if ($siswa != false) {
			$data = array(
				'id_kelas' 		=> $id_kelas,
				'id_siswa'		=> $siswa->id_siswa,
				'tahun_ajaran' 	=> $kelas->tahun_ajaran
			);
			$this->Model_kelas->tambahSiswaDalamKelas($siswa->id_siswa, $id_kelas, $kelas->tahun_ajaran);
			$this->ambilDataKelas($id_kelas,'dataSiswa');
		} else if ($siswa == false) {
			$siswa = $this->Model_kelas->ambilDataSiswaDalamKelas($id_kelas);
			$param = array(
				'keberadaan'	=> false,
				'id_kelas' 		=> $id_kelas,
				'nama_kelas' 	=> $kelas->nama_kelas,
				'siswa'			=> $siswa,
				'tahun_ajaran' 	=> $kelas->tahun_ajaran
			);
			$this->load->view('headerAdmin');
			$this->load->view('APerbaruiSiswaDalamKelas', $param);
			$this->load->view('footer');
		}
	}

	public function hapusSiswaDalamKelas($id_siswa,$id_kelas,$tahun_ajaran){
		$this->Model_kelas->hapusSiswaDalamKelas($id_kelas, $id_siswa, $tahun_ajaran);
		$this->ambilDataKelas($id_kelas,'dataSiswa');
	}

	public function tambahMapelDalamKelas(){
		$tabel = 'detail_mata_pelajaran';
		$id_kelas = $this->input->post('id');
		$mapel = $this->Model_mapel->cekDataMapel($this->input->post('mapel'), $id_kelas);
		if ($mapel != false) {
			$data = array(
				'id_kelas' 				=> $id_kelas,
				'id_mata_pelajaran'		=> $mapel->id_mata_pelajaran
			);
			$this->Model_kelas->tambahMapelDalamKelas($data, $tabel);
			$this->ambilDataKelas($id_kelas,'dataMapel');
		} else if ($mapel == false) {
			$mapel = $this->Model_kelas->ambilDataMapelDalamKelas($id_kelas);
			$kelas = $this->Model_kelas->ambilDataKelas($id_kelas);
			$param = array(
				'keberadaan'	=> false,
				'id_kelas' 		=> $id_kelas,
				'nama_kelas'	=> $kelas->nama_kelas,
				'mapel'			=> $mapel,
			);
			$this->load->view('headerAdmin');
			$this->load->view('APerbaruiMapelDalamKelas', $param);
			$this->load->view('footer');
		}
	}

	public function hapusMapelDalamKelas($id_mata_pelajaran,$id_kelas){
		$tabel = 'detail_mata_pelajaran';
		$this->Model_kelas->hapusMapelDalamKelas($id_kelas, $id_mata_pelajaran, $tabel);
		$this->ambilDataKelas($id_kelas,'dataMapel');
	}
}