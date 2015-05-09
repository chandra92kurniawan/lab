<?php
class M_mata_pelajaran extends CI_Model
{	var $table='mata_pelajaran';
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

			$data_guest=$this->db->get('mata_pelajaran');
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
		$this->db->where('id_mata_pelajaran', $id);
		$this->db->update('mata_pelajaran', $data);
	}
	
	
	function hapus($id)
	{

		$this->db->where('id_mata_pelajaran',$id);
		$this->db->delete('mata_pelajaran');

	}
	
	}
	?>