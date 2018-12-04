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

	function tambahKelas($data, $tabel){
		$this->db->insert($tabel,$data);
	}

	function tambahSiswaDalamKelas($id_siswa, $id_kelas, $tahun_ajaran){
		$this->db->query("insert into anggota_kelas (id_siswa, id_kelas, tahun_ajaran) values ('$id_siswa', '$id_kelas', '$tahun_ajaran')");

		$query = $this->db->query("select * from mata_pelajaran join detail_mata_pelajaran on mata_pelajaran.id_mata_pelajaran = detail_mata_pelajaran.id_mata_pelajaran join kelas on kelas.id_kelas = detail_mata_pelajaran.id_kelas where kelas.id_kelas = '$id_kelas'");

		$jmlMapel = $query->num_rows();

		for ($i=0; $i < $jmlMapel ; $i++) {
			$dataRow = $query->row_array($i);
			$id_mata_pelajaran = $dataRow['id_mata_pelajaran'];
			$this->db->query("insert into nilai (id_siswa, id_kelas, id_mata_pelajaran, tahun_ajaran) values ('$id_siswa', '$id_kelas', '$id_mata_pelajaran', '$tahun_ajaran')");
		}
	}

	function tambahMapelDalamKelas($data, $tabel){
		$this->db->insert($tabel,$data);
	}

	function hapusSiswaDalamKelas($id_kelas, $id_siswa, $tahun_ajaran){
		$this->db->query("delete from anggota_kelas where id_kelas = '$id_kelas' and id_siswa = '$id_siswa'");

		$this->db->query("delete from nilai where id_kelas = '$id_kelas' and id_siswa = '$id_siswa' and tahun_ajaran = '$tahun_ajaran'");
	}

	function hapusMapelDalamKelas($id_kelas, $id_mata_pelajaran, $tabel){
		$this->db->query("delete from $tabel where id_kelas = '$id_kelas' and id_mata_pelajaran = '$id_mata_pelajaran'");
	}
}