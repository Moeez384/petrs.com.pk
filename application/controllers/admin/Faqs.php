<?php

class Faqs extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');
	}

	public function index() {
		$this->load->view('admin/faqs/listing');
	}

	public function add_faqs() {
		$this->load->view('admin/faqs/add');
	}

	public function save() {
		$title = $this->input->post('title');
		$details = $this->input->post('detail');

		$data = array(
			'title' => $title,
			'details' => $details
		);

		$check_faqs = $this->ProjectsModel->check_faqs($title);
		if($check_faqs) {
			$this->session->set_flashdata('warning', 'Faq already exists');
			return redirect(base_url().'admin/Faqs/add_faqs');
		} else {
			$save_faqs = $this->ProjectsModel->add_faqs($data);
			if($save_faqs) {
				$this->session->set_flashdata('success', 'Faq submitted successfully');
			    return redirect(base_url().'admin/Faqs/add_faqs');
			} else {
				$this->session->set_flashdata('warning', 'Faq could not be sumbitted. Try again' );
			    return redirect(base_url().'admin/Faqs/add_faqs');
			}
		}
	}

	public function update_faqs() {
		$id = $this->input->get('id');
		$faqs = $this->ProjectsModel->fetch_faqs($id);
		foreach($faqs as $fq) {
			$data = array(
				'id' => $id,
				'title' => $fq->title,
				'details' => $fq->details,
			);
		}

		$this->load->view('admin/faqs/edit', $data);
	}

	public function update() {
		$id = $this->input->post('id');
		$name = $this->input->post('title');
		$details = $this->input->post('detail');
		
		$data = array(
				'title' => $name,
				'details' => $details
		);
		// $check_service = $this->ProjectsModel->check_service($name);
		// if($check_service) {
		// 	$this->session->set_flashdata('warning', 'Service already exists');
		// 	return redirect(base_url().'admin/Services/update_service?id='.$id);
		// } else {
			$update_faq = $this->ProjectsModel->update_faq($data, $id);
			if($update_faq) {
			   $this->session->set_flashdata('success', 'Faqs updated successfully');
			   return redirect(base_url().'admin/Faqs/update_faqs?id='.$id);
			} else {
			   $this->session->set_flashdata('warning', 'Faqs could not be updated. Try again' );
			   return redirect(base_url().'admin/Faqs/update_faqs?id='.$id);
			}
		// }
	}
}

?>