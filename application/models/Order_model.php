<?php 
/**
 * 
 */
class Order_model extends CI_model
{
	public $nama_table = 'design';
	public $id='id_design';
	public $username = 'username_member';
	function __construct()
	{
		parent::__construct();
	}

//ambil data digunakan untuk mengambi seluruh data dari table mahasiswa dari anidb
	function ambil_data(){
		$datasemua= $this->db->get($this->nama_table)->result();
		//$this->db->order_by($this->id, $this->order);
		//return $this->db->get($this->nama_table)->result();
		return $datasemua;
	}

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	}
	function hapus_data($id){
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table);

	}

	function edit_data($id,$data){
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table,$data);

	}

	function selesai($id,$data){
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table,$data);

	}

	function edit_selesai($id,$data){
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table,$data);	
	}	

	function ambil_data_id($id){
		$this->db->where($this->username, $id);
		return $this->db->get($this->nama_table)->result();
	}	
	function ambil_data_id_order($id){
		$this->db->where($this->id, $id);
		return $this->db->get($this->nama_table)->row();
	}	

}