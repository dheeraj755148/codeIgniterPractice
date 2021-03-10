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
	public function adminRegister()
	{
		$this->load->model('query');
		$roles = $this->query->getRoles();
		$this->load->view('adminRegister', ['roles' => $roles]);
	}

	public function adminLogin()
	{
		echo 'login';
	}

	public function adminSignup()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('role_id', 'Role', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confpwd', 'Password Confirmation', 'required');
		
		if($this->form_validation->run()){
			echo "validated";
		}
		else{
			$this->adminRegister();
		}
	
	}
}
