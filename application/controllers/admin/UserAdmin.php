<?php  


class UserAdmin extends CI_Controller
{

	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');
	}
	
	public function index(){
		$this->load->view('newUsers/listing');
	}

	public function insert(){
		$this->form_validation->set_rules('id','ID','is_unique[users.id]');
		$this->form_validation->set_rules('name','User Name','is_unique[users.name]');
		if($this->form_validation->run() == false)
        {
        	$data_error=[
				'error12'=>validation_errors()
			];
			$this->session->set_flashdata($data_error);
            redirect('admin/UserAdmin/index');

        }
        else{
		$data['id']=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$data['email']=$this->input->post('email');
		$data['pwd']=$this->input->post('pwd');
		$data['project']=$this->input->post('project');
		$query=$this->Project_model->insertUser($data);
		$data['quer']=$this->Project_model->getProjectId($data);
		$que=$this->Project_model->insertLinks($data);
		if ($que && $query) {
		$this->session->set_flashdata('insert','Your Data Has Been succefully Inserted');
			$this->load->view('newUsers/listing');
		}
		else{
		$this->session->set_flashdata('false','Data Not Inserted');
		$this->load->view('newUsers/listing');
		}
	 }
	}

	public function allUsers(){
		$data['result']=$this->Project_model->allUsers();
		$this->load->view('newUsers/allUsers',$data);
	}


	public function deleteUser($id){
		$query=$this->Project_model->deleteUser($id);
		if ($query) {
		$this->session->set_flashdata('delete','Data Deleted');
		redirect('Admin/UserAdmin/allUsers');
		}
		else{
			$this->session->set_flashdata('delete12','Could Not Delete The Data');
			redirect('Admin/UserAdmin/allUsers');
		}
	}

	public function deleteLinks($id,$Idd){
		$query=$this->Project_model->deleteLinks($id,$Idd);
		if ($query) {
		$this->session->set_flashdata('delete2587','Data Deleted');
		redirect('Admin/UserAdmin/assignedProjects');
		}
		else{
			$this->session->set_flashdata('delete36987','Could Not Delete The Data');
			redirect('Admin/UserAdmin/assignedProjects');
		}
	}

	public function addProjects(){
		$this->load->view('AssociateProjects');
	}

	public function link(){

		$data['name']=$this->input->post('name');
		$data['project']=$this->input->post('project');
		$data['id']=$this->Project_model->getUserIdByName($data);
		$data['quer']=$this->Project_model->getProjectId($data);
		$query=$this->Project_model->checkLinks($data);
		if ($query >=1) {
			$this->session->set_flashdata('alreadyExits','This Project Is already Assigned To This User');
			$this->load->view('AssociateProjects');
		}
		else{
		$que=$this->Project_model->insertLinks($data);
		if ($que) {
		$this->session->set_flashdata('insert12584','Your Data Has Been succefully Inserted');
			$this->load->view('AssociateProjects');
		}
	 }
	}

	// public function assignedProjects(){
	// 	$data['results']=$this->Project_model->assignedprojects();
	// 	$this->load->view('newUsers/assignedProjects',$data);
	// }

	public function assignedProjects(){
     $data['results']=$this->Project_model->assignedprojects();
 	 $this->load->view('newUsers/assignedProjects',$data);
	}

	public function addpost(){
		$this->load->view('addpost');
	}
}

?>