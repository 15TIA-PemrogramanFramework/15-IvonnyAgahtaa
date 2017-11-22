<?php 

 /**
 * 
 */
 class Controller_Order extends CI_Controller
 {
	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Order_model');  /**menampilkan data dimodel dari mahasoswa_model **/

        $this->load->model('Revisi_model');

		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}


 	}

 	function index(){

 		$data['design']=$this->Order_model->ambil_data();
 		$this->load->view('Order/Order_list',$data); //deklarasikan $data mana yang mau dikirim (1 buah array saja)

 	}



 	function indexuser($id){

 		$data['design']=$this->Order_model->ambil_data_id($id);
 		$this->load->view('Order/Order_list',$data); //deklarasikan $data mana yang mau dikirim (1 buah array saja)

 	}

	function tambah(){

		$data=array(
		
		'username_member' => set_value('username_member'),
		'jenis_design' => set_value('jenis_design'),
		'ukuran_kertas' => set_value('ukuran_kertas'),
		'saran_warna' => set_value('saran_warna'),
		'deskripsi_design' => set_value('deskripsi_design'),
		'status_design' => set_value('status_design'),

		
		'id_design' => set_value('id_design'),
		'button'=> 'Tambah',
		'action'=> site_url('Controller_Order/tambah_aksi'),
			
		);
	$this->load->view('Order/Order_form',$data);

 }



	function tambah_aksi()
	{


		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docs|txt|rar|zip'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '8000'; //maksimum besar file 3M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['resource']['name'])
        {
        	if ($this->upload->do_upload('resource'))
        	{
        		$gbr = $this->upload->data();
        		$data = array(
        			'resource' =>$gbr['file_name'],
        			'username_member' => $this->input->post('username_member'),
        			'jenis_design' => $this->input->post('jenis_design'),
        			'ukuran_kertas' => $this->input->post('ukuran_kertas'),
        			'saran_warna' => $this->input->post('saran_warna'),
        			'deskripsi_design' => $this->input->post('deskripsi_design'),
        			'status_design' => $this->input->post('status_design'),

        		);
                $usermember = $this->input->post('username_member');
        		$this->Order_model->tambah_data($data);
        		redirect(site_url('Controller_Order/indexuser/'.$usermember));
        	}
        	else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
        		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                //redirect(site_url('Controller_Order/tambah')); //jika gagal maka akan ditampilkan form upload
                print_r("gagal");
            }
        }

                     
      
    }


 	function delete($id)
 	{
 		$this->Order_model->hapus_data($id);
 		redirect(site_url('design'));
 	}


 	 function selesai($id)
 	{	
 		$data=array(

		'status_design' => set_value('status_design'),

		
		'id_design' => set_value('id_design',$id),
		'button'=> 'Upload',
		'action'=> site_url('Controller_Order/selesai_aksi'),
			
		);
 		$this->load->view('Order/Order_Hasil_design',$data);
 	}

 	 function selesai_aksi()
 	{
 		
 		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docs|txt|rar|zip'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '8000'; //maksimum besar file 3M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['hasil_design']['name'])
        {
        	if ($this->upload->do_upload('hasil_design'))
        	{
        		$gbr = $this->upload->data();
        		$data = array(
        			'hasil_design' =>$gbr['file_name'],
        			'id_design' => $this->input->post('id_design'),
        			'status_design' => $this->input->post('status_design')

        		);
        		$id=$this->input->post('id_design');
                print_r($data);
        		//$this->Order_model->selesai($id,$data);
                //print_r($this->Order_model->selesai($id,$data));
        		redirect(site_url('Controller_Order'));
        	}
        	else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
        		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                //redirect(site_url('Controller_Order/tambah')); //jika gagal maka akan ditampilkan form upload
                print_r("gagal");
            }
        }
 	}



 	function edit($id)
 	{

 		//data simpan ke array lalu view

 	//nama,prodi,kirim nilai yang akan kita kirim ke view, setvalue (nama) 
 		$mhs=$this->Order_model->ambil_data_id($id);
 		$data=array(
		'jenis_design' => set_value('jenis_design',$mhs->jenis_design),
		'ukuran_kertas' => set_value('ukuran_kertas',$mhs->ukuran_kertas),
		'saran_warna' => set_value('saran_warna',$mhs->saran_warna),
		'isi_design' => set_value('isi_design',$mhs->isi_design),
		
		'id_design' => set_value('id_design',$mhs->id_design),
		'button'=> 'Edit',
		'action'=> site_url('Controller_Order/edit_aksi'),
			
		);
 		$this->load->view('Order/Order_form',$data);
 	}

 	function edit_aksi(){
 	 
 	 $data=array(
		'jenis_design' => $this->input->post('jenis_design'),    //kita terima dengan methos POST
		'ukuran_kertas' =>$this->input->post('ukuran_kertas'),
		'saran_warna' =>$this->input->post('saran_warna'),
		'isi_design' =>$this->input->post('isi_design'),
		
		);
 	 	$id=$this->input->post('id_design');
		$this->Order_model->edit_data($id_design,$data);
		redirect(site_url('Controller_Order'));
		
        }


        function DetailOrder($id){
        $data['order'] = $this->Order_model->ambil_data_id_order($id);
        $data['revisi']= $this->Revisi_model->ambil_data_desain($id);
        $data['banyak']=$this->Revisi_model->banyak_revisi($id);
        $this->load->view('Order/DetailOrder',$data);
        }
		
}

?>