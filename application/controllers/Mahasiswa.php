<?php 

 /**
 * 
 */
 class Mahasiswa extends CI_Controller
 {
	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Mahasiswa_model');  /**menampilkan data dimodel dari mahasoswa_model **/

		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}


 	}

 	function index(){

 		$data['mahasiswa']=$this->Mahasiswa_model->ambil_data();
 		$this->load->view('Mahasiswa/Mahasiswa_list',$data); //deklarasikan $data mana yang mau dikirim (1 buah array saja)

 	}

	function tambah(){

		$data=array(
		'nama' => set_value('nama'),
		'prodi' => set_value('prodi'),
		'daerah' => set_value('daerah'),
		'id' => set_value('id'),
		'button'=> 'Tambah',
		'action'=> site_url('mahasiswa/tambah_aksi'),
			
		);
	$this->load->view('Mahasiswa/mahasiswa_form',$data);

 }

function tambah_aksi(){

		$data=array(
		'nama' => $this->input->post('nama'),    //kita terima dengan methos POST
		'prodi' =>$this->input->post('prodi'),
		'daerah' =>$this->input->post('daerah'),
		

		);

		$this->Mahasiswa_model->tambah_data($data);
		redirect(site_url('mahasiswa'));
 }


 	function delete($id)
 	{
 		$this->Mahasiswa_model->hapus_data($id);
 		redirect(site_url('mahasiswa'));
 	}

 	function edit($id)
 	{

 		//data simpan ke array lalu view

 	//nama,prodi,kirim nilai yang akan kita kirim ke view, setvalue (nama) 
 		$mhs=$this->Mahasiswa_model->ambil_data_id($id);
 		$data=array(
		'nama' => set_value('nama',$mhs->nama),
		'prodi' => set_value('prodi',$mhs->prodi),
		'daerah' => set_value('daerah',$mhs->daerah),
		'id' => set_value('id',$mhs->id),
		'button'=> 'Edit',
		'action'=> site_url('mahasiswa/edit_aksi'),
			
		);
 		$this->load->view('Mahasiswa/mahasiswa_form',$data);
 	}

 	function edit_aksi(){
 	 
 	 $data=array(
		'nama' => $this->input->post('nama'),                //kita terima dengan methos POST
		'prodi' =>$this->input->post('prodi'),
		'daerah' =>$this->input->post('daerah'),
		);
 	 	$id=$this->input->post('id');
		$this->Mahasiswa_model->edit_data($id,$data);
		redirect(site_url('mahasiswa'));
		}
		
}

?>