<?php 
/**
* 
*/
class Controller_gagallogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('btravel/btravel_gagallogin');
		}

}
?>