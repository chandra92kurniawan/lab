<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	function cekuser($user)
	{
		$this->db->where('username', $user);
		return $this->db->get('user');
	}

}

/* End of file m_login.php */
/* Location: ./application/modules/login/models/m_login.php */