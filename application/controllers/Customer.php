<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function index()
	{
        $this->load->helper('url'); 
        $this->load->view('share/default_css');
        $this->load->view('customer/Customercss');
		$this->load->view('customer/Customer_manage');
        $this->load->view('customer/Customer_Modal');
        $this->load->view('share/default_js');
        $this->load->view('customer/Customerjs');
        
      
	
	}
}
