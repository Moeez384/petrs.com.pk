<?php

class UserResults extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');
	}

	public function add_student_result() {
		$this->load->view('admin/student_results/add');
	}	

	public function save() {
		$name = $this->input->post('name');
		$last_date = $this->input->post('date');
		$attachment = $this->input->post('file');

		$check_name_results = $this->ProjectsModel->fetch_name_result($name);
		if($check_name_results) {
			$this->session->set_flashdata('warning', 'Result name already exists. Try again' );
			return redirect(base_url().'admin/Results/add_result');
		} else {

		$data = array(
				'name' => $name,
				'test_date' => $last_date,
				'answer_key' => '',
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

?>