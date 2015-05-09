<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_siswa extends CI_Model {

	function getList($tingkat,$jurusan,$grup)
	{
		if(!empty($tingat))
		{
			$this->db->where('kelas.tingkat_kelas', $tingkat);
		}
		if(!empty($jurusan)){
			$this->db->where('kelas.jurusan', $jurusan);
		}
		if(!empty($grup))
		{
			$this->db->where('kelas.grup_kelas', $grup);
		}
		$this->db->where('status', '1');
		$this->db->order_by('nis', 'asc');
		$this->db->join('kelas', 'kelas.id_kelas=siswa.id_kelas');
		return $this->db->get('siswa')->result();
	}
	function getKelas()
	{
		$this->db->order_by('tingkat_kelas', 'asc');
		$this->db->order_by('jurusan', 'asc');
		$this->db->order_by('grup_kelas', 'asc');
		return $this->db->get('kelas')->result();
	}
	function cek($nik)
	{
		$this->db->where('nis', $nik);
		return $this->db->get('siswa')->num_rows();
	}
	function update($data,$nis)
	{
		$this->db->where('nis', $nis);
		$this->db->update('siswa', $data);
	}
}

/* End of file m_siswa.php */
/* Location: ./application/modules/siswa/models/m_siswa.php */