<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_mapel extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_mapel');
		$this->load->library('session');
	}

	public function tampilMapel(){
		$data = $this->Model_mapel->tampilMapel();
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('AMataPelajaran', $param);
		$this->load->view('footer');
	}

	public function ambilDataMapel($id){
		$data = $this->Model_mapel->ambilDataMapel($id);
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('APerbaruiMataPelajaran', $param);
		$this->load->view('footer');
	}

}
