<?php
class index extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));

		$this->load->model('WebsiteModel');	
	}

	public function index() {

		$data = array(
			'status' => 2
		);	
		$this->WebsiteModel->check_projects($data, date('Y-m-d'));


		$this->load->view('layouts/header');
		$this->load->view('website/index');
		$this->load->view('layouts/footer');
	}

	// public function ceo() {
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/ceo');
	// 	$this->load->view('layouts/footer');
	// }

// 	public function aboutus() {
// 		$this->load->view('layouts/header');
// 		$this->load->view('website/about');
// 		$this->load->view('layouts/footer');
// 	}

	public function dashboard() {

		$id = $this->input->get('id');

		$this->load->view('layouts/header');
		$this->load->view('website/dashboard');
		$this->load->view('layouts/footer');
	}


//     public function home(){
// 		$this->load->view('layouts/header');
// 		$this->load->view('website/index');
// 		$this->load->view('layouts/footer');
// 	}
}


?>