<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_role');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}
	}
	public function index()
	{
		$data['role']=$this->m_role->getRole();
		$this->load->view('page_index',$data);
	}
	function add()
	{
		$this->db->insert('adm_role', array('nama_role'=>$this->input->post('nama')));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Role baru berhasil ditambahkan</strong> .</div>");
		redirect("role");
	}
	function edit()
	{
		$this->m_role->update($this->input->post('id'), array('nama_role'=>$this->input->post('nama')));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Role berhasil diubah</strong> .</div>");
		redirect("role");
	}
	function hapus($id)
	{
		$this->m_role->hapus($id);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Role berhasil dihapus</strong> .</div>");
		redirect("role");
	}
}

/* End of file role.php */
/* Location: ./application/modules/role/controllers/role.php */