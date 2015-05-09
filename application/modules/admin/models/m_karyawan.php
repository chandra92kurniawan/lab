<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_karyawan extends CI_Model {

	function getList()
	{
		$this->db->order_by('nama_admin', 'asc');
		$this->db->join('user', 'user.username=administrasi.nik and user.status=1 and id_role=2');
		return $this->db->get('administrasi')->result();
	}
	function getKaryawan()
	{
		$this->db->join('program', 'karyawan.id_program=program.id_program');
		$this->db->join('user', 'karyawan.username=user.username');
		$this->db->join('adm_role', 'adm_role.id_role=user.id_role');
		return $this->db->get('karyawan')->result();
	}
	function cek($nik)
	{
		$this->db->where('username', $nik);
		return $this->db->get('user')->num_rows();
	}
	function update($tbl,$data,$nik,$f)
	{
		$this->db->where($f, $nik);
		$this->db->update($tbl, $data);
	}
	function hapus($data,$nik)
	{
		$this->db->where('username', $nik);
		$this->db->update('user', $data);
	}
}

/* End of file m_karyawan.php */
/* Location: ./application/modules/karyawan/models/m_karyawan.php */