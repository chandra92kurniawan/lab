<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akses extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_akses');
	}
	public function index()
	{
		$r=$this->input->post('role');
		$ro=1;
		if(!empty($r)){
			$ro=$r;
		}
		$role=$this->db->get('adm_role')->result();
		foreach($role as $role)
		{
			$rl[$role->id_role]=$role->nama_role;
		}
		$data['akses']=$this->getAkses($ro);
		$data['role']=$rl;
		$data['id']=$ro;
		$this->load->view('page_index', $data);
	}
	function getAkses($ro)
	{
		$menu=$this->m_akses->getMenuHead('0');
		$arr=array();$n1=0;
		foreach($menu as $menu)
		{
			$data['id_menu']=$menu->id_menu;
			$data['nama_menu']=++$n1." - ".$menu->nama_menu;
			$a=$this->m_akses->cekAkses($ro,$menu->id_menu);
			if($a->num_rows()==0)
			{
				$zz=array('id_menu'=>$menu->id_menu,'id_role'=>$ro,'status'=>'0');
				$this->db->insert('adm_akses', $zz);					
				$akses=0;
			}else{
				$akses=$a->row()->status;
			}
			$data['akses']=$akses;
			array_push($arr, $data);
			$cek=$this->m_akses->getMenuHead($menu->id_menu);
			$n2=0;
			foreach($cek as $cek)
			{
				$data['id_menu']=$cek->id_menu;
				$data['nama_menu']=$n1.".".++$n2." - ".$cek->nama_menu;
				$a=$this->m_akses->cekAkses($ro,$cek->id_menu);
				if($a->num_rows()==0)
				{
					$zz=array('id_menu'=>$cek->id_menu,'id_role'=>$ro,'status'=>'0');
					$this->db->insert('adm_akses', $zz);
					$akses=0;
				}else{
					$akses=$a->row()->status;
				}
				$data['akses']=$akses;
				array_push($arr, $data);
			}
		}
		#echo "<pre>";
		#rint_r($arr);
		return $arr;
	}
	function beri($num,$id,$role)
	{
		$this->m_akses->beri($num,$id,$role);
	}
}

/* End of file akses.php */
/* Location: ./application/modules/akses/controllers/akses.php */