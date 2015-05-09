<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswa');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}
	}
	public function index()
	{
		$tingkat=$this->input->post('tingkat');
		$jurusan=$this->input->post('jurusan');
		$grup=$this->input->post('grup');
		$data['tingkat']=$tingkat;
		$data['jurusan']=$jurusan;
		$data['grup']=$grup;
		$kelas=$this->m_siswa->getKelas();
		$k['']="- Pilih Kelas -";
		foreach($kelas as $kelas)
		{
			$k[$kelas->id_kelas]=$kelas->tingkat_kelas." ".$kelas->jurusan." ".$kelas->grup_kelas;
		}
		$data['kelas']=$k;
		$data['list']=$this->m_siswa->getList($tingkat,$jurusan,$grup);
		$this->load->view('page_index',$data);
	}
	function add()
	{
		$data=array('nis'=>$this->input->post('nis'),
					'nama_siswa'=>$this->input->post('nama_siswa'),
					'jenis_kelamin'=>$this->input->post('jk'),
					'id_kelas'=>$this->input->post('kelas'),
					'nama_orang_tua'=>$this->input->post('nama_orang_tua'),
					'no_orang_tua'=>$this->input->post('nomor_hp'),
					'alamat'=>$this->input->post('alamat'),
					'status'=>'1');
		$this->db->insert('siswa', $data);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Siswa baru berhasil ditambahkan</strong> .</div>");
		redirect("siswa");
	}
	function edit()
	{
		$data=array(
					'nama_siswa'=>$this->input->post('nama_siswa'),
					'jenis_kelamin'=>$this->input->post('jk'),
					'id_kelas'=>$this->input->post('kelas'),
					'nama_orang_tua'=>$this->input->post('nama_orang_tua'),
					'no_orang_tua'=>$this->input->post('nomor_hp'),
					'alamat'=>$this->input->post('alamat'));
		$this->m_siswa->update($data,$this->input->post('nis'));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Siswa baru berhasil ditambahkan</strong> .</div>");
		redirect("siswa");
	}
	function hapus($nis)
	{
		$this->db->where('nis', $nis);
		$this->db->update('siswa', array('status'=>'0'));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Siswa tersebut berhasil dihapus</strong> .</div>");
		redirect("siswa");
	}
	function cek($nik){
		$cek=$this->m_siswa->cek($nik);
		echo $cek;
	}
}

/* End of file siswa.php */
/* Location: ./application/modules/siswa/controllers/siswa.php */