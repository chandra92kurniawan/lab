<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Absensi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_absensi');
	}
	public function index()
	{
		$data['list']=$this->m_absensi->getList();
		$this->load->view('page_index', $data);
	}
	function getSiswa($id_jadwal)
	{
		//echo "<pre>";
		$data['list']=$this->getSiswaByKelas($id_jadwal,date('Y-m-d'));
		$data['ket']=$this->db->query("select*from absensi where id_jadwal_dtl='".$id_jadwal."' and tanggal='".date('Y-m-d')."'")->row();
		//print_r($data['list']);
		$this->load->view('page_absen',$data);
	}
	function getSiswaByKelas($jadwal_dtl,$date)
	{
		$jadwal=$this->m_absensi->getJadwal($jadwal_dtl);
		//$id_jadwal=$jadwal->id_jadwal;
		$cekToDay=$this->m_absensi->toDay($jadwal_dtl,$date);
		$no=1;
		//print_r($cekToDay->row());
		if($cekToDay->num_rows()==0)
		{
			//echo "asdw";
			$into=array('id_jadwal_dtl'=>$jadwal_dtl,'tanggal'=>$date);
			$this->db->insert('absensi', $into);
			$id_absensi=$this->db->insert_id();
			$siswa=$this->m_absensi->getSiswa($jadwal->id_kelas);
			//echo $jadwal->id_kelas;
			if($siswa){	
				foreach($siswa as $siswa){
					$dtl=array('nis'=>$siswa->nis,
								'absensi'=>'3',
								'id_absensi'=>$id_absensi);
					$this->db->insert('absensi_dtl', $dtl);
				} 
			}
		}//echo "asdw";
		$this->m_absensi->del();
		$getIdAbsensi=$this->m_absensi->getIdAbsensi($jadwal_dtl,$date);
		$siswax=$this->m_absensi->getSiswaByJadwal($getIdAbsensi->id_absensi);
		return $siswax;
	}	
	function presensi($id_jadwal)// id_jadwal == id jadwal detail
	{
		$jadwal=$this->m_absensi->jadwalById($id_jadwal);
		$kirim=$this->input->post('kirim');//0:tidak 1:alpha 2:ijin 3:semua
		$date=date('Y-m-d');
		$getIdAbsensi=$this->m_absensi->getIdAbsensi($id_jadwal,$date);
		$siswax=$this->m_absensi->getSiswaByJadwal($getIdAbsensi->id_absensi);
		//update keterangan absensi
		$data=array('keterangan'=>$this->input->post('materi'));
		$this->m_absensi->updateKeterangan($data,$getIdAbsensi->id_absensi);

		foreach($siswax as $siswa)
		{	$alpha=0;$ijin=0;$hadir=0;$str='';
			$absen=$this->input->post('id_'.$siswa->id_absensi_dtl);
			$up=array('absensi'=>$absen);
			$this->m_absensi->updateDtl($up,$siswa->id_absensi_dtl);
			$nmSiswa=explode(' ', $siswa->nama_siswa);
			$nama_siswa='';
			for($abc=0;$abc<=count($nmSiswa);$abc++){
				if($abc==0){
					$nama_siswa.=$nmSiswa[$abc];
				}else{
					$nama_siswa.=substr($nmSiswa[$abc], 1);
				}
				$nama_siswa.=" ";
			}

			if($absen==3){
					$str="Pemberitahuan kepada orangtua dari ".$nama_siswa." pada hari ".$jadwal->hari_indonesia." Mata pelajaran ".$jadwal->nama_pelajaran." pada jam ".$jadwal->jam_awal." - ".$jadwal->jam_akhir." anak anda Alpha (tanpa keterangan)";
					$alpha=1;
			}else if($absen==2){
					$str="Pemberitahuan kepada orangtua dari ".$nama_siswa." pada hari ".$jadwal->hari_indonesia." Mata pelajaran ".$jadwal->nama_pelajaran." pada jam ".$jadwal->jam_awal." - ".$jadwal->jam_akhir." anak anda  Ijin";
					$ijin=1;
			}else{
					$str="Pemberitahuan kepada orangtua dari ".$nama_siswa." pada hari ".$jadwal->hari_indonesia." Mata pelajaran ".$jadwal->nama_pelajaran." pada jam ".$jadwal->jam_awal." - ".$jadwal->jam_akhir." anak anda Hadir";
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
		redirect("absensi");
	}
	function test()
	{
		echo "July 1, 2000 is on a " . date("D", mktime(0, 0, 0, 2, 1, 2015));

	}
	function cobian()
	{
		echo date('D');
	}
}

/* End of file absensi.php */
/* Location: ./application/modules/absensi/controllers/absensi.php */