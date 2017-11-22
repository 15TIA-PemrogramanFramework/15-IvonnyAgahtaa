<?php 

/**
* 
*/
class Galery_model extends CI_Model
{

	public $nama_table = 'galery';
	public $id = 'id_gambar';
	public $order = 'DESC';
	

	function __construct()
	{
		parent::__construct();
	}

	
	function tambah_data($data){ //data yang dikkirim dalam bentuk array
		return $this->db->insert($this->nama_table, $data);

}
function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

 }

 ?>