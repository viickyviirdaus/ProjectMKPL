<?php 
class Model_user extends CI_Model{
	
	function loginAdmin($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function tambahAkunAdmin($data, $tabel){
		$this->db->insert($tabel,$data);
	}
}