<?php 
/**
 * 
 */
class Admin_model extends CI_model
{
	public $nama_table = 'admin';
	public $id='username_admin';

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

function ambil_data_id($id){
		$this->db->where($this->id, $id);
		return $this->db->get($this->nama_table)->row();
	}	
	
	function cek_login($username,$password){
		$this->db->where('username_admin', $username);
		$this->db->where('password_admin', $password);
		
		return $this->db->get($this->nama_table)->row();
	}
}