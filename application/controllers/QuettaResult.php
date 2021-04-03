<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuettaResult extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));

		$this->load->model('WebsiteModel');	
	}

	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('quettaCenter');
		$this->load->view('layouts/footer');
	}

	public function SearchByPhoneNo(){
		$this->load->view('layouts/header');
		$this->load->view('quettaCenter1');
		$this->load->view('layouts/footer');	
	}

	public function yourResult(){
	$this->form_validation->set_rules('cnic','CNIC','is_unique[list_quetta_center.CNIC]');
    if ($this->form_validation->run()==false) {
      $cnic = $this->input->post('cnic');
      $data['Products']=$this->Project_model->View($cnic);
      $this->load->view('layouts/header');
      $this->load->view('CnicResult',$data);
      $this->load->view('layouts/footer');
    }
    else{
      $this->session->set_flashdata('Not_Exit','No Record Found');
      $this->load->view('layouts/header');
      $this->load->view('quettaCenter');
      $this->load->view('layouts/footer');
    }
	}

	public function Result(){
	$this->form_validation->set_rules('Phone','Phone','is_unique[list_quetta_center.Phone_No]');
    if ($this->form_validation->run()==false) {
      $Phone=$this->input->post('Phone');
      $data['Products']=$this->Project_model->get($Phone);
      $this->load->view('layouts/header');
      $this->load->view('CnicResult',$data);
      $this->load->view('layouts/footer');
    }
    else{
      $this->session->set_flashdata('test1','No Record Found');
      $this->load->view('layouts/header');
      $this->load->view('quettaCenter1');
      $this->load->view('layouts/footer');
    }
	}
}