<?php 

/**
* 
*/
class Revisi_model extends CI_Model
{

	public $nama_table = 'revisi';
	public $id = 'id_revisi';
	public $order = 'DESC';
	

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil seluruh data mahasiswa  "select*from mahasiswa order by id"
	
	function ambil_data(){
		$this->db->order_by($this->id, $this->order);
		return /** mengebalikan nilai **/ $this->db->get($this->nama_table) ->result();  /** result untuk menampung nilai dalam bentuk array **/
	}

	function tambah_data($data){ //data yang dikkirim dalam bentuk array
		return $this->db->insert($this->nama_table, $data);

	}
	function hapus_data($id){ //data yang dikkirim dalam bentuk array
		$this->db->where($this->id,$id);
		$this->db->delete($this->nama_table);

	}

	function edit_data($id,$data){ //data yang dikkirim dalam bentuk array
		$this->db->where($this->id,$id);
		$this->db->update($this->nama_table,$data);

	}
	function ambil_data_id($id){
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();  //ambil data per row
	}
	function cek_login($username,$password){
		$this->db->where('nama',$username);
		$this->db->where('prodi',$password);

		return $this->db->get($this->nama_table)->row();  
	}

	function selesai($id,$data){
	$this->db->where($this->id,$id);
	return $this->db->update($this->nama_table,$data);

	}

	function ambil_data_desain($id){
		$this->db->where("id_design",$id);
		return $this->db->get($this->nama_table)->result();
	}

	function banyak_revisi($id_design){
			$query = $this->db->select('*');
			$query = $this->db->from($this->nama_table);
			$query=$this->db->where('id_design', $id_design);
			 $query = $this->db->get();
            $responce = $query->num_rows();
            	return $responce;
	}	

 }