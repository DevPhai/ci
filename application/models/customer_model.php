<?php
class Customer_model extends CI_Model {

    public function get_customer()
    {
        $keyword = $param['keyword'];
		$this->db->select('*');
 
		$condition = "1=1";
		if(!empty($keyword)){
			$condition .= " and (FisrtName like '%{$keyword}%')";
		}
 
		$this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$query = $this->db->get('infomation');
		$data = [];
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('infomation')->where($condition)->count_all_results();
		$count = $this->db->from('infomation')->count_all_results();
		$result = array('count'=>$count,'count_condition'=>$count_condition,'data'=>$data,'error_message'=>'');
		return $result;
          
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