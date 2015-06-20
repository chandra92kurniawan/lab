 <?php 
 class Info_sms extends CI_Controller
 {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_info');
			$username=$this->session->userdata('username');
			$st=$this->session->userdata('login');
			if($st!='1')
			{
				redirect('home');
			}
		}


	public function index()
	{
		
		
		$data['list']=$this->M_info->tampil_data();
		$this->load->view('v_nilai_info', $data);
	}


	
	function detail($id_kelas,$id_mata_pelajaran,$id_nilai)
	{
		$data['id_kelas']=$id_kelas;
		$data['id_mata_pelajaran']=$id_mata_pelajaran;
		$data['list']=$this->M_info->tampil_data_detail($id_nilai);
		$this->load->view('v_nilai_info_detail', $data);
	}	
	

}