<?php
class Customer_model extends CI_Model {

    public function get_customer()
    {
  
        //$this->db->order_by('id'),'DESC');
		$data = $this->db->get('tbl_customerinfo');
		// $data = [];
		// if($query->num_rows() > 0){
		// 	foreach($query->result() as $row){
		// 		$data[] = $row;
		// 	}
		// }
        // $result = array('data'=>$data);

		return $data->result_array();
          
    }
    public function get_customerByid($id)
    {
        $data = $this->db->get_where('tbl_customerinfo', array('Customer_id' => $id));
        return  $data->result_array();
       
    }

    public function insert_customer($data)
    {
       
        $this->db->insert('tbl_customerinfo',$data);
        return true; 
    }

    public function update_customer($data,$id)
    {
        $this -> db -> where('Customer_id', $id);
        $this->db->update('tbl_customerinfo',$data);
        return true; 
    }

    public function delete_customer($id)
    {
        $this -> db -> where('Customer_id', $id);
        $this -> db -> delete('tbl_customerinfo');
        return true; 
    }

}