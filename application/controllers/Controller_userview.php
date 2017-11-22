<?php 
/**
 * 
 */
 class Controller_userview extends CI_Controller
 {
 	
 	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('Benar/index');
		}

 } ?>