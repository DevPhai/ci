<?php
class Customer_model extends CI_Model {

    public function get_customer()
    {
  

		$data = $this->db->get('tbl_customerinfo');

		return $data->result_array();
          
    }
    public function get_customerByid($id)
    {
        $data = $this->db->get_where('tbl_customerinfo', array('Customer_id' => $id));
        return  $data->result_array();
       
    }

    public function insert_customer($data)
    {
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500';
        $config['max_width'] = '600';
        $config['max_hight'] = '600';

        $this->load->library('upload', $config);
     

        if ( !  $this->upload->do_upload('file'))
        {
             echo $this->upload->display_errors();
             return false;
        }
        else
        {
            $UploadData = $this->upload->data();
            $filename = $UploadData['file_name'];
            $data['ImgProfile'] = $filename;
            return $this->db->insert('tbl_customerinfo',$data);
        }

    }

    public function update_customer($data,$id)
    {
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500';
        $config['max_width'] = '600';
        $config['max_hight'] = '600';

        $this->load->library('upload', $config);

        if ( !  $this->upload->do_upload('file'))
        {
                echo $this->upload->display_errors(); 
                
                return false;
        }
        else
        {
            $UploadData = $this->upload->data();
            $filename = $UploadData['file_name'];
            $data['ImgProfile'] = $filename;
           
            $this ->db->where('Customer_id', $id);
            return  $this->db->update('tbl_customerinfo',$data);
        }

    }

    public function delete_customer($id)
    {
        $this->db->where('Customer_id', $id);
        return $this->db->delete('tbl_customerinfo');
         
    }

}