<?php
class Project_controller extends CI_Controller {
    public function index(){
        $this->load->view('website/signin');
    }

    public function getRollNo(){
        echo "Hello world";
    }
    public function verify(){
        $cnic = $this->input->post('cnic');
        $data['singleProduct']=$this->Project_model->check($cnic);
        $this->load->view('rollNoSlip',$data);
    }
    public function check(){
        $Phone=$this->input->post('Phone');
        $data['singleProduct']=$this->Project_model->verify($Phone);
        $this->load->view('rollNoSlip',$data);
    }
    public function SeacrhByphone(){
        $this->load->view('index1');
    }	
    
//     public function home(){
//         $this->load->view('layouts/header');
// 		$this->load->view('website/index');
// 		$this->load->view('layouts/footer');
//     }

// public function getresult(){
//     $this->load->view('layouts/header');
// 		$this->load->view('website/index');
// 		$this->load->view('layouts/footer');
// }
}
?>