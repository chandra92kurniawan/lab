 <?php
class M_nilai extends CI_Model {

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
	
	

	function masukan_data($data)
	{
		$this->db->insert('nilai', $data);
	}
	
	
	function dropdownpelajaran()
	{
		return $this->db->get('mata_pelajaran')->result();
	
	}
	
	function dropdownnik()
	{
		return $this->db->get('guru')->result();
	
	}

	function dropdownkelas()
	{
		return $this->db->get('kelas')->result();
	}
	
	function getnamakelas($id)
	{

		//$this->db->select('kelas');
		$this->db->where('id_kelas',$id);
		$ab=$this->db->get('kelas')->row();
		$kelas=$ab->tingkat_kelas.' '.$ab->jurusan.' '.$ab->grup_kelas;
		return $kelas;
	}

	function tampil_data()
	{
		$qry = "SELECT	*
		FROM
			nilai
		JOIN mata_pelajaran ON nilai.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran
		JOIN guru ON nilai.nik = guru.nik";
		$hasil = $this->db->query($qry)->result();
		return $hasil;
	}
	
	
	
	function update($data,$id)
	{
		$this->db->where('id_nilai', $id);
		$this->db->update('nilai', $data);
	}
	
	
	function hapus($id)
	{

		$this->db->where('id_nilai',$id);
		$this->db->delete('nilai');

	}	


}

?>