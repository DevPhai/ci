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
 
        $results =$this->customer_model->get_customer();
		echo json_encode($results);
        
	}

    public function bindLoadCustomerByid($id)
	{
		if($id != null)
		{
			$query = $this->customer_model->get_customerByid($id);
			echo json_encode(array(
				"statusCode"=>200,
				"data"=>$query
			));
		}
	}

    public function bindSaveCustomer()
	{

		    $data['Customer_id']=uniqid();
			$data['FirstName']=$this->input->post('FirstName');
			$data['LastName']=$this->input->post('LastName');
			$data['NickName']=$this->input->post('NickName');
			$data['DateOfBirth']=$this->input->post('DateOfBirth');
			$data['PhoneNumber']=$this->input->post('PhoneNumber');
			$data['Email']=$this->input->post('Email');
			$data['Address']=$this->input->post('Address');
			$data['Address2']=$this->input->post('Address2');
			$data['City']=$this->input->post('City');
			$data['Province']=$this->input->post('Province');
			$data['Country']=$this->input->post('Country');
			$data['PostalCode']=$this->input->post('PostalCode');
			$data['EducationalLevel']=$this->input->post('EducationalLevel');
			$data['Institution']=$this->input->post('Institution');
			$data['Major']=$this->input->post('Major');
			$data['GraduateDate']=$this->input->post('GraduateDate');
			$data['ImgProfile']=$this->input->post('ImgProfile');

			$DateOfBirth = explode('/',$data['DateOfBirth']);
			$data['DateOfBirth'] = $DateOfBirth[2] . '-' . $DateOfBirth[1] . '-' .  $DateOfBirth[0];
			$GraduateDate = explode('/',$data['GraduateDate']);
			$data['GraduateDate'] = $GraduateDate[2] . '-' . $GraduateDate[1] . '-' .  $GraduateDate[0];

			$this->customer_model->insert_customer($data);	
			echo json_encode(array(
				"statusCode"=>200
			));
		
    
	}

    public function bindEditCustomer()
	{
		$data['Customer_id']=$this->input->post('Customer_id');
		$data['FirstName']=$this->input->post('FirstName');
		$data['LastName']=$this->input->post('LastName');
		$data['NickName']=$this->input->post('NickName');
		$data['DateOfBirth']=$this->input->post('DateOfBirth');
		$data['PhoneNumber']=$this->input->post('PhoneNumber');
		$data['Email']=$this->input->post('Email');
		$data['Address']=$this->input->post('Address');
		$data['Address2']=$this->input->post('Address2');
		$data['City']=$this->input->post('City');
		$data['Province']=$this->input->post('Province');
		$data['Country']=$this->input->post('Country');
		$data['PostalCode']=$this->input->post('PostalCode');
		$data['EducationalLevel']=$this->input->post('EducationalLevel');
		$data['Institution']=$this->input->post('Institution');
		$data['Major']=$this->input->post('Major');
		$data['GraduateDate']=$this->input->post('GraduateDate');
		$data['ImgProfile']=$this->input->post('ImgProfile');

		$DateOfBirth = explode('/',$data['DateOfBirth']);
		$data['DateOfBirth'] = $DateOfBirth[2] . '-' . $DateOfBirth[1] . '-' .  $DateOfBirth[0];
		$GraduateDate = explode('/',$data['GraduateDate']);
		$data['GraduateDate'] = $GraduateDate[2] . '-' . $GraduateDate[1] . '-' .  $GraduateDate[0];

		$this->customer_model->update_customer($data);	
		echo json_encode(array(
			"statusCode"=>200
		));
	}

	public function bindDelCustomer($id)
	{
		$this->customer_model->delete_customer($id);
		echo json_encode(array(
			"statusCode"=>200
		));
	}


    
    
}