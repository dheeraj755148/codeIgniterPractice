<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function dashboard()
    {
        $this->load->view('dashboard');
    }

    public function addCollege()
    {
        $this->load->view('addCollege');
    }
    public function addStudent()
    {
        echo 'addStudent';
    }
    public function addCoadmin()
    {
        $this->load->model('query');
        $colleges = $this->query->getColleges();
        $this->load->view('addCoadmin',['colleges'=>$colleges]);
    }

    public function createCollege(){
		$this->form_validation->set_rules('collegeName', 'College Name', 'required');
		$this->form_validation->set_rules('branch', 'Branch', 'required');
        if($this->form_validation->run()){
            $data = $this->input->post();
            $this->load->model('query');

            if($this->query->insertCollege($data)){
                $this->session->set_flashdata('message','College Added');
            }
            else{
                $this->session->set_flashdata('message','College added unsuccessful');
            }
            return redirect('admin/addCollege');
        }
        else{
            $this->addCollege();
        }
    }

    public function createCoadmin(){
        $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('college_id', 'College Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confpwd', 'Password Confirmation', 'required');

        if($this->form_validation->run()){
            echo 'validated';
        }
        else{
            $this->addCoadmin();
        }
    }


    public function __construct() //protecting the pages
    {
        parent::__construct();
        if (!$this->session->userData('user_id')) {
            return redirect('welcome/adminLogin');
        }
    }
}
