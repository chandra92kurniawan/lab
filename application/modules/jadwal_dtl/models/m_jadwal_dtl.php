<?php
class M_jadwal_dtl extends CI_Model
{	var $table='jadwal_dtl';
	function __construct()
	{
	parent::__construct();
	$this->load->database();
	}
	
	function masukan_data($data)
	{
	$this->db->insert($this->table, $data);
	}
	
	function tampil_data()
	{

			$data_guest=$this->db->get('jadwal_dtl');
                if($data_guest->num_rows()>0)
                        {
                            return $data_guest->result();
                        }
                        else
                        {
                            return array();
                        }

						
						
	}
	
	function update($data,$id)
	{
		$this->db->where('id_jadwal_dtl', $id);
		$this->db->update('jadwal_dtl', $data);
	}
	
	function getnamahari($id)	
	{
		$this->db->select('hari_indonesia');
		$this->db->where('id_hari',$id);
		return $this->db->get('hari')->row()->hari_indonesia;
	}
	
	function hapus($id)
	{

		$this->db->where('id_jadwal_dtl',$id);
		$this->db->delete('jadwal_dtl');

	}
	
	}
	?>