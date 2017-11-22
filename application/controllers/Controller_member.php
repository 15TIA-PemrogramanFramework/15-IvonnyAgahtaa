<?php 

 /**
 * 
 */
 class Controller_member extends CI_Controller
 {
	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Member_model');  /**menampilkan data dimodel dari mahasoswa_model **/

		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}


 	}

 	function index(){

 		$data['member']=$this->Member_model->ambil_data();
 		$this->load->view('Member/Member_list2',$data); //deklarasikan $data mana yang mau dikirim (1 buah array saja)

 	}



	function tambah(){

		$data=array(
		'nama' => set_value('nama'),
		'alamat' => set_value('alamat'),
		'nohp' => set_value('nohp'),
		'email' => set_value('daerah'),
		'username' => set_value('username'),
		'password' => set_value('password'),


		
		'button'=> 'Tambah',
		'action'=> site_url('member/tambah_aksi'),
			
		);
	$this->load->view('Member/Member_form',$data);

 }

function tambah_aksi(){

		$data=array(
		'nama' => $this->input->post('nama'),    //kita terima dengan methos POST
		'alamat' =>$this->input->post('alamat'),
		'nohp' =>$this->input->post('nohp'),
		'email' =>$this->input->post('email'),
		'username_member' =>$this->input->post('username_member'),
		'passsword' =>$this->input->post('passsword'),



		);

		$this->Member_model->tambah_data($data);
		redirect(site_url('Controller_member'));
 }


 	function delete($id)
 	{
 		$this->Member_model->hapus_data($id);
 		redirect(site_url('Controller_member'));
 	}

 	function edit($id)
 	{

 		//data simpan ke array lalu view

 	//nama,prodi,kirim nilai yang akan kita kirim ke view, setvalue (nama) 
 		$mhs=$this->Member_model->ambil_data_id($id);
 		$data=array(
		'nama' => set_value('nama',$mhs->nama),
		'alamat' => set_value('prodi',$mhs->alamat),
		'nohp' => set_value('nohp',$mhs->nohp),
		'email' => set_value('email',$mhs->email),
		'username_member' => set_value('username_member',$mhs->username_member),
		'password_member' => set_value('password_member',$mhs->password_member),

		
		'button'=> 'Edit',
		'action'=> site_url('Controller_member/edit_aksi'),
			
		);
 		$this->load->view('Member/Member_datadiri',$data);
 	}

 	 	function editnext($id)
 	{

 		//data simpan ke array lalu view

 	//nama,prodi,kirim nilai yang akan kita kirim ke view, setvalue (nama) 
 		$mhs=$this->Member_model->ambil_data_id($id);
 		$data=array(
		'nama' => set_value('nama',$mhs->nama),
		'alamat' => set_value('prodi',$mhs->alamat),
		'nohp' => set_value('nohp',$mhs->nohp),
		'email' => set_value('email',$mhs->email),
		'username_member' => set_value('username_member',$mhs->username_member),
		'password_member' => set_value('password_member',$mhs->password_member),

		
		'button'=> 'Edit',
		'action'=> site_url('Controller_member/edit_aksi'),
			
		);
 		$this->load->view('Member/Member_form',$data);
 	}

 	function edit_aksi(){
 	 
 	 $data=array(
		'nama' => $this->input->post('nama'),    //kita terima dengan methos POST
		'alamat' =>$this->input->post('alamat'),
		'nohp' =>$this->input->post('nohp'),
		'email' =>$this->input->post('email'),
		'username_member' =>$this->input->post('username_member'),
		'password_member' =>$this->input->post('password_member'),
		);
 	 	$id=$this->input->post('username_member');
		$this->Member_model->edit_data($id,$data);
		redirect(site_url('Controller_member/edit/'.$id));
		}
		
}

?>