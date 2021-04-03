<?php

class Results extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');	
	}

	// public function index() {
	// 	$all_results = $this->ProjectsModel->fetch_all_results();
	// 	if($all_results) {
	// 		foreach($all_results as $pr) {
	// 			$data[] = array(
	// 				'id' => $pr->id,
	// 				'name' => $pr->name,
	// 				'test_date' => $pr->test_date,
	// 				'marks' => $pr->total_marks,
	// 				// 'center' => $pr->center
	// 			);
	// 		}
	// 	} else {
	// 		$data = array();
	// 	}	
	// 	$this->load->view('admin/results/listing', $data);
	// }


	public function index(){
		$data['result']=$this->ProjectsModel->fetch_all_results();
		$this->load->view('admin/results/listing', $data);
	}

	
	public function add_result() {
		$this->load->view('admin/results/add');
	}	

//Coment
	public function submitResult(){
			$data['name'] = $this->input->post('name', TRUE);
			$data['post'] = $this->input->post('post', TRUE);
			$data['Results'] = $this->input->post('res', TRUE);
			$data['BookColour'] = $this->input->post('book', TRUE);
			$config['upload_path']          = './uploads/res';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 5555555;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('photo')){
                $error = array('error12' => $this->upload->display_errors());
                // $this->load->view('project1', $error);
                echo ("Erro: Could Not upload File");
                // echo "Could Not Upload File";
            }else{
            	$upload_data = $this->upload->data();
            	$data['photo'] = $upload_data['file_name'];
            	$this->Project_model->addProject($data);
            	$this->session->set_flashdata('inserted20','Your Data has been Succefully Inserted!');
            	redirect('/admin/Results');
		}
	  
	}

	public function save() {
		$name = $this->input->post('name');
		$attachment = $this->input->post('file');
		$marks = $this->input->post('marks');
		$project = $this->input->post('project');

		if($project == '') {
			$this->session->set_flashdata('warning', 'Project cannot be empty' );
			return redirect(base_url().'admin/Results/add_result');
		} else {

		$check_name_results = $this->ProjectsModel->fetch_name_result($name);
		if($check_name_results) {
			$this->session->set_flashdata('warning', 'Result name already exists. Try again' );
			return redirect(base_url().'admin/Results/add_result');
		} else {

			  $config['upload_path']          = './uploads/results';
		  // $config['allowed_types'] = "*";
	          $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|GIF|JPG|PNG|PDF|DOC|DOCX';
	          $config['max_size']             = 100;
	          $config['max_width']            = 1024;
	          $config['max_height']           = 768;

	          $this->load->library('upload', $config);

	          $this->upload->do_upload('file');
	          $upload_data = $this->upload->data(); 
	          $file_name = $upload_data['file_name'];

		$data = array(
				'name' => $name,
				// 'test_date' => $last_date,
				'answer_key' => $file_name,
				'total_marks' => $marks,
				'project' => $project
		);

			$add_result = $this->ProjectsModel->add_result($data);
			if($add_result) {
				$this->session->set_flashdata('success', 'Result submitted successfully');
			   return redirect(base_url().'admin/Results/add_result');
			} else {
			   $this->session->set_flashdata('warning', 'Result could not be sumbitted. Try again' );
			   return redirect(base_url().'admin/Results/add_result');
			}
		}
	}		
	}

	public function edit_result() {
		$id = $this->input->get('id');
		$result = $this->ProjectsModel->fetch_result($id);
		foreach($result as $pr) {


		$data = array(
			'id' => $id,
			'project' => $pr->project,
			'name' => $pr->name,
			// 'test_date' => $pr->test_date,
			'attachment' => $pr->answer_key,
			'total_marks' => $pr->total_marks
			);
		}
		$this->load->view('admin/results/edit', $data);
	}

	public function update() {
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		// $test_date = $this->input->post('date');
		$marks = $this->input->post('marks');
		$project = $this->input->post('project');
		$att = $this->input->post('att');
		$p_name = $this->input->post('p_name');
		$p_project = $this->input->post('p_project');

		 $config['upload_path']          = './uploads/results';
		  // $config['allowed_types'] = "*";
	          $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|GIF|JPG|PNG|PDF|DOC|DOCX';
	          $config['max_size']             = 100;
	          $config['max_width']            = 1024;
	          $config['max_height']           = 768;

	          $this->load->library('upload', $config);

	          $this->upload->do_upload('file');
	          $upload_data = $this->upload->data(); 
	          $file_name = $upload_data['file_name'];


		$data = array(
			'name' => $name != '' ? $name : $p_name,
			// 'test_date' => $test_date,
			'answer_key' => $file_name != '' ? $file_name : $att,
			'total_marks' => $marks,
			'project' => $project != '' ? $project : $p_project
		);

		$update_result = $this->ProjectsModel->update_result($data, $id);
		if(!$update_result) {
			   $this->session->set_flashdata('success', 'Result updated successfully');
			   return redirect(base_url().'admin/Results/edit_result?id='.$id);
			} else {
				$this->session->set_flashdata('warning', 'Result could not be updated. Try again' );
			   return redirect(base_url().'admin/Results/edit_result?id='.$id);
			}
		}		

	public function add_user_result() {
		$this->load->view('admin/results/add_user');
	}

	public function save_user() {
		$project_id = $this->input->post('id');
		$user_id = $this->input->post('user');
		$marks_obtained = $this->input->post('marks');

		$result_id = $this->ProjectsModel->result_id($project_id);

		$check_user = $this->ProjectsModel->check_user_result($result_id, $user_id);
		if($check_user) {
			$this->session->set_flashdata('warning', 'User result already exists');
			   return redirect(base_url().'admin/Results/add_user_result?id='.$project_id);
		} else {
			
			$data = array(
				'result_id' => $result_id,
				'user_id' => $user_id,
				'marks_obtained' => $marks_obtained
			);

			$save = $this->ProjectsModel->add_user_result($data);
			if($save) {
				$this->session->set_flashdata('success', 'User result added');
			   return redirect(base_url().'admin/Results/add_user_result?id='.$project_id);
			} else {
				$this->session->set_flashdata('warning', 'User result already exists');
			   return redirect(base_url().'admin/Results/add_user_result?id='.$project_id);
			}
		}
	}

	public function list_user_result() {
		$res_id = $this->input->get('id');

		$user_results = $this->ProjectsModel->fetch_user_results($res_id);
		if($user_results) {
			foreach($user_results as $res) {
				$data[] = array(
					'user_id' => $res->user_id,
					'marks_obtained' => $res->marks_obtained
				);
			}
		} else {
			$data = array();
		}

		$this->load->view('admin/results/user_listing', $data);
	}
}

?>