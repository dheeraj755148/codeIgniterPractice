<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function dashboard()
    {
        # code...
        $this->load->view('dashboard');
    }

}