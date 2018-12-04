<?php 
class Model_siswa extends CI_Model{
	
	function tampilSiswaAktif(){
		$query = $this->db->query("select * from siswa left join anggota_kelas on siswa.id_siswa = anggota_kelas.id_siswa left join kelas on kelas.id_kelas = anggota_kelas.id_kelas where siswa.status = 'aktif'");
		return $query->result();
	}

	function tampilSiswaTidakAktif(){
		$query = $this->db->query("select * from siswa where status = 'nonaktif'");
		return $query->result();
	}

	function nonaktifkanAkunSiswa($id){
		$this->db->query("update siswa set status = 'nonaktif' where id_siswa = $id");
	}

	function ambilDataSiswa($nis){
		$query = $this->db->query("select * from siswa where nis = '$nis'");
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}
	function ubahDataSiswa($id, $data, $tabel){
		$this->db->where('id_siswa', $id);
		$this->db->update($tabel, $data);
	}

	function tambahAkunSiswa($data, $tabel){
		$this->db->insert($tabel,$data);
	}

	function cekDataSiswa($nis, $tahun_ajaran){
		$query = $this->db->query("select * from siswa join anggota_kelas on siswa.id_siswa = anggota_kelas.id_siswa where siswa.nis = '$nis' and anggota_kelas.tahun_ajaran = '$tahun_ajaran' and siswa.status = 'aktif'");
		$result = $query->result();
		if (count($result) > 0) {
			return false;
		} else if (count($result) == 0) {
			$query = $this->db->query("select * from siswa where nis = '$nis' and status = 'aktif'");
			$result = $query->result();
			return (count($result) > 0) ? $result[0] : false ;
		}
	}

	function dataSiswa($idKelas){
        $query = $this->db->query("select * from siswa join anggota_kelas on siswa.id_siswa = anggota_kelas.id_siswa where anggota_kelas.id_kelas = $idKelas ");
   		 return $query->result();
	}

}