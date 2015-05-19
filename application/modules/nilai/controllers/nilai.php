 <?php 
 class Nilai extends CI_Controller
 {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_nilai');
			$st=$this->session->userdata('login');
			if($st!='1')
			{
				redirect('home');
			}
		}



	public function indexnilai()
	{
		
		$id_pelajaran=$this->M_nilai->dropdownpelajaran();
				foreach($id_pelajaran as $cihuy)
				{
					$c[$cihuy->id_mata_pelajaran]=$cihuy->nama_pelajaran;
				}
				$data['dt_pelajaran']=$c;
			

		$nik=$this->M_nilai->dropdownnik();
				foreach($nik as $unyu)
				{
					$p[$unyu->nik]=$unyu->nama_guru;
				}
				$data['dt_nik']=$p;
		

		$kelas=$this->M_nilai->dropdownkelas();
				foreach($kelas as $kelaskelas)
				{
					$u[$kelaskelas->id_kelas]=$kelaskelas->tingkat_kelas." ".$kelaskelas->jurusan." ".$kelaskelas->grup_kelas;
				}
				$data['dt_kelas']=$u;
				

		$data['list']=$this->M_nilai->tampil_data();
		$this->load->view('v_nilai', $data);
	}
	
	
	function tambah_data()
	{
	
		$data=array (
		
		'id_nilai' 			=>$this->input->post ('id_nilai'),
		'id_mata_pelajaran'	=>$this->input->post ('id_mata_pelajaran'),
		'id_kelas'			=>$this->input->post ('id_kelas'),
		'tanggal'			=>$this->input->post ('tanggal'),
		'keterangan'		=>$this->input->post ('keterangan'),
		'nik'				=>$this->input->post ('nik')
		
		);
		$this->M_nilai->masukan_data($data);
		//$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data  berhasil ditambah</strong> .</div>");
		redirect ('nilai/indexnilai');
	}
	
	
	function hapus($id){
	$this->M_nilai->hapus($id);
	//$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data berhasil dihapus</strong> .</div>");
	redirect('nilai/indexnilai');
	}
	

	
	function edit()
	{
		$data=array(

		'id_nilai'			 		=>$this->input->post ('id_nilai'),
		'id_mata_pelajaran'			=>$this->input->post ('id_mata_pelajaran'),
		'id_kelas'					=>$this->input->post ('id_kelas'),
		'tanggal'					=>$this->input->post ('tanggal'),
		'keterangan'				=>$this->input->post ('keterangan'),
		'nik'						=>$this->input->post ('nik')
					);
		$this->M_nilai->update($data,$this->input->post('id_nilai'));
	//	$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Kelas berhasil diubah</strong> .</div>");
		//print_r($data);		

		redirect ("nilai/indexnilai");
	}
	
	
}