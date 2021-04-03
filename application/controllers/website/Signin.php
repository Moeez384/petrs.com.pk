<?php

class Signin extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));
		$this->load->model('WebsiteModel');
	}
	public function index() {
		$this->load->view('layouts/header');
		$this->load->view('website/signin');
		$this->load->view('layouts/footer');
	}

	public function CheckRollNo() {
    $this->load->view('layouts/header');
		$this->load->view('CheckCnic');
    $this->load->view('layouts/footer');
	}

	public function verify_user() {
		$cnic = $this->input->post('cnic');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$check_cnic = $this->WebsiteModel->user_cnic_login($cnic);
		if($check_cnic) {
			$check_email = $this->WebsiteModel->user_email_login($email);
			if($check_email) {
				$check_pass = $this->WebsiteModel->user_pass_login($email, $cnic);
				foreach($check_pass as $ps) {
					$pass_hash = $ps->password;
					$id = $ps->id;
				}
				if(password_verify($password, $pass_hash)) {
					$this->session->set_flashdata('warning', 'Logged In');
					$_SESSION['id'] = $id;
					return redirect(base_url().'website/index/dashboard?id='.$id);
				} else {
					$this->session->set_flashdata('warning', 'Incorrect Password. Try again');
					return redirect(base_url().'website/Signin');
				}

			} else {
				$this->session->set_flashdata('warning', 'Incorrect Email. Try again');
				return redirect(base_url().'website/Signin');
			}
		} else {
			$this->session->set_flashdata('warning', 'Incorrect Cnic. Try again');
			return redirect(base_url().'website/Signin');
		}
	}

	public function logout() {
		session_destroy();
		// $this->load->view('select');
		redirect(base_url().'website/index');
	}

	public function quettaList(){
	$this->load->view('layouts/header');
	$this->load->view('quettaResult');
    $this->load->view('layouts/footer');
	}


	// public function getQuettaResult(){
	// $this->load->view('layouts/header');
	// $this->load->view('quettaRes');
 //    $this->load->view('layouts/footer');
	// }



public function home(){
    $this->load->view('layouts/header');
	$this->load->view('website/index');
	$this->load->view('layouts/footer');
}

public function aboutus() {
		$this->load->view('layouts/header');
		$this->load->view('website/about');
		$this->load->view('layouts/footer');
	}
	
	
	public function AllRollNoSlip(){
	$this->load->view('layouts/header');
	$this->load->view('website/allslips');
	$this->load->view('layouts/footer');
	}
}

?>
