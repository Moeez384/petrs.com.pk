<?php
class Signin extends CI_Controller {

	public function index() {
		$this->load->model('ProjectsModel');
		$input_email = $this->input->post('email');
		$input_pass = $this->input->post('password');

		$get_pass['pass'] = $this->ProjectsModel->fetch_admin($this->input->post('email'));
			$this->load->view('admin/layouts/header');
			$this->load->view('admin/sign_in', $get_pass);
	}

	public function Home() {
		$this->load->model('Admin_model');
		$this->load->view('admin/home');
	} 

// 	public function sign_up() {
// 		$this->load->view('admin/layouts/header');
// 		$this->load->view('admin/sign_up');
// 	}

	public function save_signup() {
		$this->load->model('ProjectsModel');

		$name = $this->input->post('name');
		$lname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$password_hash = password_hash($pass, PASSWORD_BCRYPT);

		$check = $this->ProjectsModel->check_admin($email);
		if($check) {

		} else {
			$data = array(
				'name' => $name,
				'last_name' => $lname,
				'email' => $email,
				'password' => $password_hash
			);

			$save = $this->ProjectsModel->save_admin($data);
			if($save) {
				// echo '<script type="text/javascript">window.alert("Admin registered successfully")</script>';
				redirect(base_url().'admin/Signin');
			} else {
				echo '<script type="text/javascript">window.alert("Admin couldnt be registered")</script>';
			}
		}
	}

	public function sign_out() {
		session_destroy();
		redirect(base_url().'admin/Signin');
	}
}
?>