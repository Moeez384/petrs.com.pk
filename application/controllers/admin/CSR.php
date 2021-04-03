<?php

class CSR extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');
	}

	public function index() {
		$this->load->view('admin/csr/listing');
	}

	public function add_csr() {
		$this->load->view('admin/csr/add');
	}

	public function save() {
		$title = $this->input->post('title');
		$details = $this->input->post('detail');

		$data = array(
			'title' => $title,
			'details' => $details
		);

		$check_csr = $this->ProjectsModel->check_csr($title);
		if($check_csr) {
			$this->session->set_flashdata('warning', 'csr already exists');
			return redirect(base_url().'admin/CSR/add_csr');
		} else {
			$save_csr = $this->ProjectsModel->add_csr($data);
			if($save_csr) {
				$this->session->set_flashdata('success', 'csr submitted successfully');
			    return redirect(base_url().'admin/CSR/add_csr');
			} else {
				$this->session->set_flashdata('warning', 'csr could not be sumbitted. Try again' );
			    return redirect(base_url().'admin/CSR/add_csr');
			}
		}
	}

	public function update_csr() {
		$id = $this->input->get('id');
		$csr = $this->ProjectsModel->fetch_csr($id);
		foreach($csr as $cs) {
			$data = array(
				'id' => $id,
				'title' => $cs->title,
				'details' => $cs->details,
			);
		}

		$this->load->view('admin/csr/edit', $data);
	}

	public function update() {
		$id = $this->input->post('id');
		$name = $this->input->post('title');
		$details = $this->input->post('detail');
		
		$data = array(
				'title' => $name,
				'details' => $details
		);
		$check_csr = $this->ProjectsModel->check_csr($name);
		if($check_csr) {
			$this->session->set_flashdata('warning', 'csr already exists');
			return redirect(base_url().'admin/CSR/update_csr?id='.$id);
		} else {
			$update_service = $this->ProjectsModel->update_csr($data, $id);
			if($update_service) {
			   $this->session->set_flashdata('success', 'csr updated successfully');
			   return redirect(base_url().'admin/CSR/update_csr?id='.$id);
			} else {
			   $this->session->set_flashdata('warning', 'csr could not be updated. Try again' );
			   return redirect(base_url().'admin/CSR/update_csr?id='.$id);
			}
		}
	}
}

?>