<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_user extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_user');
		$this->load->model('Model_siswa');
		$this->load->model('Model_nilai');
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
}