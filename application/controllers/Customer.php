<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('customer_model');
			;
	}

	public function index()
	{
        $this->load->view('share/default_css');
        $this->load->view('customer/Customercss');
        $this->load->view('share/header');
		$this->load->view('customer/Customer_manage');
        $this->load->view('customer/Customer_Modal');
        $this->load->view('share/default_js');
        $this->load->view('customer/Customerjs');

	}

	public function bindLoadListCustomer()
	{
        $this->member_model->get_customer();
	}

    public function bindLoadCustomerByid()
	{
		$this->member_model->get_customerByid();
	}

    public function bindSaveCustomer()
	{
	
		$data = [
			'FirstName' => $this->request->getPost('FirstName'), 
			'LastName' => $this->request->getPost('LastName'),

		];

		// $this->member_model->insert_customer($data);
	}

    public function bindEditCustomer()
	{
        $this->member_model->update_customer();
	}

	public function bindDelCustomer()
	{
		$this->member_model->delete_customer();
	}
    
}
