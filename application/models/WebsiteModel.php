<?php

class WebsiteModel extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function fetch_user_post_all_dt($post,$projects, $user) {
		$this->db->from('user_post');
		$this->db->where('post_name', $post);
		$this->db->where('project', $projects);
		$this->db->where('user_id', $user);
		$this->db->where('challan_submitted', 1);

		$query = $this->db->get()->result();
		return $query;
	}

	public function fetch_user_bank($id) {
		$query = $this->db->from('user_post')->where('user_id', $id)->order_by('id','desc')->limit(1)->get()->result_array()[0]['bank_name'];
		return $query;
	}

	public function get_project($id) {
		$query = $this->db->from('user_post')->where('user_id', $id)->order_by('id','desc')->limit(1)->get()->result_array()[0]['project'];
		return $query;
	}

	public function get_post($id) {
		$query = $this->db->from('user_post')->where('user_id', $id)->order_by('id','desc')->limit(1)->get()->result_array()[0]['post_name'];
		return $query;
	}

	public function get_postt_name($id) {
		$query = $this->db->from('post')->where('id', $id)->get()->result_array()[0]['name'];
		return $query;
	}

	public function get_postt_date($id) {
		$query = $this->db->from('post')->where('id', $id)->get()->result_array()[0]['test_date'];
		return $query;
	}

	public function get_post_all($id) {
		$query = $this->db->from('post')->where('id', $id)->get()->result_array()[0];
		return $query;
	}

	public function signup($data) {
		$this->db->insert('signup', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function update_signup($data, $id) {
		$this->db->where('id', $id);
		$this->db->update('signup', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

	public function userdata($id) {
		$this->db->from('signup');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function signup_edu($data) {
		$this->db->insert('user_education', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_user_education($id) {
		$this->db->from('user_education');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_user_education2($id) {
		$this->db->from('user_education');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_user_cnic($id) {
		$query = $this->db->from('signup')->where('id', $id)->get()->result_array()[0]['cnic_no'];
		return $query;
	}

	public function update_edu($data, $edu_id) {
		$this->db->where('id', $edu_id);
		$this->db->update('user_education', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

	public function add_user_experience($data) {
		$this->db->insert('user_experience', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_user_experience($id) {
		$this->db->from('user_experience');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_user_experience2($id) {
		$this->db->from('user_experience');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_exp($data, $edu_id) {
		$this->db->where('id', $edu_id);
		$this->db->update('user_experience', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

	public function add_user_post($data) {
		$this->db->insert('user_post', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_user_post($id) {
		$this->db->from('user_post');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function user_cnic_login($cnic) {
		$this->db->from('signup');
		$this->db->where('cnic_no', $cnic);
		$query = $this->db->get();
		return $query->result();
	}

	public function user_email_login($email) {
		$this->db->from('signup');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result();
	}

	public function user_pass_login($email, $cnic) {
		$this->db->from('signup');
		$this->db->where('email', $email);
		$this->db->where('cnic_no', $cnic);
		$query = $this->db->get();
		return $query->result();
	}	

	public function fetch_all_projects() {
		$this->db->from('projects');
		$this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

	public function fetch_ongoing_projects() {
		$this->db->from('projects');
		$this->db->where('status', 1);
		$query = $this->db->get();

		return $query->result();
	}

	public function fetch_completed_projects() {
		$this->db->from('projects');
		$this->db->where('status', 2);
		$query = $this->db->get();

		return $query->result();
	}

	public function fetch_top_news() {
		$this->db->from('news');
		$this->db->order_by('id', 'desc');
		$this->db->limit('3');
		$query = $this->db->get();

		return $query->result();
	}

	public function fetch_latest_single_news() {
		$this->db->from('news');
		$this->db->order_by('id', 'desc');
		$this->db->limit('1');
		$query = $this->db->get();

		return $query->result();
	}

	public function fetch_ceo_msg() {
		$this->db->from('ceo_message');
		$query = $this->db->get();

		return $query->result();
	}

	public function fetch_services() {
		$this->db->from('service');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();

		return $query->result();
	}	

	public function fetch_divisions() {
		$this->db->from('divisions');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();

		return $query->result();
	}	

	public function fetch_associates() {
		$this->db->from('associates');
		$this->db->order_by('uni_name', 'asc');
		$query = $this->db->get();

		return $query->result();
	}

	public function fetch_csr() {
		$this->db->from('csr');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();

		return $query->result();
	}

	public function fetch_faqs() {
		$this->db->from('faqs');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();

		return $query->result();
	}	

	public function fetch_aboutus() {
		$this->db->from('about_us');
		$query = $this->db->get();

		return $query->result();
	}

	// public function fetch_ongoing_projects() {
	// 	$this->db->from('projects');
	// 	$this->db->where('status', 1);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	public function fetch_all_wresults() {
		$this->db->from('results');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();

		return $query->result();
	}

	public function result_name($id) {
		$query = $this->db->from('projects')->where('id', $id)->get()->result_array()[0];
		return $query;
	}	

	public function check_if_completed($id) {
		$query = $this->db->from('projects')->where('id', $id)->get()->result_array()[0]['status'];
		return $query;
	}	

	public function check_if_completed1($id) {
		$query = $this->db->from('projects')->where('id', $id)->where('status', 2)->get()->result();
		return $query;
	}	

	public function fetch_latest_projects() {
		$this->db->from('projects');
		$this->db->order_by('id', 'desc');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_top_res() {
		$this->db->from('results');
		$this->db->order_by('id', 'desc');
		$this->db->limit(5);
		$query = $this->db->get();

		return $query->result();
	}

	public function fetch_user_posts($id) {
		$this->db->from('user_post');
		$this->db->where('user_id', $id);

		$query = $this->db->get()->result();
		return $query;
	}

	public function test_date($id) {
		$query = $this->db->from('results')->where('name', $id)->get()->result();
		return $query;
	}	

	public function resultt($id) {
		$query = $this->db->from('results')->where('id', $id)->get()->result_array()[0];
		return $query;
	}	

	public function fetch_user_id($cnic) {
		$query = $this->db->from('signup')->where('cnic_no', $cnic)->get()->result();
		return $query;
	}

	public function marks_obtained($user_id, $result_id) {
		$this->db->from('user_result');
		$this->db->where('result_id', $result_id);
		$this->db->where('user_id', $user_id);

		$query = $this->db->get()->result();
		return $query;	
	}

	public function search_result($id, $post) {
		$this->db->from('user_post');
		$this->db->where('post_name', $post);
		$this->db->where('user_id', $id);

		$query = $this->db->get()->result();
		return $query;
	}

	public function all_news() {
		$this->db->from('news');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function user_details($id) {
		$query = $this->db->from('signup')->where('id', $id)->get()->result();
		return $query;
	}

	public function exam_details($id) {
		$query = $this->db->from('projects')->where('id', $id)->get()->result();
		return $query;
	}

	public function post_details($id) {
		$query = $this->db->from('post')->where('id', $id)->get()->result();
		return $query;
	}

	public function pr_post_name($id) {
		$query = $this->db->from('post')->where('id', $id)->get()->result_array()[0]['name'];
		return $query;
	}

	public function test_date2($id) {
		$query = $this->db->from('results')->where('name', $id)->get()->result_array()[0]['test_date'];
		return $query;
	}	

	public function test_date3($id) {
		$query = $this->db->from('post')->where('id', $id)->get()->result_array()[0]['test_date'];
		return $query;
	}	

	public function fetch_all_ads() {
		$this->db->from('ads');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get()->result();

		return $query;
	}

	public function fetch_ad($id) {
		$this->db->from('ads');
		$this->db->where('id', $id);
		$query = $this->db->get()->result_array()[0]['title'];

		return $query;
	}

	
	public function get_projectslist(){

          	$ads = $this->input->post('data');

          	$query1 = $this->db->from('ads')->where('id', $ads)->get()->result();
          	if($query1) {
          		foreach($query1 as $qr) {
          			// $id = $qr->id;
          			$title = $qr->title;

          		// $this->db->select('*');
            	$this->db->from('projects');
            	$this->db->where('advertisement',$ads);
            	$query=$this->db->get();
            	if($query->num_rows() > 0){
               		foreach ($query->result() as $name) {
                    	echo'<option value="'.$name->id.'">'.$name->name.'</option>';
                	} 
            	}else{
                	echo '<option value="">No Projects Found</option>';
            	}
          		}

          		
          	} else {
          		die('no projects present');
          	}         
    }

	public function get_postslist() {

          	$pr_id = $this->input->post('data');
          	// echo'<option value="'.$ads.'">'.$ads.'</option>';

            			$this->db->from('post');
		             	$this->db->where('project_id',$pr_id);
		             	$query3=$this->db->get();
		             	if($query3->result()) {
	               		foreach ($query3->result() as $name) {
	                    	echo'<option value="'.$name->id.'">'.$name->name.'</option>';
	                		} 
		            	} else {
          		echo '<option value="">'.$pr_id.'</option>';
          	} 
          	        
    }    	

    public function check_projects($data, $date) {
    	$this->db->where('last_date <', $date);
    	$query = $this->db->update('projects', $data);
    	if($query) {
    		return true;
    	} else {
    		return false;
    	}
    }	

    public function save_query($data) {
    	$this->db->insert('user_queries', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function fetch_all_ongoing_projects() {
    	$this->db->from('projects');
    	$this->db->where('status', 1);
    	$this->db->order_by('id','desc');
    	$query = $this->db->get();
    	return $query->result();
    }

    public function update_user_postt($id, $data) {
    	$this->db->where('user_id', $id);
    	$this->db->order_by('id','desc');
    	$this->db->limit('1');
    	$query = $this->db->update('user_post', $data);
    	if($query) {
    		return true;
    	} else {
    		return false;
    	}
    }

    public function update_user_postt_2($id, $project, $post, $data) {
    	$this->db->where('user_id', $id);
  		$this->db->where('project', $project);
  		$this->db->where('post_name', $post);
    	$query = $this->db->update('user_post', $data);
    	if($query) {
    		return true;
    	} else {
    		return false;
    	}
    }    

    public function check_user_approval($user_id) {
    	$this->db->from('user_post');
    	$this->db->where('user_id', $user_id);
    	$this->db->order_by('id','desc');
    	$this->db->limit(1);
    	$query = $this->db->get();
    	return $query->result_array()[0];
    }

    public function check_ress($user_id, $res_id) {
    	$this->db->from('user_result');
    	$this->db->where('user_id', $user_id);
    	$this->db->where('result_id', $res_id);

    	$query = $this->db->get()->result();
    	return $query;
    }
}

?>