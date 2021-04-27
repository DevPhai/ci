<?php
class Customer_model extends CI_Model {

    public function get_customer()
    {
  
        //$this->db->order_by('id'),'DESC');
		$data = $this->db->get('infomation');
		// $data = [];
		// if($query->num_rows() > 0){
		// 	foreach($query->result() as $row){
		// 		$data[] = $row;
		// 	}
		// }
        // $result = array('data'=>$data);

		return $data->result_array();
          
    }
    public function get_customerByid()
    {
        
    }

    public function insert_customer($data)
    {
       
        $this->db->insert('infomation',$data);
        return true; 
    }

    public function update_customer()
    {
        
    }

    public function delete_customer()
    {
        
    }

}