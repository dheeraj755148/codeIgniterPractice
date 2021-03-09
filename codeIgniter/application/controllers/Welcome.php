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
		$data = array(
			array(
				'name' => 'dheeraj',
				'age' => '22',
				'gender' => 'male',
			),
			array(
				'name' => 'Raj',
				'age' => '21',
				'gender' => 'male',
			)
		);

		/* $this->load->view('firstAttempt', ['data' => $data]); */ /* Loading view with array */
		$this->load->view('firstAttempt');
	}
	public function adminRegister(){
		$this->load->view('adminRegister');
	}

	public function adminLogin(){
		echo 'login';
	}
}
