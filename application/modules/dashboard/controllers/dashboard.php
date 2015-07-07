<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
		$this->load->model('m_dashboard');
	}
	public function index()
	{
		$role=$this->session->userdata('id_role');
		if($role=='4'){
			$data['status']=$this->m_dashboard->cekStatus();
			$data['siswa']=$this->m_dashboard->getSiswaByNis();
			$this->load->view('page_ortu',$data);
		}else{
			$data['arr']=$this->getGrafik();
			$this->load->view('page_index',$data);
		}
	}
	function update_siswa()
	{
		$data=array('no_orang_tua'=>$this->input->post('nomor_hp'),
					'nama_orang_tua'=>$this->input->post('nama_orang_tua'),
					'alamat'=>$this->input->post('alamat'));
		$this->db->where('nis', $this->session->userdata('username'));
		$this->db->update('siswa', $data);
		$salt= random_string('alnum', 5);
		$satu=do_hash($salt);
		$p2=do_hash($this->input->post('password'),'md5');
		$pass=$satu.".".$p2;
		$dt=array('salt'=>$salt,
					'password'=>$pass);
		$this->db->where('username', $this->input->post('username'));
		$this->db->update('user', $dt);
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data Berhasil diupdate</strong> .</div>");
		redirect('dashboard');
	}
	function test()
	{	$usd='';
		exec("I:\TA\gammu133 -c I:\TA\gammu133 gammu getussd *123#", $hasil);
		/*for ($i=0; $i<=count($hasil)-1; $i++)
		{
			if (substr_count($hasil[$i], 'Service reply') > 0) ;$usd = $i;
		}
		echo $hasil[$usd];*/
	}
	function getGrafik()
	{
		$arr=array();
		for($a=1;$a<=12;$a++){
			$kirim=$this->m_dashboard->countSmsPerMonth($a);
			$data['bulan']=$this->getStrBulan($a);
			$data['jumlah']=$kirim;
			array_push($arr, (object)$data);
		}
		/*echo "<pre>";
		foreach($arr as $d=>$dd){
			foreach($dd as $val=>$value){
				echo $val." ";
			}
		}
		print_r($arr);*/
		return $arr;
	}
	function getStrBulan($bln)
	{
		if($bln==1){
			$b="Januari";
		}else if($bln==2){
			$b="Februari";
		}else if($bln==3){
			$b="Maret";
		}else if($bln==4){
			$b="April";
		}else if($bln==5){
			$b="Mei";
		}else if($bln==6){
			$b="Juni";
		}else if($bln==7){
			$b="Juli";
		}else if($bln==8){
			$b="Agustus";
		}else if($bln==9){
			$b="September";
		}else if($bln==10){
			$b="Oktober";
		}else if($bln==11){
			$b="November";
		}else if($bln==12){
			$b="Desember";
		}
		return $b;
	}
}	

/* End of file dashboard.php */
/* Location: ./application/modules/dashboard/controllers/dashboard.php */