<?php

class Services extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');
	}

	public function index() {
		$this->load->view('admin/service/listing');
	}

	public function add_service() {
		$this->load->view('admin/service/add');
	}

	public function save() {
		$title = $this->input->post('title');
		$details = $this->input->post('detail');

		$data = array(
			'title' => $title,
			'details' => $details
		);

		$check_service = $this->ProjectsModel->check_service($title);
		if($check_service) {
			$this->session->set_flashdata('warning', 'Service already exists');
			return redirect(base_url().'admin/Services/add_service');
		} else {
			$save_service = $this->ProjectsModel->add_service($data);
			if($save_service) {
				$this->session->set_flashdata('success', 'Service submitted successfully');
			    return redirect(base_url().'admin/Services/add_service');
			} else {
				$this->session->set_flashdata('warning', 'Service could not be sumbitted. Try again' );
			    return redirect(base_url().'admin/Services/add_service');
			}
		}
	}

	public function update_service() {
		$id = $this->input->get('id');
		$service = $this->ProjectsModel->fetch_service($id);
		foreach($service as $sv) {
			$data = array(
				'id' => $id,
				'title' => $sv->title,
				'details' => $sv->details,
			);
		}

		$this->load->view('admin/service/edit', $data);
	}

	public function update() {
		$id = $this->input->post('id');
		$name = $this->input->post('title');
		$details = $this->input->post('detail');
		
		$data = array(
				'title' => $name,
				'details' => $details
		);
		$check_service = $this->ProjectsModel->check_service($name);
		if($check_service) {
			$this->session->set_flashdata('warning', 'Service already exists');
			return redirect(base_url().'admin/Services/update_service?id='.$id);
		} else {
			$update_service = $this->ProjectsModel->update_service($data, $id);
			if($update_service) {
			   $this->session->set_flashdata('success', 'Service updated successfully');
			   return redirect(base_url().'admin/Services/update_service?id='.$id);
			} else {
			   $this->session->set_flashdata('warning', 'Service could not be updated. Try again' );
			   return redirect(base_url().'admin/Services/update_service?id='.$id);
			}
		}
	}
}

?>