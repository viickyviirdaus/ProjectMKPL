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
}