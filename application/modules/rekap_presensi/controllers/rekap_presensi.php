<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rekap_presensi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('rekap');
	}
	public function index()
	{
		#echo "<pre>";
		$data['list']=$this->rekap->getJadwal();
		#print_r($data['list']);
		$this->load->view('page_index',$data);
	}
	function rekap($id_jadwal)
	{
		$data['list']=$this->getData($id_jadwal);
		$data['absen']=$this->rekap->getAbsen($id_jadwal);
		$data['siswa']=$this->rekap->jadwal($id_jadwal);
		$this->load->view('page_rekap', $data);
	}
	function getData($id_jadwal)
	{
		//echo "<pre>Chandra";
		$getAbsen=$this->rekap->getAbsen($id_jadwal);//print_r($getAbsen);
		$siswa=$this->rekap->jadwal($id_jadwal);
		$dt=array();
		foreach($siswa as $siswa)
		{
			foreach($getAbsen as $data)
			{
				$kehadiran=$this->rekap->getStatus($siswa->nis,$data->id_absensi);
				if($kehadiran->absensi==1){
					$str="<i class='glyphicon glyphicon-ok'></i>";
				}else if($kehadiran->absensi==2){
					$str="<i class='glyphicon glyphicon-italic'></i>";
				}else if($kehadiran->absensi==3){
					$str="<i class='glyphicon glyphicon-remove'></i>";
				}
				$dt[$siswa->nis."-".$data->id_absensi]=$str;
			}
		}
		return $dt;	
	}
}

/* End of file rekap_presensi.php */
/* Location: ./application/modules/rekap_presensi/controllers/rekap_presensi.php */