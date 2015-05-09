<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rekap extends CI_Model {

	function getJadwal()
	{
		$this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran=jadwal.id_mata_pelajaran');
		$this->db->join('kelas', 'kelas.id_kelas=jadwal.id_kelas');
		if($this->session->userdata('id_role')!=1 and $this->session->userdata('id_role')!=2){
			$this->db->where('nik', $this->session->userdata('username'));
		}
		$this->db->select('jadwal.id_jadwal,mata_pelajaran.nama_pelajaran,kelas.tingkat_kelas,kelas.jurusan,kelas.grup_kelas');
		return $this->db->get('jadwal')->result();
	}
	function getAbsen($id_jadwal)
	{
		$query="SELECT * FROM `absensi` where id_jadwal_dtl in (select id_jadwal_dtl from jadwal_dtl where id_jadwal='$id_jadwal' );";
		return $this->db->query($query)->result();
	}
	function jadwal($id_jadwal)
	{
		$this->db->where('id_jadwal', $id_jadwal);
		$data=$this->db->get('jadwal')->row();
		//$this->siswa($data->id_kelas);

		$this->db->where('id_kelas', $data->id_kelas);
		$this->db->order_by('nis', 'asc');
		return $this->db->get('siswa')->result();
	}
	function getStatus($nis,$id_absensi)
	{
		$this->db->where('nis', $nis);
		$this->db->where('id_absensi', $id_absensi);
		return $this->db->get('absensi_dtl')->row();
	}
}

/* End of file rekap.php */
/* Location: ./application/modules/rekap_presensi/models/rekap.php */