<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		phpinfo();
	}
	public function Dashboard()
	{	
		$this->load->view('header');
		$this->load->view('firstAttempt'); /* Loading view */
		$this->load->view('footer');
		
	}
	public function Argument($name)
	{		/* Argument testing */
		echo $name;
	}
}
