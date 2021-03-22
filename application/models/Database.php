<?php
class Database extends CI_Model{

    public function show_datas()
	{
		$this->db->select('*');
		$this->db->from('user_list');
		$query = $this->db->get();
		return $query->result();
	}

    public function show_name()
	{
		$this->db->select('*');
		$this->db->from('trans_user');
		$query = $this->db->get();
		return $query->result();
	}
    
    public function user_registration($data)
    { 
        
         $this->db->insert('trans_user',$data);
        
    }
}