<?php

class Rollnoslips extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));

		$this->load->model('WebsiteModel');	
	}

	public function index() {
		$this->load->view('layouts/header2');
		$this->load->view('layouts/header-boot');
		$this->load->view('website/allslips');
		$this->load->view('layouts/footer');
	}

	public function slip() {
		$this->load->view('admin/layouts/new');
		$this->load->view('website/rollno');
	}

	public function pending_slip() {
		$this->load->view('admin/layouts/new');
		$this->load->view('website/not_approved_form');
	}
}

?>