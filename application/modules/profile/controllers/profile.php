<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_profile');
	}
	public function index()
	{
		$data['siswa']=$this->m_profile->getSiswa();
		$this->load->view('page_index',$data);
	}
	function update_siswa()
	{
		$data=array('no_orang_tua'=>$this->input->post('nomor_hp'),
					'nama_orang_tua'=>$this->input->post('nama_orang_tua'),
					'alamat'=>$this->input->post('alamat'));
		$this->db->where('nis', $this->session->userdata('username'));
		$this->db->update('siswa', $data);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Berhasil diupdate</strong> .</div>");
		redirect('dashboard');
	}
}

/* End of file profile.php */
/* Location: ./application/modules/profile/controllers/profile.php */