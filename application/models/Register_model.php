<?php 
/**
* 
*/
class Register_model extends CI_Model	{
	
	public $nama_table_member = 'member';
	public $nama_table_admin = 'admin';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table_member,$data);
	}


}
?>