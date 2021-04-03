<?php

class Posts extends CI_Controller {
	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');	
	}

	public function index() {
		$this->load->view('admin/posts/listing');
	}

	public function add_post() {
		$this->load->view('admin/posts/add');
	}

	public function save() {
		$title = $this->input->post('title');
		$project_id = $this->input->post('project_id');
		$center = $this->input->post('center');
		$test_date = $this->input->post('date');
		$test_time = $this->input->post('time');

		$data = array(
			'name' => $title,
			'project_id' => $project_id,
			'center' => $center != '' ? $center : '',
			'test_date' => $test_date,
			'test_time' => $test_time
		);

		$check_post = $this->ProjectsModel->check_post($title, $project_id);
		if($check_post) {
			$this->session->set_flashdata('warning', 'Post already exists');
			return redirect(base_url().'admin/Posts/add_post');
		} else {
			$save_post = $this->ProjectsModel->add_post($data);
			if($save_post) {
				$this->session->set_flashdata('success', 'Post submitted successfully');
			    return redirect(base_url().'admin/Posts/add_post');
			} else {
				$this->session->set_flashdata('warning', 'Post could not be sumbitted. Try again' );
			    return redirect(base_url().'admin/Posts/add_post');
			}
		}

	}

	public function update_post() {
		$id = $this->input->get('id');
		$post = $this->ProjectsModel->fetch_post($id);
		foreach($post as $dv) {
			$pr_name = $this->ProjectsModel->pr_name($dv->project_id);
			$data = array(
				'id' => $id,
				'title' => $dv->name,
				'project_id' => $dv->project_id,
				'project_name' => $pr_name,
				'center' => $dv->center,
				'test_date' => $dv->test_date,
				'test_time' => $dv->test_time
			);
		}

		$this->load->view('admin/posts/edit', $data);
	}

	public function update(){
		$id = $this->input->post('id');
		$name = $this->input->post('title');
		$project_id = $this->input->post('project_id');
		$center = $this->input->post('center');
		$test_date = $this->input->post('date');
		$test_time = $this->input->post('time');

		$data = array(
			'name' => $name,
			'project_id' => $project_id,
			'center' => $center != '' ? $center : '',
			'test_date' => $test_date,
			'test_time' => $test_time
		);

		$update_post = $this->ProjectsModel->update_post($data, $id);
			if($update_post) {
			   $this->session->set_flashdata('success', 'Post updated successfully');
			   return redirect(base_url().'admin/Posts/update_post?id='.$id);
			} else {
			   $this->session->set_flashdata('warning', 'Post could not be updated. Try again' );
			   return redirect(base_url().'admin/Posts/update_post?id='.$id);
			}
	}

	public function delete_division() {

	}

}

?>