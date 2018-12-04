<?php 
class Model_mapel extends CI_Model{
	
	function tampilMapel(){
		$query = $this->db->query("select * from mata_pelajaran");
		return $query->result();
	}

	function ambilDataMapel($id){
		$query = $this->db->query("select * from mata_pelajaran where id_mata_pelajaran = '$id'");
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

}