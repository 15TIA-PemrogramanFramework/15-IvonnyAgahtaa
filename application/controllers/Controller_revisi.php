<?php 

 /**
 * 
 */
 class Controller_revisi extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Revisi_model'); 
        $this->load->model('Order_model');  /**menampilkan data dimodel dari mahasoswa_model **/
         /**menampilkan data dimodel dari mahasoswa_model **/

 		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
 		{
 			redirect('/');
 		}


 	}

 	function index(){

 		$data['revisi']=$this->Revisi_model->ambil_data();
 		$this->load->view('Revisi/Revisi_list',$data); //deklarasikan $data mana yang mau dikirim (1 buah array saja)

 	}

 	function tambah($id){

 		$data=array(
 			'id_design' => set_value('id_design',$id),
 			'tgl_revisi' => set_value('tgl_revisi'),
 			'file_revisi' => set_value('file_revisi'),
 			'komentar' => set_value('komentar'),
 			'tgl_selesai' => set_value('tgl_selesai'),



 			'id_revisi' => set_value('id_revisi'),
 			'button'=> 'Tambah',
 			'action'=> site_url('Controller_revisi/tambah_aksi'),

 		);
 		$this->load->view('Revisi/Revisi_form',$data);

 	}

 	function tambah_aksi()
 	{

        		$data = array(
        			'file_revisi' =>"",
        			'komentar' => $this->input->post('komentar'),
                    'id_design' => $this->input->post('id_design')

        			

        		);
        		$this->Revisi_model->tambah_data($data);

        	 $dataDesain = array(
                    'hasil_design' =>"",
                    'status_design' => $this->input->post('status_desain'),

                );
                $id_design=$this->input->post('id_design');
                $this->Order_model->edit_selesai($id_design,$dataDesain);

                redirect(site_url('Controller_order/DetailOrder/'.$id_design));

        	
        
    }

    function delete($id)
    {
    	$this->Revisi_model->hapus_data($id);
    	redirect(site_url('Controller_revisi'));
    }

    function edit($id)
    {
    	$data=array(
    		'file_revisi' => set_value('file_revisi'),
    		'komentar' => set_value('komentar'),
    		'id_revisi' => set_value('id_revisi'),
    		'id_design' => set_value('id_design',$id),
    		'button'=> 'Revisi',
    		'action'=> site_url('Controller_revisi/edit_aksi'),

    	);
    	$this->load->view('Revisi/Revisi_form',$data);
    }

    function edit_aksi(){

        	$data=array(
				'id_design' => $this->input->post('id_design'),    //kita terima dengan methos POST
				'tgl_revisi' =>$this->input->post('tgl_revisi'),
				'komentar' =>$this->input->post('komentar'),
		);
		$this->Revisi_model->tambah_data($data);
		redirect(site_url('Controller_Order'));
	}

    function selesai($id,$id2)
    {   
        $data=array(
        'id_revisi' => set_value('id_revisi',$id),
        'id_design'=>set_value('id_design',$id2),
        'button'=> 'Upload',
        'action'=> site_url('Controller_revisi/selesai_aksi')
            
        );
        $this->load->view('Revisi/Revisi_hasil',$data);
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
        
        if($_FILES['file_revisi']['name'])
        {
            if ($this->upload->do_upload('file_revisi'))
            {
                $gbr = $this->upload->data();
                $data = array(
                    'file_revisi' =>$gbr['file_name'],
                    'id_revisi' => $this->input->post('id_revisi'),
                    'tgl_selesai'=>$this->input->post('tgl_selesai')
                );
                $id=$this->input->post('id_revisi');
                $this->Revisi_model->selesai($id,$data);

                $dataDesain = array(
                    'hasil_design' =>$gbr['file_name'],
                    'status_design' => $this->input->post('status_design'),

                );
                $id_design=$this->input->post('id_design');
                $this->Order_model->edit_selesai($id_design,$dataDesain);
                 redirect(site_url('Controller_Order/DetailOrder/'.$id_design));
            }
            else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                //redirect(site_url('Controller_Order/tambah')); //jika gagal maka akan ditampilkan form upload
                print_r("gagal");
            }
        }
    }


	function download($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->Revisi_model->ambil_data_id($id);
            
            $gambar = $fileInfo->file_revisi;
            //file path
            $file = 'assets/uploads/'.$gambar;            
            //download file from directory
            force_download($file, NULL);
        }

        function update_hasil_design($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->Revisi_model->ambil_data_id($id);
            
            $gambar = $fileInfo->file_revisi;
            //file path
            $file = 'assets/uploads/'.$gambar;            
            //download file from directory
            force_download($file, NULL);
        }
    }
}


}


?>