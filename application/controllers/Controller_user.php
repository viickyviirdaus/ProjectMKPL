<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_user extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_user');
		$this->load->model('Model_siswa');
		$this->load->library('session');
	}

	public function login($status){
		if ($status == 'admin') {
			$nip = $this->input->post('nip');
			$password = md5($this->input->post('psw'));
			$where = array(
				'nip' 		=> $nip,
				'password' 	=> $password
				);
			$data = $this->Model_user->loginAdmin("admin",$where)->result();
			$cek = $this->Model_user->loginAdmin("admin",$where)->num_rows();
			if($cek == 1){
				$data_session = array(
					'nama'		=> $data[0]->nama,
					'id_admin' => $data[0]->id_admin,
					'status' 	=> "admin"
				);
				$this->session->set_userdata($data_session);
				$param = array(
					'buatAkun'		=> "tidak",
				);
				$this->load->view('headerAdmin');
				$this->load->view('dashboardAdmin',$param);
				$this->load->view('footer');
			}else{
				$param = array(
					'login' 	=> 'fail',
				);
				$this->load->view('loginAdmin', $param);
			}
		}
	}

	public function logout(){
		if ($this->session->userdata('status') == 'admin') {
			$this->session->sess_destroy();
			$param = array(
				'login' 	=> 'nofail',
			);
			$this->load->view('loginAdmin', $param);
		} else {
			var_dump($this->session->userdata('data_login'));
			var_dump("Login sebagai siapa hayoo ???");
		}
	}

	public function tambahAkunAdmin(){
		$tabel = 'admin';
		$data = array(
			'nama'		=> $this->input->post('nama'),
			'nip'		=> $this->input->post('nip'),
			'password'	=> md5($this->input->post('psw')),
		);
		$this->Model_user->tambahAkunAdmin($data, $tabel);
		$param = array(
				'buatAkun' 	=> 'ya'
			);
		$this->load->view('headerAdmin');
		$this->load->view('dashboardAdmin', $param);
		$this->load->view('footer');
	}
}