<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_guru extends CI_Model {
	function getList()
	{
		$this->db->order_by('nama_guru', 'asc');
		$this->db->join('user', 'user.username=guru.nik and user.status=1 and id_role=3');
		return $this->db->get('guru')->result();
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

/* End of file m_guru.php */
/* Location: ./application/modules/guru/models/m_guru.php */