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
		$this->load->view('adminLogin');
	}

	public function adminSignup()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('role_id', 'Role', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confpwd', 'Password Confirmation', 'required');

		if ($this->form_validation->run()) {
			$data = $this->input->post();
			$data['password'] = sha1($this->input->post('password'));
			$data['confpwd'] = sha1($this->input->post('confpwd'));

			$this->load->model('query');
			if ($this->query->insertData($data)) {
				$this->session->set_flashData('message', 'Admin added');
			} else {
				$this->session->set_flashData('message', 'Failed to add admin');
			}
			redirect('welcome/adminRegister');
		} else {
			$this->adminRegister();
		}
	}


	public function adminSignin()
	{

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run()) {
			$email = $this->input->post('email');
			$password = sha1($this->input->post('password'));

			$this->load->model('query');
			$userdata = $this->query->adminExist($email, $password);
			if($userdata){
				$sessionData =[
					'user_id'=> $userdata->user_id,
					'username'=> $userdata->username,
					'email'=> $userdata->email,
					'role_id'=> $userdata->role_id,

				];
				$this->session->set_userData($sessionData);
				return redirect("admin/dashboard");
			}
			else{
				$this->session->set_flashData('message', 'No user in database');
				return redirect("welcome/adminLogin");
			}
		} else {
			$this->adminLogin();
		}
	}
}
