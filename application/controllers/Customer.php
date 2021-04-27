<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('customer_model');
			$this->load->helper('url'); 
			$this->load->database();
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

		$order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results =$this->customer_model->get_customer($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

        
	}

    public function bindLoadCustomerByid()
	{
		$this->customer_model->get_customerByid();
	}

    public function bindSaveCustomer()
	{

		
		if($this->input->post('type')=="1")
		{
		$data['FirstName']=$this->input->post('FirstName');
		$data['LastName']=$this->input->post('LastName');
		$data['NickName']=$this->input->post('NickName');
		$data['DateOfBirth']=$this->input->post('DateOfBirth');
		$data['PhoneNumber']=$this->input->post('Phone');
		$this->customer_model->insert_customer($data);	
		echo json_encode(array(
			"statusCode"=>200
		));
	}
        
      


		// $data = array(
		// 	'FirstName' => $this->input->post('FirstName'),
		// 	'LastName' => $this->input->post('LastName')
		// 	);

		
	}

    public function bindEditCustomer()
	{
        $this->customer_model->update_customer();
	}

	public function bindDelCustomer()
	{
		$this->customer_model->delete_customer();
	}



    
}
