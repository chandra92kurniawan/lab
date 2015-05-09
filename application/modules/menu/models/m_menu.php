<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_menu extends CI_Model {

	function getHead()
	{
		$this->db->where('sub', '0');
		return $this->db->get('adm_menu')->result();
	}
	function getMenu()
	{
		$this->db->order_by('id_menu', 'asc');
		$this->db->order_by('sub', 'asc');
		return $this->db->get('adm_menu')->result();
	}
	function update($data,$id)
	{
		$this->db->where('id_menu', $id);
		$this->db->update('adm_menu', $data);	
	}
	function delete($id)
	{
		$this->db->where('id_menu', $id);
		$this->db->delete('adm_menu');
	}
}

/* End of file m_menu.php */
/* Location: ./application/modules/menu/models/m_menu.php */