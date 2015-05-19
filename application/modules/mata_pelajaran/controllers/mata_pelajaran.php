<?php
class Mata_pelajaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();	
		$this->load->model('M_mata_pelajaran');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}	
	}
	
	public function index()
	{
				$data['list']=$this->M_mata_pelajaran->tampil_data();
				$this->load->view('v_mata_pelajaran',$data);	
	}
	
	function tambah_data()
	{
	
	$data=array (
	
	'id_mata_pelajaran' 	=>$this->input->post ('id_mata_pelajaran'),
	'nama_pelajaran'		=>$this->input->post ('nama_pelajaran'),
	'inisial_nama_pelajaran'=>$this->input->post ('inisial_nama_pelajaran')
	);
	$this->M_mata_pelajaran->masukan_data($data);
	$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data  berhasil diubah</strong> .</div>");
	redirect ('mata_pelajaran/index');
	}
	
	
	function hapus($id){
	$this->M_mata_pelajaran->hapus($id);
	$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Admin berhasil dihapus</strong> .</div>");
	redirect("mata_pelajaran");
	}
	
	function edit()
	{
		$data=array("id_mata_pelajaran"=>$this->input->post('id_mata_pelajaran'),
					"nama_pelajaran"=>$this->input->post('nama_pelajaran'),
					"inisial_nama_pelajaran"=>$this->input->post('inisial_nama_pelajaran'));
		$this->M_mata_pelajaran->update($data,$this->input->post('id_mata_pelajaran'));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Kelas berhasil diubah</strong> .</div>");
		redirect("mata_pelajaran");
	}
	
	
}
?>