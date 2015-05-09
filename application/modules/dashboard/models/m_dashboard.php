<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	function cekStatus()
	{
		$nis=$this->session->userdata('username');
		$cek='';
		$this->db->where('nis', $nis);
		$dt=$this->db->get('siswa')->row();
		if($dt->no_orang_tua=='' or $dt->nama_orang_tua=='' or $dt->alamat==''){
			$cek='1';
		}else{
			$cek='0';
		}
		return $cek;
	}
	function getSiswaByNis()
	{
		$this->db->where('nis', $this->session->userdata('username'));
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		return $this->db->get('siswa')->row();
	}
}

/* End of file m_dashboard.php */
/* Location: ./application/modules/dashboard/models/m_dashboard.php */