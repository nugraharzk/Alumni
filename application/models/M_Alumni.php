<?php 

	/**
	* 
	*/
	class M_Alumni extends CI_Model
	{
		var $id = 1;
		function __construct()
		{
			parent::__construct();
		}

		public function getData()
		{
			return $this->db->get('alumni');
		}

		public function getDatas()
		{
			return $this->db->select('*')->from('alumni')->get()->result();
		}

		public function getRow($nis)
		{
			return $this->db->where('nis',$nis)->get('alumni')->row();
		}
	}

 ?>