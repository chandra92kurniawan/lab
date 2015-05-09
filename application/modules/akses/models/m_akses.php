<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_akses extends CI_Model {

	function getMenuHead($sub)
	{
		$this->db->where('sub', $sub);
		return $this->db->get('adm_menu')->result();
	}
	function cekAkses($ro,$id)
	{
		$this->db->where('id_menu', $id);
		$this->db->where('id_role', $ro);
		return $this->db->get('adm_akses');
	}
	function beri($num,$id,$role)
	{
		$this->db->where('id_menu', $id);
		$this->db->where('id_role', $role);
		$this->db->update('adm_akses', array('status'=>$num));
	}
}

/* End of file m_akses.php */
/* Location: ./application/modules/akses/models/m_akses.php */