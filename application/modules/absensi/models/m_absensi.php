<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_absensi extends CI_Model {
	function getList($date)
	{
		$this->db->where('hari_inggris', $date);
		$this->db->join('hari', 'hari.id_hari=jadwal_dtl.id_hari');
		$this->db->join('jadwal', 'jadwal.id_jadwal=jadwal_dtl.id_jadwal');
		$this->db->join('guru', 'guru.nik=jadwal.nik');
		$this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran=jadwal.id_mata_pelajaran');
		$this->db->join('kelas', 'kelas.id_kelas=jadwal.id_kelas');
		return $this->db->get('jadwal_dtl')->result();
	}
	function getIdAbsensi($id_jadwal,$date)
	{
		$this->db->where('id_jadwal_dtl', $id_jadwal);
		$this->db->where('tanggal', $date);
		return $this->db->get('absensi')->row();
	}
	function toDay($id_jadwal,$date)
	{
		$this->db->where('id_jadwal_dtl', $id_jadwal);
		$this->db->where('tanggal', $date);
		return $this->db->get('absensi');
	}
	function del()
	{
		$this->db->where('id_jadwal_dtl', '0');
		$this->db->delete('absensi');
	}
	function getJadwal($id_jadwal)
	{
		$this->db->where('id_jadwal_dtl', $id_jadwal);
		$this->db->join('jadwal', 'jadwal_dtl.id_jadwal=jadwal.id_jadwal');
		return $this->db->get('jadwal_dtl')->row();
	}
	function getSiswa($id_kelas)
	{
		$this->db->where('status', '1');
		$this->db->where('id_kelas',$id_kelas);
		$this->db->order_by('nis', 'asc');
		return $this->db->get('iswa')->result();
	}
	function getSiswaByJadwal($idAbsensi)
	{
		$this->db->where('id_absensi', $idAbsensi);
		$this->db->order_by('absensi_dtl.nis', 'asc');
		$this->db->join('siswa', 'siswa.nis=absensi_dtl.nis');
		return $this->db->get('absensi_dtl')->result();
	}
	function insert($into)
	{
		$this->db->insert('absensi', $into);
		return $this->db->insert_id();
	}
	function updateKeterangan($data,$id_absensi)
	{
		$this->db->where('id_absensi', $id_absensi);
		$this->db->update('absensi', $data);
	}
	function updateDtl($up,$siswa)
	{
		$this->db->where('id_absensi_dtl', $siswa);
		$this->db->update('absensi_dtl', $up);
	}
	function jadwalById($detail)
	{
		$this->db->join('hari', 'hari.id_hari=jadwal_dtl.id_hari');
		$this->db->join('jadwal', 'jadwal.id_jadwal=jadwal_dtl.id_jadwal');
		$this->db->join('kelas', 'kelas.id_kelas=jadwal.id_kelas');
		$this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran=jadwal.id_mata_pelajaran');
		$this->db->where('jadwal_dtl.id_jadwal_dtl', $detail);
		return $this->db->get('jadwal_dtl')->row();
	}
}

/* End of file m_absensi.php */
/* Location: ./application/modules/absensi/models/m_absensi.php */