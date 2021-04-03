<?php
class Website_controller extends CI_Controller
{
	public function index(){
		$this->load->view('login');
	}

	public function verify(){

		$check=$this->Project_model->validate();
		if ($check){
			// $newdata = array(
   //      'username'  => $check->username
   //      );
			// $this->session->set_userdata($newdata);
			$this->load->view('registration');
		}
		else{
			$this->session->set_flashdata('log','Invalid Username or Password!');
			$this->load->view('login');
		}
	}

	public function editRollNo(){
		$this->form_validation->set_rules('cnic', 'CNIC', 'required');
		if ($this->form_validation->run() == FALSE){
            $data_error=[
				'error'=>validation_errors()
			];
			$this->session->set_flashdata($data_error);
			$this->load->view('project1');
		}
		else{
			$data['CNIC'] = $this->input->post('cnic', TRUE);
			$config['upload_path']          = './uploads/Roll';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 5555555;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('photo')){
                $error = array('error12' => $this->upload->display_errors());
                // $this->load->view('project1', $error);
                echo ("Erro: Could Not upload File");
                // echo "Could Not Upload File";
            }else{
            	$upload_data = $this->upload->data();
            	$data['photo'] = $upload_data['file_name'];
            	$this->Project_model->updateProject($data);
            	$this->session->set_flashdata('inserted20','Your Data has been Succefully Inserted!');
            	redirect('Website_controller/project');
		}
	  }
    }

	public function project(){
		$this->load->view('registration');
	}


	public function showDetails(){
		$this->form_validation->set_rules('cnic','CNIC','is_unique[list_loralai_center.CNIC]');
    if ($this->form_validation->run()==false) {
		 $cnic = $this->input->post('cnic');
         $data['singleProduct']=$this->Website_model->check($cnic);
         $this->load->view('slip',$data);	
       }
       else{
         $this->session->set_flashdata('test2','No Record Found');
         redirect('Website_controller/project');
       }
	}

	public function logout(){
		$this->load->view('login');
	}
}
?>
