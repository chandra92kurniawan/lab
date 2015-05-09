<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('M_front');
		$st=$this->session->userdata('login');
		if($st!=true)
		{
			redirect('home');
		}
	}
	
	public function index()
	{
		$this->load->view('page_index');
	}

	function kirim_sms()
	{
	
	
		$data=array(
				'pesan'					=>$this->input->post('TextDecoded'),
				'nomor'					=>$this->input->post('DestinationNumber')
				
				);
				
		$this->M_front->insertData($data);
		// redirect('Login_user/tabel');
		print_r ($data);
	
	}
	
}

/* End of file front.php */
/* Location: ./application/modules/front/controllers/front.php */