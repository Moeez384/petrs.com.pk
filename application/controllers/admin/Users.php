<?php

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));

		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');		
	}

	public function index() {

		$all_users = $this->ProjectsModel->fetch_all_users();
		if($all_users) {
			foreach($all_users as $us) {
				$data[] = array(
					'id' => $us->id,
					'name' => $us->name,
					'father_name' => $us->father_name,
					'email' => $us->email,
					'phone' => $us->ph_number,
					'gender' => $us->gender,
					'religion' => $us->religion,		
				);
			}
			$this->load->view('admin/users/listing', $data);
		} else {
			$data = array(
				'id' => '',
				'name' => '',
				'father_name' => '',
				'email' => '',
				'phone' => '',
				'gender' => '',
				'religion' => '',	
			);
			$this->load->view('admin/users/listing', $data);
		}
	}

	public function view_user() {

		$id = $this->input->get('id');
		$user = $this->ProjectsModel->single_user($id);
		foreach($user as $us) {
			$data = array(
				'name' => $us->name,
				'father_name' => $us->father_name,
				'cnic_no' => $us->cnic_no,
				'email' => $us->email,
				'ph_number' => $us->ph_number,
				'res_phone' => $us->res_phone,
				'office_phone' => $us->office_phone,
				'father_occupation' => $us->father_occupation,
				'domicile' => $us->domicile,
				'husband_name' => $us->husband_name,
				'husband_occupation' => $us->husband_occupation,
				'date_of_birth' => $us->date_of_birth,
				'gender' => $us->gender,
				'religion' => $us->religion,
				'district' => $us->district,
				'permenant_address' => $us->per_address,
				'postal_address' => $us->postal_address,
				'govt_service' => $us->govt_service,
				'disability' => $us->disability,
				'armed_force' => $us->armed_force
			);
		}

		$this->load->view('admin/users/view', $data);
	}

	public function view_user_education() {
		$id = $this->input->get('id');
		$education = $this->ProjectsModel->user_edu($id);
		foreach($education as $edu) {
			$data[] = array(
				'id' => $edu->id,
				'degree_name' => $edu->degree_name,
				'institute' => $edu->institute,
				'degree_type' => $edu->degree_type,
				'board_name' => $edu->board_name,
				'passing_date' => $edu->passing_date,
				'total_marks' => $edu->total_marks,
				'obtained_marks' => $edu->obtained_marks,
				'exam_system' => $edu->exam_system,
				'division' => $edu->division,
				'cgpa' => $edu->cgpa,
				'optional_subjects' => $edu->optional_subjects
			);
		}
		$this->load->view('admin/users/view_edu', $data);
	}

	public function view_user_experience() {
		$this->load->view('admin/users/view_exp');
	}

	public function view_applied_post() {
		$this->load->view('admin/users/applied_post');
	}

	public function approve() {
		$user_id = $this->input->get('id');
		$user_post_id = $this->input->get('post_id');

		$data = array(
			'user_approved' => 1
		);

		$update = $this->ProjectsModel->update_user($data, $user_post_id);
		if($update) {

			$this->session->set_flashdata('success', 'User approved succesfully');
			return redirect(base_url().'admin/Users/view_applied_post?id='.$user_id);

		} else {
			$this->session->set_flashdata('warning', 'Could not approve user. Try again');
			return redirect(base_url().'admin/Users/view_applied_post?id='.$user_id);
		}
	}

	public function unapprove() {
		$user_id = $this->input->get('id');
		$user_post_id = $this->input->get('post_id');

		$data = array(
			'user_approved' => 0
		);

		$update = $this->ProjectsModel->update_user($data, $user_post_id);
		if($update) {

			$this->session->set_flashdata('success', 'User approved succesfully');
			return redirect(base_url().'admin/Users/view_applied_post?id='.$user_id);

		} else {
			$this->session->set_flashdata('warning', 'Could not approve user. Try again');
			return redirect(base_url().'admin/Users/view_applied_post?id='.$user_id);
		}
	}
}

?>