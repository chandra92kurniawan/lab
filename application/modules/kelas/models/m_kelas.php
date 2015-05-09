<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kelas extends CI_Model {
	function getList()
	{
		$this->db->order_by('tingkat_kelas', 'asc');
		$this->db->order_by('jurusan', 'asc');
		$this->db->order_by('grup_kelas', 'asc');
		return $this->db->get('kelas')->result();
	}
	function update($data,$id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->update('kelas', $data);
	}

}

/* End of file m_kelas.php */
/* Location: ./application/modules/kelas/models/m_kelas.php */