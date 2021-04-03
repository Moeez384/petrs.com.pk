<?php
 class Website_model extends CI_Model
 {
 	function validate()
	{
		$arr['username'] = $this->input->post('username');
		$arr['password'] = md5($this->input->post('password'));
		return $this->db->get_where('admins',$arr)->row(); 
	}


	function check($cnic){
        $this->db->where('CNIC',$cnic);
        $query=$this->db->get('list_loralai_center');
        $row=$query->row();
        if ($row) {
         return $row;
        }
    }


 }
?>