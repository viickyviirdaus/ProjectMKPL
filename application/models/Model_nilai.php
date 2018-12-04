<?php 

Class Model_nilai extends CI_Model
{

	public function tampilSemuaNilai($id, $idKelas){ //ganti di sequence menjadi idKelas 
		$query = $this->db->query("select * from nilai join mata_pelajaran on nilai.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran where nilai.id_siswa = $id and nilai.id_kelas = $idKelas");
		return $query->result();
	}

	public function kelasSiswa($id){
		$query = $this->db->query("select * from nilai where nilai.id_siswa = $id");
		return $query->result();
	}

	public function tampilNilaiSiswa($id, $idKelas, $mataPelajaran){ //ganti di sequence menjadi idKelas 
		$query = $this->db->query("select * from nilai join mata_pelajaran on nilai.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran where nilai.id_siswa = $id and nilai.id_kelas = $idKelas and nilai.id_mata_pelajaran = $mataPelajaran");
		return $query->result();
	}

	public function simpanNilaiSiswa($data, $idNilai, $tabel){
		$this->db->where('id_nilai', $idNilai);
		$this->db->update($tabel,$data);
	}

	public function ubahNilaiSiswa($data, $idNilai, $tabel){
		$this->db->where('id_nilai', $idNilai);
		$this->db->update($tabel,$data);
	}

	public function lihatNilaiRapor($id, $idKelas){
		$query = $this->db->query("select * from nilai join mata_pelajaran on nilai.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran join siswa on nilai.id_siswa = siswa.id_siswa where nilai.id_siswa = $id and nilai.id_kelas = $idKelas");	
		return $query->result();
	}

	public function simpanCatatan($data, $idSiswa, $idKelas, $tabel){
		$this->db->where('id_siswa', $idSiswa);
		// $this->db->where('id_kelas', $idKelas);
		$this->db->update($tabel,$data);
	}
}

 ?>