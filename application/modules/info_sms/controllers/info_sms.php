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
	function reSend($idSentItems,$idDtl){
		$this->db->where('ID', $idSentItems);
		$data=$this->db->get('outbox')->row();

		$aa=array('DestinationNumber'=>$data->DestinationNumber,
					'TextDecoded'=>$data->TextDecoded);
		$this->db->insert('outbox', $aa);
		$id=$this->db->insert_id();
		$this->db->where('id_nilai_dtl', $idDtl);
		$this->db->update('nilai_dtl', array('ID_sentitems'=>$id));
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Berhasil dikirim ulang</strong> .</div>");
		redirect('Info_sms');
	}

}