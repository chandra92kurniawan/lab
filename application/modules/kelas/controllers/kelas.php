<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kelas');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}
	}
	public function index()
	{
		$data['list']=$this->m_kelas->getList();
		$this->load->view('page_index', $data);
	}
	function add()
	{
		$data=array("tingkat_kelas"=>$this->input->post('tingkat'),
					"jurusan"=>$this->input->post('jurusan'),
					"grup_kelas"=>$this->input->post('grup'));
		$this->db->insert('kelas', $data);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Kelas baru berhasil ditambahkan</strong> .</div>");
		redirect("kelas");
	}
	function edit()
	{
		$data=array("tingkat_kelas"=>$this->input->post('tingkat'),
					"jurusan"=>$this->input->post('jurusan'),
					"grup_kelas"=>$this->input->post('grup'));
		$this->m_kelas->update($data,$this->input->post('id_kelas'));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Kelas berhasil diubah</strong> .</div>");
		redirect("kelas");
	}
	function hapus($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->delete('kelas');
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Kelas berhasil dihapus</strong> .</div>");
		redirect("kelas");
	}
}

/* End of file kelas.php */
/* Location: ./application/modules/kelas/controllers/kelas.php */
