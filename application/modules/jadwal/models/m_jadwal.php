<?php
class M_jadwal extends CI_Model
{	
	var $table='jadwal';
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
		
		function getnamapelajaran ($id)
		{
			$this->db->select('nama_pelajaran');
			$this->db->where('id_mata_pelajaran',$id);
			return $this->db->get('mata_pelajaran')->row()->nama_pelajaran;		
		}
		
	function getnamaguru($id)	
	{
		$this->db->select('nama_guru');
		$this->db->where('nik',$id);
		return $this->db->get('guru')->row()->nama_guru;
	}
	function getnamagurudetail($id)	
	{
		$this->db->select('nama_guru');
		$this->db->where('nik',$id);
		return $this->db->get('guru')->row()->nama_guru;
	}
	
	function getnamahari($id)	
	{
		$this->db->select('hari_indonesia');
		$this->db->where('id_hari',$id);
		return $this->db->get('hari')->row()->hari_indonesia;
	}
	
	
	function masukan_data($data)
	{
		$this->db->insert('jadwal', $data);
	}
	
	
	function masukan_data_dtl($data)
	{
		$this->db->insert('jadwal_dtl',$data);
	}
	function getDetail($x)
	{
		$qry=" SELECT * FROM
			jadwal_dtl JOIN hari on jadwal_dtl.id_hari=hari.id_hari
			where id_jadwal='$x'
		";
		$hasil = $this->db->query($qry)->result();
		return $hasil;
	}
	function getHead($x)
	{
		$qry = "SELECT	*
		FROM
			jadwal
		JOIN kelas ON jadwal.id_kelas = kelas.id_kelas
		JOIN mata_pelajaran ON jadwal.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran
		JOIN guru ON jadwal.nik = guru.nik where id_jadwal='$x'";
		$hasil = $this->db->query($qry)->row();
		return $hasil;
	}
	
	
	function dropdown()
	{
		return $this->db->get('kelas')->result();
	}
	
	function dropdowndetail()
	{
		
		return $this->db->get('kelas')->result();
			
	}
	
	function dropdownpelajaran()
	{
		return $this->db->get('mata_pelajaran')->result();
	
	}
	
	function dropdownnik()
	{
		return $this->db->get('guru')->result();
	
	}
	
	
	function tampil_data()
	{
		$qry = "SELECT	*
		FROM
			jadwal
		JOIN kelas ON jadwal.id_kelas = kelas.id_kelas
		JOIN mata_pelajaran ON jadwal.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran
		JOIN guru ON jadwal.nik = guru.nik";
		$hasil = $this->db->query($qry)->result();
		return $hasil;
	}
	
	
	
	function tampil_data_detail()
	{
		$query = "select 	*
						
					from
					jadwal a,jadwal_dtl c,kelas b
					where
					a.id_jadwal = c.id_jadwal = b.id_jadwal";
		$hasil = $this->db->query($query)->result();
		return $hasil;
	}
	
	function update($data,$id)
	{
		$this->db->where('id_jadwal', $id);
		$this->db->update('jadwal', $data);
	}
	
	function update_detail ($data,$id)
	{
		$this->db->where('id_jadwal_dtl',$id);
		$this->db->update('jadwal_dtl',$data);
	
	}
	
	
	function hapus($id)
	{

		$this->db->where('id_jadwal',$id);
		$this->db->delete('jadwal');

	}
	
	
	function hapus_dtl($id)
	{

		$this->db->where('id_jadwal_dtl',$id);
		$this->db->delete('jadwal_dtl');

	}
	
}