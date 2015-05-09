<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {
	function getSiswa()
	{
		$this->db->where('nis', $this->session->userdata('username'));
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		return $this->db->get('siswa')->row();
	}
	

}

/* End of file m_profile.php */
/* Location: ./application/modules/profile/models/m_profile.php */