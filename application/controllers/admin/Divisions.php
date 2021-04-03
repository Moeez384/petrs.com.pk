<?php

class Divisions extends CI_Controller {
	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');	
	}

	public function index() {
		$all_divisions = $this->ProjectsModel->fetch_all_divisions();
		if($all_divisions) {
			foreach($all_divisions as $dv) {
				$data[] = array(
					'id' => $dv->id,
					'title' => $dv->title,
					'details' => $dv->details
				);	
			}

		} else {
			$data = array();
		}

		$this->load->view('admin/divisions/listing', $data);
	}

	public function add_division() {
		$this->load->view('admin/divisions/add');
	}

	public function save() {
		$title = $this->input->post('title');
		$details = $this->input->post('detail');

		$data = array(
			'title' => $title,
			'details' => $details
		);

		$check_division = $this->ProjectsModel->check_division($title);
		if($check_division) {
			$this->session->set_flashdata('warning', 'Division already exists');
			return redirect(base_url().'admin/Divisions/add_division');
		} else {
			$save_division = $this->ProjectsModel->add_division($data);
			if($save_division) {
				$this->session->set_flashdata('success', 'Division submitted successfully');
			    return redirect(base_url().'admin/Divisions/add_division');
			} else {
				$this->session->set_flashdata('warning', 'Division could not be sumbitted. Try again' );
			    return redirect(base_url().'admin/Divisions/add_division');
			}
		}

	}

	public function update_division() {
		$id = $this->input->get('id');
		$division = $this->ProjectsModel->fetch_division($id);
		foreach($division as $dv) {
			$data = array(
				'id' => $id,
				'title' => $dv->title,
				'details' => $dv->details,
			);
		}

		$this->load->view('admin/divisions/edit', $data);
	}

	public function update() {
		$id = $this->input->post('id');
		$name = $this->input->post('title');
		$details = $this->input->post('detail');
		
		$data = array(
				'title' => $name,
				'details' => $details
		);

		$update_division = $this->ProjectsModel->update_division($data, $id);
			if($update_division) {
			   $this->session->set_flashdata('success', 'Division updated successfully');
			   return redirect(base_url().'admin/Divisions/update_division?id='.$id);
			} else {
			   $this->session->set_flashdata('warning', 'Division could not be updated. Try again' );
			   return redirect(base_url().'admin/Divisions/update_division?id='.$id);
			}
	}

	public function delete_division() {

	}

}

?>