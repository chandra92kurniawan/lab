<?php
class M_front extends CI_Controller
{	var $table='outbox';
	function __construct()
	{
	parent::__construct();
	$this->load->database();
	}
	
	function insertData($data)
	{
	$this->db->insert($this->table, $data);
	}
	
	
	}