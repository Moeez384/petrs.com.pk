<?php

class Advertisement extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');
	}

	public function index() {
		$this->load->view('admin/ads/listing');
	}

	public function add_advertisement() {
		$this->load->view('admin/ads/add');
	}

	public function save() {
		$title = $this->input->post('title');

		$data = array(
			'title' => $title
		);

		$check_ad = $this->ProjectsModel->check_ad($title);
		if($check_ad) {
			$this->session->set_flashdata('warning', 'Advertisement already exists');
			return redirect(base_url().'admin/Advertisement/add_advertisement');
		} else {
			$save_ad = $this->ProjectsModel->add_ad($data);
			if($save_ad) {
				$this->session->set_flashdata('success', 'Advertisement submitted successfully');
			    return redirect(base_url().'admin/Advertisement/add_advertisement');
			} else {
				$this->session->set_flashdata('warning', 'Advertisement could not be sumbitted. Try again' );
			    return redirect(base_url().'admin/Advertisement/add_advertisement');
			}
		}
	}

	public function update_advertisement() {
		$id = $this->input->get('id');
		$ad = $this->ProjectsModel->fetch_ad($id);
		foreach($ad as $d) {
			$data = array(
				'id' => $id,
				'title' => $d->title
			);
		}

		$this->load->view('admin/ads/edit', $data);
	}

	public function update() {
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		
		$data = array(
				'title' => $title
		);
		// $check_csr = $this->ProjectsModel->check_csr($name);
		// if($check_csr) {
		// 	$this->session->set_flashdata('warning', 'Advertisement already exists');
		// 	return redirect(base_url().'admin/Advertisement/update_advertisement?id='.$id);
		// } else {
			$update_ad = $this->ProjectsModel->update_ad($data, $id);
			if($update_ad) {
			   $this->session->set_flashdata('success', 'Advertisement updated successfully');
			   return redirect(base_url().'admin/Advertisement/update_advertisement?id='.$id);
			} else {
			   $this->session->set_flashdata('warning', 'Advertisement could not be updated. Try again' );
			   return redirect(base_url().'admin/Advertisement/update_advertisement?id='.$id);
			}
		}
	// }
}

?>