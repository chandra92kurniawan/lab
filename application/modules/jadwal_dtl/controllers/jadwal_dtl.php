<?php
class Jadwal_dtl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();	
		$this->load->model('M_jadwal_dtl');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}
	}
	
	public function index()
	{
		
		
 				$data['list']=$this->M_jadwal_dtl->tampil_data();
				$this->load->view('v_jadwal_dtl',$data);	
	}
	
	function tambah_data()
	{
	
	$data=array (
	
	'id_jadwal_dtl' 	=>$this->input->post ('id_jadwal_dtl'),
	'id_hari'			=>$this->input->post ('id_hari'),
	'jam_awal'			=>$this->input->post ('jam_awal'),
	'jam_akhir'			=>$this->input->post ('jam_akhir')
	);
	$this->M_jadwal_dtl->masukan_data($data);
	$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data  berhasil diubah</strong> .</div>");
	redirect ('jadwal_dtl/index');
	}
	
	
	function hapus($id){
	//$id=>$this->input->post('id_mata_pelajaran');
	$this->M_jadwal_dtl->hapus($id);
	//print_r ($id);
	$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Admin berhasil dihapus</strong> .</div>");
	redirect("jadwal_dtl");
	}
	
	function edit()
	{
		$data=array(
					'id_jadwal_dtl' 					=>$this->input->post ('id_jadwal_dtl'),
					'id_hari'							=>$this->input->post ('id_hari'),
					'jam_awal'							=>$this->input->post ('jam_awal'),
					'jam_akhir'							=>$this->input->post ('jam_akhir'));
		$this->M_jadwal_dtl->update($data,$this->input->post('id_jadwal_dtl'));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Kelas berhasil diubah</strong> .</div>");
		redirect("jadwal_dtl");
	}
	
	
}
?>