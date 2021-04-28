<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAPI extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
	}

	public function index()
	{
        $this->load->view('share/default_css');
        $this->load->view('userapi/UserApiCSS');
        $this->load->view('share/header');
		$this->load->view('share/NavBar');
		$this->load->view('userapi/UserApi_manager');
        $this->load->view('share/default_js');
        $this->load->view('userapi/UserApiJS');

	}




    
    
}