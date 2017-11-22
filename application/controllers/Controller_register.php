<?php 
/**
* 
*/
class Controller_register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');
	}

	function index()
	{
		$this->load->view('Member/Member_register');
	}


	function tambah()
	{
		$data=array(
			'aksi' => site_url('Controller_register/tambah_aksi'),
			'username_member' => set_value('username'),
			'password_member' => set_value('password'),
			'nama' => set_value('nama'),
			'alamat' => set_value('alamat'),
			'nohp' => set_value('nohp'),
			'email' => set_value('email'),
		);
		$this->load->view('Member/Member_register',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'username_member' => $this->input->post('username_member'),
			'password_member' => $this->input->post('password_member'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'nohp' => $this->input->post('nohp'),
			'email' => $this->input->post('email'),
			

			);
		
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'username_member', 'username_member',
			'is_unique[member.username_member]|is_unique[admin.username_admin]',
			array(
				'required'      => 'You have not provided %s.',
				'is_unique'     => 'This %s already exists.'
			)
		);
		$this->form_validation->set_rules('password_member', 'password_member', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(site_url('Controller_register'));
		}
		else
		{
			$this->Register_model->tambah_data($data);
			redirect(site_url('Login'));
		}
	}

}


?>