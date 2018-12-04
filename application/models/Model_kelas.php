<?php
class Model_kelas extends CI_Model{

	function tampilKelas(){
		$query = $this->db->query("select * from kelas");
		return $query->result();
	}

	function ambilDataKelas($id){
		$query = $this->db->query("select * from kelas where id_kelas = '$id'");
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	function ambilDataSiswaDalamKelas($id){
		$query = $this->db->query("select * from siswa join anggota_kelas on siswa.id_siswa = anggota_kelas.id_siswa join kelas on kelas.id_kelas = anggota_kelas.id_kelas where kelas.id_kelas = '$id'");
		return $query->result();
	}

	function ambilDataMapelDalamKelas($id){
		$query = $this->db->query("select * from mata_pelajaran join detail_mata_pelajaran on mata_pelajaran.id_mata_pelajaran = detail_mata_pelajaran.id_mata_pelajaran join kelas on kelas.id_kelas = detail_mata_pelajaran.id_kelas where kelas.id_kelas = '$id'");
		return $query->result();
	}

	function ubahDataKelas($id, $data, $tabel){
		$this->db->where('id_kelas', $id);
		$this->db->update($tabel, $data);
	}

	
}
