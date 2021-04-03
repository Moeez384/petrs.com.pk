<?php


class loralaiResult extends CI_Controller
{
	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));
		$this->load->model('WebsiteModel');
	}

	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('loralaiResult');
		$this->load->view('layouts/footer');
	}

	public function SearchByPhoneNo(){
		$this->load->view('layouts/header');
		$this->load->view('loralaiResult1');
		$this->load->view('layouts/footer');
	}

	public function getResult(){
	$this->form_validation->set_rules('cnic','CNIC','is_unique[list_loralai_center.CNIC]');
    if ($this->form_validation->run()==false) {
      $cnic = $this->input->post('cnic');
      $data['Products']=$this->Project_model->viewResult($cnic);
      $this->load->view('layouts/header');
      $this->load->view('CnicResult',$data);
      $this->load->view('layouts/footer');
    }
    else{
      $this->session->set_flashdata('Not_Exit','No Record Found');
      $this->load->view('layouts/header');
      $this->load->view('LoralaiResult');
      $this->load->view('layouts/footer');
     }
	}

	public function viewResult(){
	$this->form_validation->set_rules('Phone','Phone','is_unique[list_loralai_center.Phone_No]');
    if ($this->form_validation->run()==false) {
      $Phone=$this->input->post('Phone');
      $data['Products']=$this->Project_model->getResult($Phone);
      $this->load->view('layouts/header');
      $this->load->view('CnicResult',$data);
      $this->load->view('layouts/footer');
    }
    else{
      $this->session->set_flashdata('test1','No Record Found');
      $this->load->view('layouts/header');
      $this->load->view('LoralaiResult1');
      $this->load->view('layouts/footer');
    }
	
	}
}

?>