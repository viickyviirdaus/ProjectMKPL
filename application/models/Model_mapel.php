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

	function cekDataMapel($mapel, $id_kelas){
		$query = $this->db->query("select * from mata_pelajaran join detail_mata_pelajaran on mata_pelajaran.id_mata_pelajaran = detail_mata_pelajaran.id_mata_pelajaran where mata_pelajaran.nama_mata_pelajaran like '%$mapel%' and detail_mata_pelajaran.id_kelas = '$id_kelas'");
		$result = $query->result();
		if (count($result) > 0) {
			return false;
		} else if (count($result) == 0) {
			$query = $this->db->query("select * from mata_pelajaran where nama_mata_pelajaran like '%$mapel%'");
			$result = $query->result();
			return (count($result) > 0) ? $result[0] : false ;
		}
	}

	function ubahDataMapel($id, $data, $tabel){
		$this->db->where('id_mata_pelajaran', $id);
		$this->db->update($tabel, $data);
	}

	function tambahMapel($data, $tabel){
		$this->db->insert($tabel,$data);
	}

}
