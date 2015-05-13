<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rekap_presensi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('rekap');
		$this->load->model('m_absensi');
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
	function detail($id_jadwal_dtl,$id_absensi)
	{
		//echo "<pre>";
		$data['list']=$this->getSiswaByKelas($id_jadwal_dtl,$id_absensi);
		$data['ket']=$this->db->query("select*from absensi where id_absensi='".$id_absensi."'")->row();
		//print_r($data['list']);
		$this->load->view('page_absen',$data);
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
				//print_r($data);
				$kehadiran=$this->rekap->getStatus($siswa->nis,$data->id_absensi);
				if($kehadiran){	
					if($kehadiran->absensi==1){
						$str="<i class='glyphicon glyphicon-ok'></i>";
					}else if($kehadiran->absensi==2){
						$str="<i class='glyphicon glyphicon-italic'></i>";
					}else if($kehadiran->absensi==3){
						$str="<i class='glyphicon glyphicon-remove'></i>";
					}else{
						$str="<i class='glyphicon glyphicon-remove'></i>";
					}
				}else{
					$str="<i class='glyphicon glyphicon-remove'></i>";
				}
				$dt[$siswa->nis."-".$data->id_absensi]=$str;
			}
		}
		return $dt;	
	}
	function getSiswaByKelas($jadwal_dtl,$id_absensi)
	{
		$jadwal=$this->m_absensi->getJadwal($jadwal_dtl);
		//$id_jadwal=$jadwal->id_jadwal;
		$siswa=$this->rekap->jadwal($jadwal->id_jadwal);$siswax=array();
		foreach($siswa as $siswa){
			$kehadiran=$this->rekap->getStatus($siswa->nis,$id_absensi);
			$data['nis']=$siswa->nis;
			$data['nama_siswa']=$siswa->nama_siswa;
			if($kehadiran){
				$data['absensi']=$kehadiran->absensi;
				$data['id_absensi_dtl']=$kehadiran->id_absensi_dtl;
			}else{
				$dd=array('nis'=>$siswa->nis,
							'absensi'=>'3',
							'id_absensi'=>$id_absensi);
				$this->db->insert('absensi_dtl', $dd);
				$iddtl=$this->db->insert_id();
				$data['id_absensi_dtl']=$iddtl;
				$data['absensi']='3';
			}
			array_push($siswax, (object)$data);
		}
		//$this->m_absensi->del();
		//$getIdAbsensi=$this->m_absensi->getIdAbsensi($jadwal_dtl,$date);
		//$siswax=$this->m_absensi->getSiswaByJadwal($getIdAbsensi->id_absensi);
		return $siswax;
	}
	function presensi($id_jadwal,$id_absensi)// id_jadwal == id jadwal detail
	{
		$jadwal=$this->m_absensi->jadwalById($id_jadwal);
		$kirim=$this->input->post('kirim');//0:tidak 1:alpha 2:ijin 3:semua
		// /$date=date('Y-m-d');
		//$getIdAbsensi=$this->m_absensi->getIdAbsensi($id_jadwal,$date);
		$siswax=$this->m_absensi->getSiswaByJadwal($id_absensi);
		//update keterangan absensi
		$data=array('keterangan'=>$this->input->post('materi'));
		$this->m_absensi->updateKeterangan($data,$id_absensi);

		foreach($siswax as $siswa)
		{	$alpha=0;$ijin=0;$hadir=0;$str='';
			$absen=$this->input->post('id_'.$siswa->id_absensi_dtl);
			$up=array('absensi'=>$absen);
			$this->m_absensi->updateDtl($up,$siswa->id_absensi_dtl);
			
			if($absen==3){
					$str="Pemberitahuan ! kepada orangtua dari ".$siswa->nama_siswa." pada hari ".$jadwal->hari_indonesia." Mata pelajaran ".$jadwal->nama_pelajaran." pada jam ".$jadwal->jam_awal." - ".$jadwal->jam_akhir." anak anda tidak masuk kelas dikarenakan Alpha (tanpa keterangan)";
					$alpha=1;
			}else if($absen==2){
					$str="Pemberitahuan ! kepada orangtua dari ".$siswa->nama_siswa." pada hari ".$jadwal->hari_indonesia." Mata pelajaran ".$jadwal->nama_pelajaran." pada jam ".$jadwal->jam_awal." - ".$jadwal->jam_akhir." anak anda tidak masuk kelas dikarenakan Ijin";
					$ijin=1;
			}else{
					$str="Pemberitahuan ! kepada orangtua dari ".$siswa->nama_siswa." pada hari ".$jadwal->hari_indonesia." Mata pelajaran ".$jadwal->nama_pelajaran." pada jam ".$jadwal->jam_awal." - ".$jadwal->jam_akhir." anak anda hadir pada kelas tersebut";
					$hadir=1;
			}
			if($kirim==1){
				$pesan=" dan untuk bagi yang Alpha telah berhasil diberitahukan kepada orangtuanya";
				if($alpha==1){
					$data=array('DestinationNumber'=>$siswa->no_orang_tua,
								'TextDecoded'=>$str);
					$this->db->insert('outbox', $data);
				}
			}else if($kirim==2){
				$pesan=" dan untuk bagi yang Ijin telah berhasil diberitahukan kepada orangtuanya";
				if($ijin==1){
					$data=array('DestinationNumber'=>$siswa->no_orang_tua,
								'TextDecoded'=>$str);
					$this->db->insert('outbox', $data);	
				}
			}else if($kirim==3)
			{
				$pesan=" dan untuk semua keterangan Hadir/Ijin/Alpha telah berhasil diberitahukan kepada orangtuanya";
				$data=array('DestinationNumber'=>$siswa->no_orang_tua,
							'TextDecoded'=>$str);
				$this->db->insert('outbox', $data);
			}else{
				$pesan=" tanpa memberitahukan kepada orangtuanya";
			}
		}
		$this->session->set_flashdata('msg', "<div class='alert alert-warning fade in'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Data telah tersimpan</strong> , ".$pesan."</div>");
		$idJadwal=$this->db->query("select*from jadwal_dtl where id_jadwal_dtl='".$id_jadwal."'")->row()->id_jadwal;
		redirect("rekap_presensi/rekap/".$idJadwal);
	}
}

/* End of file rekap_presensi.php */
/* Location: ./application/modules/rekap_presensi/controllers/rekap_presensi.php */