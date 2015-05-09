<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nilai extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_nilai');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}
	}
	public function index()
	{
			$id_pelajaran=$this->M_nilai->dropdownpelajaran();
			foreach($id_pelajaran as $cihuy)
		{
			$c[$cihuy->id_mata_pelajaran]=$cihuy->id_mata_pelajaran;
		}
		$data['dt_pelajaran']=$c;
			
		$nik=$this->M_nilai->dropdownnik();
		foreach($nik as $unyu)
		{
			$p[$unyu->nik]=$unyu->nik;
		}
		$data['dt_nik']=$p;
		
		$data['list']=$this->M_nilai->tampil_data();
		$this->load->view('v_nilai', $data);
	}
	
	
	function tambah_data()
	{
	
		$data=array (
		
		'id_nilai' 			=>$this->input->post ('id_nilai'),
		'id_mata_pelajaran'	=>$this->input->post ('id_mata_pelajaran'),
		'tanggal'			=>$this->input->post ('tanggal'),
		'keterangan'		=>$this->input->post ('keterangan'),
		'nik'				=>$this->input->post ('nik')
		
		);
		$this->M_nilai->masukan_data($data);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data  berhasil ditambah</strong> .</div>");
		redirect ('nilai/index');
	}
	
	
	function hapus($id){
	//$id=>$this->input->post('id_mata_pelajaran');
	$this->M_nilai->hapus($id);
	print_r ($id);
	$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Admin berhasil dihapus</strong> .</div>");
	redirect("jadwal");
	}
	
	function edit()
	{
		$data=array(

		'id_nilai' 		=>$this->input->post ('id_nilai'),
		'id_mata_pelajaran'			=>$this->input->post ('id_mata_pelajaran'),
		'tanggal'					=>$this->input->post ('tanggal'),
		'keterangan'				=>$this->input->post ('keterangan'),
		'nik'						=>$this->input->post ('nik')
					);
		$this->M_nilai->update($data,$this->input->post('id_nilai'));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Kelas berhasil diubah</strong> .</div>");
		redirect("nilai");
	}
	
	
	}