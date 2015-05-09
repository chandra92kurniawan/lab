<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_role extends CI_Model {

	function getRole()
	{
		return $this->db->get('adm_role')->result();
	}
	function update($id,$data)
	{
		$this->db->where('id_role', $id);
		$this->db->update('adm_role', $data);
	}
	function hapus($id)
	{
		$this->db->where('id_role', $id);
		$this->db->delete('adm_role');
	}
}

/* End of file m_role.php */
/* Location: ./application/modules/role/models/m_role.php */