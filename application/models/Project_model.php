<?php

class Project_model extends CI_Model{

    function check($cnic){
        $this->db->where('CNIC',$cnic);
        $query=$this->db->get('list_loralai_center');
        if ($query) {
         return $query->row();
        }
    }

    function verify($phone){
        $this->db->where('Phone_No',$phone);
        $query=$this->db->get('list_loralai_center');
        if($query){
            return $query->row();
        }
        else{
            return 'No Data Found';
        }
    }

    function validate()
    {
        $arr['username'] = $this->input->post('username');
        $arr['password'] = $this->input->post('password');
        return $this->db->get_where('admins',$arr)->row(); 
    }

    function updateProject($data){
        $CNIC=$data['CNIC'];
        $insert_data['photo']=$data['photo'];
        $this->db->where('CNIC',$CNIC);
        $query=$this->db->update('list_loralai_center',$insert_data);
        if ($query) {
            return true;
        }
        else{
            return false;
        }
    }

    public function addProject ($data){
        $insert_data['name']=$data['name'];
        $insert_data['post']=$data['post'];
        $insert_data['Results']=$data['Results'];
        $insert_data['BookColour']=$data['BookColour'];
        $insert_data['photo']=$data['photo'];
        $query=$this->db->insert('results',$insert_data);
        if ($query) {
            return true;
        }
        else{
            return false;
        }
    }

    function quettaResult($cnic){
        $this->db->where('CNIC',$cnic);
        $query=$this->db->get('list_quetta_center');
        if ($query) {
         return $query->row();
        }
    }

     function getRes($phone){
        $this->db->where('Phone_No',$phone);
        $query=$this->db->get('list_quetta_center');
        if($query){
            return $query->row();
        }
    
    }

    public function View($cnic){
        $this->db->where('CNIC',$cnic);
        $query=$this->db->get('list_quetta_center');
        if ($query) {
         return $query->result();
        }
    }

    public function get($phone){
        $this->db->where('Phone_No',$phone);
        $query=$this->db->get('list_quetta_center');
        if($query){
            return $query->result();
        }
    }

    public function viewResult($cnic){
        $this->db->where('CNIC',$cnic);
        $query=$this->db->get('list_loralai_center');
        if ($query) {
         return $query->result();
        }
    }

    public function getResult($phone){
        $this->db->where('Phone_No',$phone);
        $query=$this->db->get('list_loralai_center');
        if($query){
            return $query->result();
        }
    }


    public function fetch_row(){
        $query = $this->db->query('SELECT * FROM counter_table');
        return $query->num_rows();
    }

    public function find($ip){
        $this->db->where('ip_address',$ip);
        $query=$this->db->get('counter_table');
        return $query->num_rows();
    }

    public function insertResult($ip){
        $insert_data['ip_address']=$ip;
        $query=$this->db->insert('counter_table',$insert_data);
        if ($query) {
            return true;
        }
        else{
            return false;
        }
    }

    public function insertLinks($data){
        $insert['pid']=$data['quer'];
        $insert['uid']=$data['id'];
        $query=$this->db->insert('links',$insert);
        if ($query) {
            return true;
        }
    }

    public function getUserIdByName($data){
        $name=$data['name'];
        $this->db->where('name',$name);
        return $this->db->get('users')->row('id');
    }

    public function checkLinks($data){
        $pid=$data['quer'];
        $uid=$data['id'];
        $this->db->where('pid',$pid);
        $this->db->where('uid',$uid);
        $query=$this->db->get('links');
        return $query->num_rows();
    }

    public function getProjectId($data){
        $projectName=$data['project'];
        $this->db->where('project_name',$projectName);
        return $this->db->get('project')->row('id');
    }

    public function insertUser($data){
        $insert['id']=$data['id'];
        $insert['name']=$data['name'];
        $insert['email']=$data['email'];
        $insert['pwd']=$data['pwd'];
        // $insert['project']=$data['project'];

        $query=$this->db->insert('users',$insert);
        if ($query) {
            return true;
        }
    }

    public function insertProject($data){
        $query=$this->db->insert('project',$data);
        if ($query) {
            return true;
        }
    }

    public function getprojects(){
        $query=$this->db->get('project');
        if ($query) {
            return $query->result();
        }
    }

    public function getUserId(){
        $query=$this->db->get('users');
        if ($query) {
            return $query->result();
        }
    }

    public function allUsers(){
        $query=$this->db->get('users');
        if ($query) {
            return $query->result();
        }
    }

    public function deleteUser($id){
        $this->db->where('id',$id);
        $query=$this->db->delete('users');
        if ($query) {
            return true;
        }
    }

    public function getProject(){
        $query=$this->db->get('project');
        if ($query) {
            return $query->result();
        }
    }

    public function deleteProjects($id){
        $this->db->where('id',$id);
        $query=$this->db->delete('project');
        if ($query) {
            return true;
        }
    }

    public function searchProject($id){
        $this->db->where('id',$id);
        $query=$this->db->get('project');
        if ($query) {
            return $query->row();
        }
    }

    public function gettesttable($name){
        $this->db->where('project_name',$name);
        $query=$this->db->get('test');
        return $query->result();
    }

    public function assignedProjects(){
        $this->db->select('name,email,project_name,uid,pid');
        $this->db->from('users');
        $this->db->join('links','links.uid=users.id');
        $this->db->join('project','project.id=links.pid');
        $query=$this->db->get();
        return $query->result();
    }

    // public function assignedProjects(){
    //     $query=$this->db->get('users');
    //     if ($query) {
    //         return $query->result();
    //     }
    //     else{
    //         return false;
    //     }
    // }

    public function getmyprojects($id){
        $this->db->where('uid',$id);
        $query=$this->db->get('links');
        if ($query) {
           return $query->result();
        }
        else{
            return false;
        }
    }

    public function gettheresult($id){
        $this->db->where('id',$id);
        $query=$this->db->get('project');
        return $query->row();
    }

    public function deleteLinks($id,$Idd){
        $this->db->where('uid',$id);
        $this->db->where('pid',$Idd);
        $query=$this->db->delete('links');
        if ($query) {
            return true;
        }
        else{
            return false;
        }
    }

    public function deletetest($id){
        $this->db->where('id',$id);
        $query=$this->db->delete('test');
        if ($query) {
             return true;
        }
        else{
            return false;
        }

    }

    public function addpost($data){
        $this->db->insert('jobpost',$data);
        return true;
    }

    public function alljobposts(){
        $query=$this->db->get('jobpost');
        return $query->result();
    }

    public function deletepost($id){
        $this->db->where('id',$id);
        $this->db->delete('jobpost');
        return true;
    }
}
?>