<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('security');
		$this->load->helper('string');
		$this->load->model('m_login');
	}
	public function index()
	{
		$this->load->view('page_index');
	}
	function do_login()
	{
		$user=$this->input->post('username');
		$pass=$this->input->post('password');
		$cekUser=$this->m_login->cekuser($user);
		if($cekUser->num_rows()!=0){
			$salt=$cekUser->row()->salt;
			$satu=do_hash($salt);
			$dua=do_hash($pass, 'md5');
			$pass=$satu.".".$dua;
			if($pass===$cekUser->row()->password){
				$array = array(
					'username' => $user,
					'nama_user'=> $cekUser->row()->nama_user,
					'id_role'=>$cekUser->row()->id_role,
					'status'=>$cekUser->row()->status,
					'login'=>true
				);
				
				$this->session->set_userdata( $array );
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('msg', "<div class='alert alert-danger fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Password Anda salah</strong> .</div>");		
				redirect("home");
			}
		}else{
			$this->session->set_flashdata('msg', "<div class='alert alert-danger fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Username belum terdaftar</strong> .</div>");		
			redirect("home");
		}
	}
	function test()
	{
		$char='admin';
		$salt='wLVuv';
		$satu=do_hash($salt);
		$dua=do_hash($char, 'md5');
		$pass=$satu.".".$dua;
		echo $pass;
		//echo random_string('alnum', 5);
		//$str = do_hash($str, 'md5'); // MD5
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}

/* End of file login.php */
/* Location: ./application/modules/login/controllers/login.php */