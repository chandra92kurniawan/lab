<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jadwal');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}
	}
	public function index()
	{
	
		$id_kelas=$this->M_jadwal->dropdown();
		foreach($id_kelas as $unyu)
		{
			$p[$unyu->id_kelas]=$unyu->tingkat_kelas." ".$unyu->jurusan." ".$unyu->grup_kelas;
		}
		$data['dt_nama']=$p;

		
		$id_pelajaran=$this->M_jadwal->dropdownpelajaran();
		foreach($id_pelajaran as $cihuy)
		{
			$c[$cihuy->id_mata_pelajaran]=$cihuy->nama_pelajaran;
		}
		$data['dt_pelajaran']=$c;

		
		$nama_guru=$this->M_jadwal->dropdownnik();
		foreach($nama_guru as $bro)
		{
			$d[$bro->nik]=$bro->nama_guru;
		}
		$data['dt_nik']=$d;
		
		$data['list']=$this->M_jadwal->tampil_data();
		$this->load->view('v_jadwal',$data);
	
	
	}
	
	function detail()
	
	{
		$x=$this->uri->segment(3);
		$data['dt']=$this->M_jadwal->getHead($x);
		$data['detail']=$this->M_jadwal->getDetail($x);
		$id_kelas=$this->M_jadwal->dropdowndetail();
		foreach($id_kelas as $kelas)
		{
			$p[$kelas->id_kelas]=$kelas->tingkat_kelas." ".$kelas->jurusan." ".$kelas->grup_kelas;
		}
		$data['dt_kelas']=$p;
		
		$this->load->view('jadwal_dtl',$data);
	
	}
	
	
	function tambah_data()
	{
	
		$data=array (
		
		'id_jadwal' 		=>$this->input->post ('id_jadwal'),
		'id_kelas'			=>$this->input->post ('id_kelas'),
		'nik'				=>$this->input->post ('nik'),
		'id_mata_pelajaran'	=>$this->input->post ('id_mata_pelajaran')
		
		);
		$this->M_jadwal->masukan_data($data);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data  berhasil ditambah</strong> .</div>");
		redirect ('jadwal/index');
	}
	
	
	function tambah_data_detail()
	{
	$x=$this->uri->segment(3);
			$data=array(
			"id_jadwal"			=>$this->input->post('id_jadwal'),
			"id_hari"			=>$this->input->post('id_hari'),
			"jam_awal"			=>$this->input->post('jam_awal'),
			"jam_akhir" 		=>$this->input->post('jam_akhir')
			);
	$this->M_jadwal->masukan_data_dtl($data);
	$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Jadwal berhasil ditambah</strong> .</div>");
	$x= $this->input->post('id_jadwal');
	redirect('jadwal/detail/'.$x);
	
	
	}
	
	
	function hapus($id){
	//$id=>$this->input->post('id_mata_pelajaran');
	$this->M_jadwal->hapus($id);
	//print_r ($id);
	$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Admin berhasil dihapus</strong> .</div>");
	redirect("jadwal");
	}
	
	function hapus_dtl($id){
	$this->M_jadwal->hapus_dtl($id);
	redirect("jadwal");
	}
	
	function edit()
	{
		$data=array(
		"id_jadwal"			=>$this->input->post('id_jadwal'),
		"id_kelas"			=>$this->input->post('id_kelas'),
		"id_mata_pelajaran" =>$this->input->post('id_mata_pelajaran'),
		"nik"				=>$this->input->post('nik')
		
		);
		$this->M_jadwal->update($data,$this->input->post('id_jadwal'));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Jadwal berhasil diubah</strong> .</div>");
		redirect("jadwal");
	}
	
	
	function edit_detail()
	{
		
			$data=array(
			"id_jadwal_dtl"		=>$this->input->post('id_jadwal_dtl'),
			"id_jadwal"			=>$this->input->post('id_jadwal'),
			"id_hari"			=>$this->input->post('id_hari'),
			"jam_awal"			=>$this->input->post('jam_awal'),
			"jam_akhir" 		=>$this->input->post('jam_akhir')
			);
			$this->M_jadwal->update_detail($data,$this->input->post('id_jadwal_dtl'));
			
			$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Jadwal berhasil diubah</strong> .</div>");		
			
			
			$x=$this->input->post('id_jadwal');
		//	$head['dt']=$this->M_jadwal->getHead($x);
		//	$head['detail']=$this->M_jadwal->getDetail($x);
		//	print_r ($data);
		redirect ('jadwal/detail/'.$x);
	}
	
	
	
	function back()
	{
	$data['list']=$this->M_jadwal->tampil();
	$this->load->view('jadwal',$data);
	}
	
	
	}