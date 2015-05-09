<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_karyawan');
		$this->load->helper('string');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}
	}
	public function index()
	{
		$data['list']=$this->m_karyawan->getList();
		$this->load->view('page_index', $data);
	}
	function cek($nik){
		$cek=$this->m_karyawan->cek($nik);
		echo $cek;
	}
	function add()
	{
		$salt= random_string('alnum', 5);
		$satu=do_hash($salt);
		//$p=do_hash($this->input->post('password'));//sha1
		$p2=do_hash($this->input->post('password'),'md5');
		$pass=$satu.".".$p2;
		$data=array("nik"=>$this->input->post('nik'),
					"nama_admin"=>$this->input->post('nama_karyawan'),
					"alamat"=>$this->input->post('alamat'),
					"no_hp"=>$this->input->post('no_hp'),
					"jenis_kelamin"=>$this->input->post('jk')
					);
		$this->db->insert('administrasi', $data);
		$dat=array("username"=>$this->input->post('nik'),
					"nama_user"=>$this->input->post('nama_karyawan'),
					"password"=>$pass,
					"salt"=>$salt,
					"status"=>1,
					"id_role"=>2);
		$this->db->insert('user', $dat);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Admin baru berhasil ditambahkan</strong> .</div>");
		redirect("admin");
	}
	function edit()
	{
		$data=array(				
					"nama_admin"=>$this->input->post('nama_karyawan'),
					"alamat"=>$this->input->post('alamat'),
					"no_hp"=>$this->input->post('no_hp'),
					"jenis_kelamin"=>$this->input->post('jk')
					);
		$this->m_karyawan->update('administrasi',$data,$this->input->post('nik'),'nik');
		
		$dat=array(
					"nama_user"=>$this->input->post('nama_karyawan'),
					
					);
		$this->m_karyawan->update('user',$dat,$this->input->post('nik'),'username');
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Admin berhasil diubah</strong> .</div>");
		redirect("admin");
	}
	function hapus($nik)
	{
		$data=array('status'=>'0');
		$this->m_karyawan->hapus($data,$nik);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Admin berhasil dihapus</strong> .</div>");
		redirect("admin");
	}
}

/* End of file karyawan.php */
/* Location: ./application/modules/karyawan/controllers/karyawan.php */