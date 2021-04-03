<?php

class UserQueries extends CI_Controller{

	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');	
	}

	public function index() {
		$this->load->view('admin/queries/listing');
	}

	public function details() {
		$id = $this->input->get('id');

		$query = $this->ProjectsModel->fetch_query($id);
		foreach($query as $qr) {
			$data = array(
				'id' => $id,
				'username' => $qr->username,
				'email' => $qr->email,
				'contact' => $qr->contact,
				'province' => $qr->province,
				'message' => $qr->message
			);
		}

		$this->load->view('admin/queries/detail', $id);
	}

}

?>