<?php  


class userProjects extends CI_Controller
{
	
	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');	
		$this->load->model('Project_model');
	}
	
	public function index(){
		$this->load->view('userProject/listing');
	}

	public function insertProject(){
		$data['project_name']=$this->input->post('project_name');
		$query=$this->Project_model->insertProject($data);
		if ($query) {
		$this->session->set_flashdata('insert1','Your Data Has Been succefully Inserted');
			$this->load->view('userProject/listing');
		}
		else{
			$this->session->set_flashdata('false1','Data Not Inserted');
			$this->load->view('userProject/listing');
		}
	}

	public function allProjects(){
		$data['result']=$this->Project_model->getProject();
		$this->load->view('userProject/allProjects',$data);
	}

	public function deleteProject($id){
		$query=$this->Project_model->deleteProjects($id);
		if ($query){
			$this->session->set_flashdata('false09','Data Deleted');
			redirect('Admin/userProjects/allProjects');
		}
	}

	public function searchProject($id){

		$res=$this->Project_model->searchProject($id);
		$data['result']=$this->Project_model->gettesttable($res->project_name);
		$data['ids']=$id;
		// if ($result) {
			
		$this->load->view('myproject',$data);
		// }
		// else{
		// 	echo "Helo";
		// }
	}

	public function deletetest($id,$idd){
		$query=$this->Project_model->deletetest($id);
		if ($query) {
			$this->session->set_flashdata('false12587','Data Has Been Deleted');
			redirect('Admin/userProjects/searchProject/'.$idd);
		}
	}

	public function addpost(){
		$data['post']=$this->input->post('post');
		$this->Project_model->addpost($data);
		
			$this->session->set_flashdata('success123','Job Post Has Been Added ');
			$this->load->view('addpost');
		
	}

	public function alljobposts(){
		$data['results']=$this->Project_model->alljobposts();
		$this->load->view('alljobposts',$data);
	}

	public function deletepost($id){
		$query=$this->Project_model->deletepost($id);
		if ($query) {
		$this->session->set_flashdata('notsuccess123','Job Post Has Been Deleted ');
			redirect('admin/userProjects/alljobposts');
		}
	}
}
?>