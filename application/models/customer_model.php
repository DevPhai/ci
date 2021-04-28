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
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '3000';
        $config['max_hight'] = '3000';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('ImgProfile')){
            echo $this->upload->display_errors();  
        }
        else{

            $UploadData = $this->upload->data();
            $filename = $UploadData['file_name'];
            $data['ImgProfile'] = $filename;
            $this->db->insert('tbl_customerinfo',$data);
            return true; 
         }
       
       
    }

    public function update_customer($data,$id)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '3000';
        $config['max_hight'] = '3000';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('ImgProfile')){
            echo $this->upload->display_errors();  
        }
        else{

            $UploadData = $this->upload->data();
            $filename = $UploadData['file_name'];
            $data['ImgProfile'] = $filename;
            $this -> db -> where('Customer_id', $id);
            $this->db->update('tbl_customerinfo',$data);
            return true; 
         }
    }

    public function delete_customer($id)
    {
        $this -> db -> where('Customer_id', $id);
        $this -> db -> delete('tbl_customerinfo');
        return true; 
    }

}