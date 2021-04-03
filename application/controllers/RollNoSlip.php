<?php
/**
 *
 */
class RollNoSlip extends CI_Controller
{
  public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));

		$this->load->model('WebsiteModel');
	}

  public function verify(){
    $this->form_validation->set_rules('cnic','CNIC','is_unique[list_loralai_center.CNIC]');
    if ($this->form_validation->run()==false) {
      $cnic = $this->input->post('cnic');
      $data['singleProduct']=$this->Project_model->check($cnic);
      $this->load->view('rollNoSlip',$data);
    }
    else{
      $this->session->set_flashdata('Not_Exit','No Record Found');
      $this->load->view('layouts/header');
      $this->load->view('CheckCnic');
      $this->load->view('layouts/footer');
    }
  }

  public function SeacrhByphone(){
      $this->load->view('layouts/header');
      $this->load->view('CheckNumber');
    $this->load->view('layouts/footer');
  }
  public function check(){
     $this->form_validation->set_rules('Phone','Phone','is_unique[list_loralai_center.Phone_No]');
    if ($this->form_validation->run()==false) {
      $Phone=$this->input->post('Phone');
      $data['singleProduct']=$this->Project_model->verify($Phone);
      $this->load->view('rollNoSlip',$data);
    }
    else{
      $this->session->set_flashdata('test1','No Record Found');
      $this->load->view('layouts/header');
      $this->load->view('CheckNumber');
      $this->load->view('layouts/footer');
    }
  }
  public function CheckRollNo() {
    $this->load->view('layouts/header');
    $this->load->view('CheckCnic');
    $this->load->view('layouts/footer');
  }


  public function quettaResult(){
    $this->form_validation->set_rules('cnic','CNIC','is_unique[list_quetta_center.CNIC]');
    if ($this->form_validation->run()==false) {
      $cnic = $this->input->post('cnic');
      $data['singleProduct']=$this->Project_model->quettaResult($cnic);
      $this->load->view('rollNoSlip',$data);
    }
    else{
      $this->session->set_flashdata('Not_Exit','No Record Found');
      $this->load->view('layouts/header');
      $this->load->view('quettaResult');
      $this->load->view('layouts/footer');
    }
  }


  public function SearchByPhoneNo(){
    $this->load->view('layouts/header');
      $this->load->view('quettaRes');
      $this->load->view('layouts/footer');
  }

  public function get(){
    $this->load->view('layouts/header');
      $this->load->view('quettaResult');
      $this->load->view('layouts/footer');
  }

  public function getSlip(){
    // $str=$this->input->post('Phone');
    // $str = ltrim($str, '0');
    // echo $str;
    $this->form_validation->set_rules('Phone','Phone','is_unique[list_quetta_center.Phone_No]');
    if ($this->form_validation->run()==false) {
      $Phone=$this->input->post('Phone');
      $data['singleProduct']=$this->Project_model->getRes($Phone);
      $this->load->view('rollNoSlip',$data);
    }
    else{
      $this->session->set_flashdata('test1','No Record Found');
      $this->load->view('layouts/header');
      $this->load->view('quettaRes');
      $this->load->view('layouts/footer');
    }
  }
}
 ?>
