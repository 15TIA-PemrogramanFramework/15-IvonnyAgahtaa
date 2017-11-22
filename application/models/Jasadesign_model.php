<?php 
/**
* 
*/
class btravel_model extends CI_Model	{
	public $nama_table_admin = 'admin';
	public $nama_table_member = 'member';
	public $nama_table_editor = 'editor';
	public $nama_table_design = 'design';
	public $id = 'id_design';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table_paket)->result();
	}
	
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table_paket)->row();
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table_paket,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table_paket);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table_paket,$data);
	}

	function cek_login($username,$password)
	{
		$this->db->where('username_member',$username);
		$this->db->where('password_member',$password);
		return $this->db->get($this->nama_table_member)->row();
	}

	function cek_login_admin($username,$password)
	{
		$this->db->where('username_admin',$username);
		$this->db->where('password_admin',$password);
		return $this->db->get($this->nama_table_admin)->row();
	}

	function cek_login_admin($username,$password)
	{
		$this->db->where('username_admin',$username);
		$this->db->where('password_admin',$password);
		return $this->db->get($this->nama_table_editor)->row();
	}

	function booking_data($data)
	{
		return $this->db->insert($this->nama_table_booking,$data);
	}

	function ambil_data_booking_idpaket($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table_paket)->row();
	}

	

}
 ?>