<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_guru');
		$this->load->helper('string');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}
	}
	function gu(){
		$this->load->view('page_jqgrid');
	}
	public function index()
	{
		$data['list']=$this->m_guru->getList();
		$this->load->view('page_index', $data);			
	}
	function add()
	{
		$salt= random_string('alnum', 5);
		$satu=do_hash($salt);
		//$p=do_hash($this->input->post('password'));//sha1
		$p2=do_hash($this->input->post('password'),'md5');
		$pass=$satu.".".$p2;
		$data=array("nik"=>$this->input->post('nik'),
					"nama_guru"=>$this->input->post('nama_karyawan'),
					"alamat"=>$this->input->post('alamat'),
					"no_hp_guru"=>$this->input->post('no_hp'),
					"jenis_kelamin"=>$this->input->post('jk')
					);
		$this->db->insert('guru', $data);
		$dat=array("username"=>$this->input->post('nik'),
					"nama_user"=>$this->input->post('nama_karyawan'),
					"password"=>$pass,
					"status"=>1,
					"salt"=>$salt,
					"id_role"=>3);
		$this->db->insert('user', $dat);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Guru baru berhasil ditambahkan</strong> .</div>");
		redirect("guru");
	}
	function edit()
	{
		$data=array(				
					"nama_guru"=>$this->input->post('nama_karyawan'),
					"alamat"=>$this->input->post('alamat'),
					"no_hp_guru"=>$this->input->post('no_hp'),
					"jenis_kelamin"=>$this->input->post('jk')
					);
		$this->m_guru->update('guru',$data,$this->input->post('nik'),'nik');
		
		$dat=array(
					"nama_user"=>$this->input->post('nama_karyawan'),
					
					);
		$this->m_guru->update('user',$dat,$this->input->post('nik'),'username');
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Admin berhasil diubah</strong> .</div>");
		redirect("guru");
	}
	function hapus($nik)
	{
		$data=array('status'=>'0');
		$this->m_guru->hapus($data,$nik);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Guru berhasil dihapus</strong> .</div>");
		redirect("guru");
	}
}

/* End of file guru.php */
/* Location: ./application/modules/guru/controllers/guru.php */