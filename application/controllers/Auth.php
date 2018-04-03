<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		//$this->output->enable_profiler(TRUE);
		$this->load->model('m_auth');
		$this->load->model('M_Alumni');
	}

	// List all your items
	public function index( $offset = 0 )
	{

	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update()
	{
		$id = $this->session->userdata('id');

		$data['page_title'] = 'Dashboard';
		$data['page_desc'] = 'Halaman Dasbor';
		$data['user'] = $this->m_auth->get_id_row($id);
		$data['page'] = $this->load->view('user/v_edit','',true);

		$this->load->view('v_base',$data);
	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}

	public function login()
	{
		//check jika tombol submit ditekan
		if(!$this->input->post('username')){
			$data['page'] = "Login";
			$this->load->view('v_login', $data);
		}else
		{
		//handling jika tombol submit ditekan
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$usr = $this->m_auth->login($username,$password);
			if(!$usr)
			{
				$data['nama'] = $username;
				$this->load->view('v_error', $data);
			}else{
				//set session
				$user = $usr->row();
				$array = array(
					'is_logged_in' => true,
					'user_id' => $user->id,
					'level' => $user->level,
					'nama' => $user->nama
				);
				
				$this->session->set_userdata( $array );
				redirect('dashboard');
			}
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}

	public function register()
	{
		$data['page'] = "Register Akun";
		$this->load->view('v_reg', $data);
	}

	public function cekRegister()
	{
		$nis = $this->input->post('nis');

		$data = $this->M_Alumni->getRow($nis);
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
