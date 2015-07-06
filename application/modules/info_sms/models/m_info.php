 <?php
class M_info extends CI_Model {

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
		return $this->db->insert_id();
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
		if($this->session->userdata('id_role')==3){
			$this->db->where('nilai.nik', $this->session->userdata('username'));
		}
		$this->db->join('kelas', 'kelas.id_kelas = nilai.id_kelas');
		$this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran = nilai.id_mata_pelajaran');
		$this->db->join('guru', 'guru.nik = nilai.nik');
		return $this->db->get('nilai')->result();		
	}


	function getketerangan($id)
	{

		//$this->db->select('kelas');
		$this->db->where('id_nilai',$id);
		$ab=$this->db->get('nilai')->row();
		return $ab;
	}

	function getSiswa($id_kelas)
	{
		$this->db->where('id_kelas',$id_kelas);
		$this->db->order_by('nis', 'asc');
		return $this->db->get('siswa')->result();
	}
	function tampil_data_detail($id_kelas)
	{		
			$this->db->join('siswa', 'siswa.nis = nilai_dtl.nis');
			$this->db->join('sentitems', 'sentitems.ID = nilai_dtl.ID_sentitems', 'left');
			$this->db->where('id_nilai',$id_kelas);
			return $this->db->get("nilai_dtl")->result();
			
	}
	
	function getJadwal($id_jadwal)
	{
		$this->db->where('id_jadwal_dtl', $id_jadwal);
		$this->db->join('jadwal', 'jadwal_dtl.id_jadwal=jadwal.id_jadwal');
		return $this->db->get('jadwal_dtl')->row();
	}

	function ambildata($id)
	{

		$query ="SELECT * from nilai
						JOIN mata_pelajaran ON nilai.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran
						
						where mata_pelajaran.id_mata_pelajaran =".$id;
		$hasil = $this->db->query($query)->row();
		return $hasil;
	}
	

	function ambilket($id)
	{

		$this->db->join('nilai', 'nilai.id_nilai=nilai_dtl.id_nilai');
		$this->db->join('siswa', 'siswa.id_nilai=nilai_dtl.id_nilai');
		$this->db->where('nilai_dtl.id_nilai', $id);
		return $this->db->get('nilai_dtl')->row();
	}

	function jadwalById($detail)
	{
		$this->db->join('jadwal', 'jadwal.id_jadwal=jadwal_dtl.id_jadwal');
		$this->db->join('kelas', 'kelas.id_kelas=jadwal.id_kelas');
		$this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran=jadwal.id_mata_pelajaran');
		$this->db->where('jadwal_dtl.id_jadwal_dtl', $detail);
		return $this->db->get('jadwal_dtl')->row();
	}
	function hapus($id)
	{

		$this->db->where('id_nilai',$id);
		$this->db->delete('nilai');

	}	
}


?>