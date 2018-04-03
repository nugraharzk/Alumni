<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Welcome extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Alumni');
		}

		public function index()
		{
			$data['page'] = "Home";
			$query = $this->M_Alumni->getData();
			$data['json'] = json_encode($query);
			$this->load->view('v_home', $data);
		}

		public function dataTable()
		{
			
			$output = $this->M_Alumni->getData();

			foreach ($output->result() as $row) {
				$data[] = array(
					$row->nis,
					$row->nama,
					$row->kota_lahir,
					$row->alamat
				);
			}

			$oke = array(
				"data" => $data
			);

      		echo json_encode($oke);
      		exit();
		}

		public function findAlumni()
		{
			$data['page'] = "Cari Alumni";
			$this->load->view('v_find', $data);
		}

		public function statistic()
		{
			$data['page'] = "Statistik";
			$data['alumni'] = $this->M_Alumni->getDatas();
			$this->load->view('v_stat', $data);
		}
	}

 ?>