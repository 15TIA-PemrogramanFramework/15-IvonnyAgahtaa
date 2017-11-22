<?php 

 /**
 * 
 */
 class Controller_galery extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Galery_model');  /**menampilkan data dimodel dari mahasoswa_model **/

 		

 	}

 	function index(){

 		$data['galery']=$this->Galery_model->ambil_data();
 		$this->load->view('Revisi/Galery_list',$data); //deklarasikan $data mana yang mau dikirim (1 buah array saja)

 	}

 	function tambah(){

 		$data=array(
 			'file_gambar' => set_value('file_gambar'),
                        'jenis' => set_value('jenis'),
                        'keterangan' => set_value('keterangan'),

 
 			'id_gambar' => set_value('id_gambar'),
 			'button'=> 'Tambah',
 			'action'=> site_url('Controller_galery/tambah_aksi'),

 		);
 		$this->load->view('Revisi/Galery_form',$data);

 	}

 	function tambah_aksi()
 	{

 		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      //  $config['upload_path'] = './assets/uploads/'; //path folder
         $config['upload_path'] = './assets_user/images/portfolio/';

        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docs|txt|rar|zip'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '8000'; //maksimum besar file 3M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['file_gambar']['name'])
        {
        	if ($this->upload->do_upload('file_gambar'))
        	{
        		$gbr = $this->upload->data();
        		$data = array(
        			'file_gambar' =>$gbr['file_name'],
                                'jenis' =>$this->input->post('jenis'),
                                'keterangan' =>$this->input->post('keterangan')

        		);
        		$this->Galery_model->tambah_data($data);
        		redirect(site_url('Controller_galery'));
        	}
        	else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
        		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                //redirect(site_url('Controller_Order/tambah')); //jika gagal maka akan ditampilkan form upload
        		print_r("gagal");
        	}
        }}
}


?>