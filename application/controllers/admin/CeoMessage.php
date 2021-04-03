<?php

class CeoMessage extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');	
	}

	public function index() {

		$fetch_msg = $this->ProjectsModel->fetch_ceo_msg();
		if($fetch_msg) {
			foreach($fetch_msg as $msg) {
				$data = array(
					'id' => $msg->id,
					'message' => $msg->message
				);
			}

			$this->load->view('admin/ceo_message/edit');

		} else {
			$this->load->view('admin/ceo_message/add');
		}
	}

	public function save() {
		$message = $this->input->post('detail');

		$data = array(
			'message' => $message,
			'created_at' => date('Y-m-d')
		);

		$save_msg = $this->ProjectsModel->add_ceo_msg($data);
		if($save_msg) {
			$this->session->set_flashdata('success', 'Ceo message submitted successfully');
			return redirect(base_url().'admin/CeoMessage');
		} else {
			$this->session->set_flashdata('warning', 'Ceo message could not be sumbitted. Try again' );
			   return redirect(base_url().'admin/CeoMessage');
		}
	}

	public function update() {
		$id = $this->input->post('id');
		$message = $this->input->post('detail');

		$data = array(
			'message' => $message,
			'created_at' => date('Y-m-d')
		);

		$update_msg = $this->ProjectsModel->update_ceo_msg($data, $id);
		if($update_msg) {
			$this->session->set_flashdata('success', 'Ceo message submitted successfully');
			return redirect(base_url().'admin/CeoMessage');
		} else {
			$this->session->set_flashdata('warning', 'Ceo message could not be sumbitted. Try again' );
			   return redirect(base_url().'admin/CeoMessage');
		}
	}
}

?>