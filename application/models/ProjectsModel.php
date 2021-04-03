<?php

class ProjectsModel extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function fetch_admin($email) {
		$this->db->from('user_admin');
		$this->db->where('email', $email);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$data = $query->row_array();
			$value = $data['password'];
			return $value;
		}
	}

	public function get_admin($email) {
		$this->db->from('user_admin');
		$this->db->where('email', $email);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$data = $query->row_array();
			$value = $data['id'];
			return $value;
		}
	}
//Changes In this function
	public function check_admin() {
		$this->db->from('user_admin');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result();
	}

	public function save_admin($data) {
		$this->db->insert('user_admin', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	} 

	public function add_project($data) {
		$this->db->insert('projects', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function update_project($data, $id) {
		$this->db->where('id', $id);
		$this->db->update('projects', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_project($id) {
		$this->db->from('projects');
		$this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
	}

	public function DeleteProject($id){
		$this->db->where('id', $id);
        $query=$this->db->delete('projects');
        if ($query) {
        	return true;
        }
	}

	public function fetch_all_projects() {
		$this->db->from('projects');
		$this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

	public function fetch_name_project($name) {
		$this->db->from('projects');
		$this->db->where('name', $name);
        $query = $this->db->get();
        return $query->result();
	}

	public function fetch_all_news() {
		$this->db->from('news');
		$this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

	public function add_news($data) {
		$this->db->insert('news', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_news($id) {
		$this->db->from('news');
		$this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
	}

	public function update_news($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('news', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}

	public function check_division($title) {
		$this->db->from('divisions');
		$this->db->where('title', $title);
		$query = $this->db->get()->result();

		return $query;
	}

	public function add_division($data) {
		$this->db->insert('divisions', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_all_divisions() {
		$this->db->from('divisions');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get()->result();

		return $query;
	}

	public function fetch_division($id) {
		$this->db->from('divisions');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();

		return $query;
	}

	public function update_division($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('divisions', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}

	public function add_ceo_msg($data) {
		$this->db->insert('ceo_message', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_ceo_msg() {
		$this->db->from('ceo_message');
		$query = $this->db->get()->result();
		return $query;
	}	

	public function update_ceo_msg($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('ceo_message', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}	

	public function add_associate($data) {
		$this->db->insert('associates', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	// public function check_associate($name) {
	// 	$this->db->from('associates');
	// 	$this->db->where('uni_name', $name);
	// 	$query = $this->db->get()->result();

	// 	return $query;
	// }

	function check_associate($data){
		$id=$data['id'];
		$insert['uni_name']=$data['name'];
		$this->db->where('id',$id);
        $query=$this->db->update('associates',$insert);
        if ($query) {
        	return true;
        }
	}

	public function fetch_all_associates() {
		$this->db->from('associates');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get()->result();

		return $query;
	}

	public function fetch_associate($id) {
		$this->db->from('associates');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();

		return $query;
	}

	public function update_associate($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('associates', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}

	public function fetch_all_users() {
		$this->db->from('signup');
		$this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

	public function single_user($id) {
		$this->db->from('signup');
		$this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
	}

	public function user_edu($id) {
		$this->db->from('user_education');
		$this->db->where('user_id', $id);
        $query = $this->db->get();
        return $query->result();
	}

	public function user_exp($id) {
		$this->db->from('user_experience');
		$this->db->where('user_id', $id);
        $query = $this->db->get();
        return $query->result();
	}	

	public function check_service($title) {
		$this->db->from('service');
		$this->db->where('title', $title);
		$query = $this->db->get()->result();

		return $query;
	}

	public function add_service($data) {
		$this->db->insert('service', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_all_services() {
		$this->db->from('service');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get()->result();

		return $query;
	}

	public function fetch_service($id) {
		$this->db->from('service');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();

		return $query;
	}

	public function update_service($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('service', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}

	public function check_csr($title) {
		$this->db->from('csr');
		$this->db->where('title', $title);
		$query = $this->db->get()->result();

		return $query;
	}

	public function add_csr($data) {
		$this->db->insert('csr', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_all_csr() {
		$this->db->from('csr');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get()->result();

		return $query;
	}

	public function fetch_csr($id) {
		$this->db->from('csr');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();

		return $query;
	}

	public function update_csr($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('csr', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}	

	public function add_about_msg($data) {
		$this->db->insert('about_us', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_about_msg() {
		$this->db->from('about_us');
		$query = $this->db->get()->result();
		return $query;
	}	

	public function update_about_msg($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('about_us', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}

	public function fetch_name_result($name) {
		$this->db->from('results');
		$this->db->where('name', $name);
        $query = $this->db->get();
        return $query->result();
	}	

	public function add_result($data) {
		$this->db->insert('results', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}	

	// public function fetch_all_results() {
	// 	$this->db->from('results');
	// 	$this->db->order_by('id', 'desc');
	// 	$query = $this->db->get()->result();

	// 	return $query;
	// }


	public function fetch_all_results(){
		$query=$this->db->get('results');
        return $query->result();
	}

	public function fetch_result($id) {
		$this->db->from('results');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();

		return $query;
	}

	public function update_result($data, $id) {
		$this->db->where('id', $id);
		$this->db->update('results', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_completed_projects() {
		$this->db->from('projects');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}

	public function result_name($id) {
		$query = $this->db->from('projects')->where('id', $id)->get()->result_array()[0]['name'];
		return $query;
	}	

	public function user_post($id) {
		$this->db->from('user_post');
		$this->db->where('user_id',$id);
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_project($id) {
		$query = $this->db->from('projects')->where('id', $id)->get()->result_array()[0]['name'];
		return $query;
	}

	public function get_post($id) {
		$query = $this->db->from('post')->where('id', $id)->get()->result_array()[0]['name'];
		return $query;
	}

	public function fetch_post_users($post_id) {
		$this->db->from('user_post');
		$this->db->where('post_name', $post_id);
		$query = $this->db->get();

		return $query->result();
	}

	public function fetch_post_user_detail($id) {
		$query = $this->db->from('signup')->where('id', $id)->get()->result_array()[0];
		return $query;
	}	

	public function check_user_result($res_id, $user_id) {
		$this->db->from('user_result');
		$this->db->where('result_id', $res_id);
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();

		return $query->result();
	}

	public function result_id($project_id) {
		$this->db->from('results');
		$this->db->where('name', $project_id);
		$query = $this->db->get()->result_array()[0]['id'];

		return $query;
	}

	public function add_user_result($data) {
		$this->db->insert('user_result', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_user_results($res_id) {
		$this->db->from('user_result');
		$this->db->where('result_id', $res_id);
		$query = $this->db->get();

		return $query->result();
	}	

	public function check_faqs($title) {
		$this->db->from('faqs');
		$this->db->where('title', $title);
		$query = $this->db->get()->result();

		return $query;
	}

	public function add_faqs($data) {
		$this->db->insert('faqs', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_all_faqs() {
		$this->db->from('faqs');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get()->result();

		return $query;
	}

	public function fetch_faqs($id) {
		$this->db->from('faqs');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();

		return $query;
	}

	public function update_faq($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('faqs', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}

	public function check_ad($title) {
		$this->db->from('ads');
		$this->db->where('title', $title);
		$query = $this->db->get()->result();

		return $query;
	}

	public function add_ad($data) {
		$this->db->insert('ads', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
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
		$query = $this->db->get()->result();

		return $query;
	}

	public function update_ad($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('ads', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}

	public function fetch_ongoing_projects() {
		$this->db->from('projects');
		$this->db->where('status', 1);
		$query = $this->db->get();

		return $query->result();
	}		

	public function check_post($name, $id) {
		$this->db->from('post');
		$this->db->where('name', $name);
		$this->db->where('project_id', $id);

		$query = $this->db->get()->result();
		return $query;
	}	

	public function add_post($data) {
		$this->db->insert('post', $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function fetch_all_posts() {
		$this->db->from('post');
		$this->db->order_by('id', 'desc');

		$query = $this->db->get()->result();
		return $query;
	}	

	public function pr_name($project_id) {
		$this->db->from('projects');
		$this->db->where('id', $project_id);
		$query = $this->db->get()->result_array()[0]['name'];

		return $query;
	}	

	public function fetch_post($id) {
		$this->db->from('post');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();
		return $query;
	}	

	public function update_post($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('post', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}

	public function fetch_all_queries() {
		$this->db->from('user_queries');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get()->result();
		return $query;
	}

	public function fetch_query($id) {
		$this->db->from('user_queries');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();
		return $query;
	}

	public function fetch_ad_title($id) {
		$this->db->from('ads');
		$this->db->where('id', $id);
		$query = $this->db->get()->result_array()[0]['title'];

		return $query;
	}

	public function update_user($data, $id) {
		$this->db->where('id', $id);
        $query = $this->db->update('user_post', $data);
        if($query) {
            return true;
        } else {
            return false;
        }
	}

}
?>