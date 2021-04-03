<?php

class AboutUs extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');	
	}

	public function index() {

		$fetch_msg = $this->ProjectsModel->fetch_about_msg();
		if($fetch_msg) {
			foreach($fetch_msg as $msg) {
				$data = array(
					'id' => $msg->id,
					'message' => $msg->message
				);
			}

			$this->load->view('admin/about_us/edit');

		} else {
			$this->load->view('admin/about_us/add');
		}
	}

	public function save() {
		$message = $this->input->post('detail');

		$data = array(
			'message' => $message,
			'created_at' => date('Y-m-d')
		);

		$save_msg = $this->ProjectsModel->add_about_msg($data);
		if($save_msg) {
			$this->session->set_flashdata('success', 'About us submitted successfully');
			return redirect(base_url().'admin/AboutUs');
		} else {
			$this->session->set_flashdata('warning', 'About us could not be sumbitted. Try again' );
			   return redirect(base_url().'admin/AboutUs');
		}
	}

	public function update() {
		$id = $this->input->post('id');
		$message = $this->input->post('detail');

		$data = array(
			'message' => $message,
			'created_at' => date('Y-m-d')
		);

		$update_msg = $this->ProjectsModel->update_about_msg($data, $id);
		if($update_msg) {
			$this->session->set_flashdata('success', 'About us submitted successfully');
			return redirect(base_url().'admin/AboutUs');
		} else {
			$this->session->set_flashdata('warning', 'About us could not be sumbitted. Try again' );
			   return redirect(base_url().'admin/AboutUs');
		}
	}
}

?>