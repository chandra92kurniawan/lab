<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{//fgdgfdhgdhdhdhgfd
		$data['judul']="Admin";
		$this->load->view('page_test',$data);	
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */