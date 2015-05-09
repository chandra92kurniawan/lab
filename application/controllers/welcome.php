<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * author : M.Chandra
	 */
	public function index()
	{
		$this->load->view('w8/header');
		//$this->load->view('pict_home');
		$this->load->view('w8/sidebar');
		$this->load->view('w8/body');
		$this->load->view('w8/footer');
		//$this->load->view('welcome_message');
		//$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */