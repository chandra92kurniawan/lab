<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_sms');
	}
	public function index()
	{
		$data['a']='a';
		$this->load->view('page_index', $data);
	}
	function get()
	{	
		$q = strtoupper($this->input->get('term'));
		if(is_numeric($q)){
			$menu=$this->db->query("select nis,nama_siswa from siswa where nis like '%$q%' ")->result();	
		}else{
			$menu=$this->db->query("select nis,nama_siswa from siswa where nama_siswa like '%$q%' ")->result();
		}		
		foreach($menu as $menu){
			$array[]=$menu->nis." - ".$menu->nama_siswa;

		}
		print_r(json_encode($array));
	}
	
}

/* End of file sms.php */
/* Location: ./application/modules/sms/controllers/sms.php */