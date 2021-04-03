<?php


class News extends CI_Controller
{
	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));
		$this->load->model('WebsiteModel');
	}

	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('website/allnews');
		$this->load->view('layouts/footer');
	}
}

?>