<?php 
class Model_waliKelas extends CI_Model{
	
	function tampilWaliKelasAktif(){
		$query = $this->db->query("select * from wali_kelas left join kelas on wali_kelas.id_kelas = kelas.id_kelas where wali_kelas.status = 'aktif'");
		return $query->result();
	}

	function ambilWaliKelasKosong($id_kelas){
		$query = $this->db->query("select * from wali_kelas where id_kelas is null and status = 'aktif' or id_kelas = '$id_kelas' and status = 'aktif'");
		return $query->result();
	}

	function tampilWaliKelasTidakAktif(){
		$query = $this->db->query("select * from wali_kelas where status = 'nonaktif'");
		return $query->result();
	}

	function nonaktifkanAkunWaliKelas($id){
		$this->db->query("update wali_kelas set status = 'nonaktif' where id_wali_kelas = $id");
	}
}