<?php
	
class Signup extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));

		$this->load->model('WebsiteModel');	
	}

	public function index() {

		$data = array(
			'captcha' => generateRandomString()
		);

		$this->load->view('layouts/header');
		$this->load->view('website/signup', $data);
		$this->load->view('layouts/footer');
		
	}

	public function Biodata() {

		$id = $this->input->get('id');
		$fetch_data = $this->WebsiteModel->userdata($id);
		foreach($fetch_data as $dt) {
			$data = array(
				'id' => $id,
				'cnic' => $dt->cnic_no,
				'name' => $dt->name,
				'father_name' => $dt->father_name,
				'email' => $dt->email,
				'number' => $dt->ph_number,
				'image' => $dt->image,
				'father_occupation' => $dt->father_occupation,
				'husband_name' => $dt->husband_name,
				'husband_occupation' => $dt->husband_occupation,
				'date_of_birth' => $dt->date_of_birth,
				'gender' => $dt->gender,
				'religion' => $dt->religion,
				'domicile' => $dt->domicile,
				'district' => $dt->district,
				'per_address' => $dt->per_address,
				'postal_address' => $dt->postal_address,
				'res_phone' => $dt->res_phone,
				'office_phone' => $dt->office_phone,
				'govt_service' => $dt->govt_service,
				'disability' => $dt->disability,
				'armed_force' => $dt->armed_force
			);
		}

		$this->load->view('layouts/header');
		$this->load->view('website/biodata', $data);
		$this->load->view('layouts/footer');
	}

	public function Education() {

		if($this->input->get('id') != '') {
			$id = $this->input->get('id');
			$data = array(
				'id' => $id,
			);
		
		} else if($this->input->get('eduid')) {
			$edu_id = $this->input->get('eduid');
			$fetch_data = $this->WebsiteModel->fetch_user_education2($edu_id);
			foreach($fetch_data as $fd) {
				$data = array(
					'edu_id' => $edu_id,
					'id' => $fd->user_id,
					'degree_name' => $fd->degree_name,
					'institute' => $fd->institute,
					'degree_type' => $fd->degree_type,
					'board_name' => $fd->board_name,
					'passing_date' => $fd->passing_date,
					'total_marks' => $fd->total_marks,
					'obtained_marks' => $fd->obtained_marks,
					'exam_system' => $fd->exam_system,
					'division' => $fd->division,
					'cgpa' => $fd->cgpa,
					'optional_subjects' => $fd->optional_subjects
				);
			} 
		}

		$this->load->view('layouts/header');
		$this->load->view('website/education', $data);
		$this->load->view('layouts/footer');
	}

	public function Experience() {
		if($this->input->get('id') != '') {-+
			$id = $this->input->get('id');
			$data = array(
				'id' => $id
			);
		} else if($this->input->get('expid') != '') {
			$exp_id = $this->input->get('expid');
			$fetch_data = $this->WebsiteModel->fetch_user_experience2($exp_id);
			foreach($fetch_data as $fd) {
				$data = array(
					'exp_id' => $exp_id,
					'id' => $fd->user_id,
					'from_date' => $fd->from_date,
					'to_date' => $fd->to_date,
					'post_name' => $fd->post_name,
					'dept_name' => $fd->dept_name,
					'dept_type' => $fd->dept_type,
					'bps' => $fd->bps,
					'salary' => $fd->salary,
					'duties' => $fd->duties
				);
			} 
		} 
 
		$this->load->view('layouts/header');
		$this->load->view('website/experience', $data);
		$this->load->view('layouts/footer');
	}

	public function Challan() {

		if($this->input->get('id') != '') {
			$id = $this->input->get('id');
			$data = array(
				'id' => $id
			);
		}

		$this->load->view('layouts/header');
		$this->load->view('website/challan', $data);
		$this->load->view('layouts/footer');
	}

	public function challan_form() {
		if($this->input->get('id') != '') {
			$id = $this->input->get('id');

			$bank_name = $this->WebsiteModel->fetch_user_bank($id);
			if($bank_name == '') {
				$bank_name == '';
			}

			$get_project = $this->WebsiteModel->get_project($id);
			$get_post = $this->WebsiteModel->get_post($id);

			$post_name = $this->WebsiteModel->get_postt_name($get_post);
			$project_name = $this->WebsiteModel->result_name($get_project)['name'];

			$user_data = $this->WebsiteModel->userdata($id);
			foreach($user_data as $us) {
				$data = array(
					'id' => $id,
					'bank_name' => $bank_name,
					'name' => $us->name.' '.$us->father_name,
					'cnic' => $us->cnic_no,
					'contact' => $us->ph_number,
					'post' => $post_name,
					'project' => $project_name,
				);
			}
		}

		// $this->load->view('layouts/header');
		$this->load->view('website/challan_form', $data);
		// $this->load->view('layouts/footer');
	}


	public function Post() {

		if($this->input->get('id') != '' && $this->input->get('post_id') == '' && $this->input->get('project_id') == '') {
			$id = $this->input->get('id');

			$get_project = $this->WebsiteModel->get_project($id);
			$get_post = $this->WebsiteModel->get_post($id);

			$project_name = $this->WebsiteModel->result_name($get_project)['name'];
			$post_name = $this->WebsiteModel->pr_post_name($get_post);

			$data = array(
				'id' => $id,
				'project' => $project_name,
				'post' => $post_name,
				'challan_date' => '',
				'file' => ''
			);
		} else if($this->input->get('id') != '' && $this->input->get('project_id') != '' && $this->input->get('post_id') != '') {
			$id = $this->input->get('id');
			$project_id = $this->input->get('project_id');
			$post_id = $this->input->get('post_id');

			$project_name = $this->WebsiteModel->result_name($project_id)['name'];
			$post_name = $this->WebsiteModel->pr_post_name($post_id);

			$fetch_all = $this->WebsiteModel->fetch_user_post_all_dt($post_id,$project_id, $id);
			if($fetch_all) {
				foreach($fetch_all as $f) {

					$url = base_url().'uploads/challan/'.$f->challan_file;

					$data = array(
						'id' => $id,
						'project' => $project_name,
						'post' => $post_name,
						'challan_date' => $f->challan_date != '' ? $f->challan_date : '',
						'file' => $f->challan_file != '' ? $url : ''
					);
				}
			} else {

			$data = array(
				'id' => $id,
				'project' => $project_name,
				'post' => $post_name,
				'challan_date' => '',
				'file' => ''
			);
		}
		}

		$this->load->view('layouts/header');
		$this->load->view('website/apply_post', $data);
		$this->load->view('layouts/footer');
	}

	public function save() {

		$name1 = $this->input->post('user_name');
		$f_name = $this->input->post('father_name');
		$cnic = $this->input->post('cnic');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');
		$password_hash = password_hash($password, PASSWORD_BCRYPT);

		$name= $_FILES['file']['name'];

		$tmp_name= $_FILES['file']['tmp_name'];

		$size= $_FILES['file']['size'];

		// $path= "./uploads/users";

		if(isset($name)) {
			if(empty($name)) {
				$this->session->set_flashdata('warning', 'please select an image');
				return redirect(base_url().'website/Signin');	
			} else if((!empty($name)) && ($size < 20971520)) {
				$config['upload_path']          = './uploads/users';
		        $config['allowed_types']        = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JEPG';
		        // $config['max_size']             = 100;
		        // $config['max_width']            = 1024;
		        // $config['max_height']           = 768;

	          	$this->load->library('upload', $config);
	          	$this->upload->do_upload('file');
	          	$upload_data = $this->upload->data(); 
          		$file_name = $upload_data['file_name'];

			} else {
				$this->session->set_flashdata('warning', 'image exceeds 2MB');
		 		return redirect(base_url().'website/Signin');	
			}
		}
		$data = array(
				'name' => $name1,
				'father_name' => $f_name,
				'cnic_no' => $cnic,
				'email' => $email,
				'ph_number' => $phone,
				'password' => $password_hash,
				'image' => $file_name
		);

		$check_user = $this->WebsiteModel->fetch_user_id($cnic);
		if($check_user) {
			$this->session->set_flashdata('warning', 'Cnic already registered' );
			return redirect(base_url().'website/Signin');	
		} else {	 
		$save = $this->WebsiteModel->signup($data);
		if($save) {
			return redirect(base_url().'website/Signup/Biodata?id='.$save);
		} else {
			$this->session->set_flashdata('warning', 'Form could not be sumbitted. Try again' );
			return redirect(base_url().'website/Signup');
		}
	}
}

	public function savebiodata() {

		$cnic = $this->input->post('cnic');
		$name1 = $this->input->post('name');
		$father_name = $this->input->post('father_name');
		$father_occupation = $this->input->post('father_occupation');
		$husband_name = $this->input->post('husband_name');
		$husband_occupation = $this->input->post('husband_occupation');
		$dob = $this->input->post('date_of_brith');
		$gender = $this->input->post('gender');
		$religion = $this->input->post('religion');
		$domicile = $this->input->post('local');
		$district = $this->input->post('district');
		$per_address = $this->input->post('permanent_address');
		$postal_address = $this->input->post('postal_address');
		$res_phone = $this->input->post('res_phoneno');
		$ofc_phone = $this->input->post('office_phoneno');
		$mobile = $this->input->post('mobile_no');
		$email = $this->input->post('email');
		$govt_service = $this->input->post('govt_service');
		$disability = $this->input->post('disability');
		$armed_forces = $this->input->post('armed');
		$image = $this->input->post('file');


		$name= $_FILES['file']['name'];

		$tmp_name= $_FILES['file']['tmp_name'];

		$size= $_FILES['file']['size'];

		if(isset($name)) {
		 	if((!empty($name)) && ($size < 20971520)) {
				$config['upload_path']          = './uploads/users';
		        $config['allowed_types']        = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JEPG';
		        // $config['max_size']             = 100;
		        // $config['max_width']            = 1024;
		        // $config['max_height']           = 768;

	          	$this->load->library('upload', $config);
	          	$this->upload->do_upload('file');
	          	$upload_data = $this->upload->data(); 
          		$file_name = $upload_data['file_name'];

			} else {
				$this->session->set_flashdata('warning', 'image exceeds 2MB');
		 		return redirect(base_url().'website/Signup/Biodata?id='.$this->input->post('id'));	
			}
		}


		$data = array(
			'cnic_no' => $cnic,
			'name' => $name1,
			'father_name' => $father_name,
			'father_occupation' => $father_occupation,
			'husband_name' => $husband_name,
			'husband_occupation' => $husband_occupation,
			'date_of_birth' => $dob,
			'gender' => $gender,
			'religion' => $religion,
			'domicile' => $domicile,
			'district' => $district,
			'per_address' => $per_address,
			'postal_address' => $postal_address,
			'res_phone' => $res_phone,
			'office_phone' => $ofc_phone,
			'ph_number' => $mobile,
			'email' => $email,
			'govt_service' => $govt_service,
			'disability' => $disability,
			'armed_force' => $armed_forces,
			'image' => $file_name
		);

		$id = $this->input->post('id');
		$update = $this->WebsiteModel->update_signup($data, $id);
		if($update) {
			return redirect(base_url().'website/Signup/Education?id='.$id);
		} else {
			$this->session->set_flashdata('warning', 'Form could not be sumbitted. Try again');
			return redirect(base_url().'website/Signup/Biodata?id='.$id);
		}
	}

	public function save_education() {


		$degree_name = $this->input->post('degree_name');
		$institute_name = $this->input->post('institute_name');
		$degree_type = $this->input->post('degree_type');
		$board_name = $this->input->post('board_name');
		$passing_date = $this->input->post('passing_date');
		$total_marks = $this->input->post('total_marks');
		$obtained_marks = $this->input->post('obtained_marks');
		$exam_system = $this->input->post('exam_system');
		$division = $this->input->post('division');
		$cgpa = $this->input->post('cgpa');
		$optional_subjects = $this->input->post('optional_subjects');
		$user_id = $this->input->post('id');

		$data = array(
			'user_id' => $user_id,
			'degree_name' => $degree_name,
			'institute' => $institute_name,
			'degree_type' => $degree_type,
			'board_name' => $board_name,
			'passing_date' => $passing_date,
			'total_marks' => $total_marks,
			'obtained_marks' => $obtained_marks,
			'exam_system' => $exam_system,
			'division' => $division,
			'cgpa' => $cgpa,
			'optional_subjects' => $optional_subjects
		);

		if($this->input->post('edu_id') == '') {
			$save = $this->WebsiteModel->signup_edu($data);
			if($save) {
				$this->session->set_flashdata('warning', 'Form sumbitted');
				return redirect(base_url().'website/Signup/Education?id='.$user_id);
			} else {
				$this->session->set_flashdata('warning', 'Form could not be sumbitted. Try again');
				return redirect(base_url().'website/Signup/Education?id='.$user_id);
			}
		} else {
			$edu_id = $this->input->post('edu_id');
			$update = $this->WebsiteModel->update_edu($data, $edu_id);
			if($update) {
				$this->session->set_flashdata('warning', 'Form sumbitted');
				return redirect(base_url().'website/Signup/Education?id='.$user_id);
			} else {
				$this->session->set_flashdata('warning', 'Form could not be sumbitted. Try again');
				return redirect(base_url().'website/Signup/Education?id='.$user_id);
			}
		}
	}

	public function save_post_challan() {

		$user_id = $this->input->post('id');
		$project = $this->input->post('pr_name');
		$post_name = $this->input->post('post_name');
		$bank = $this->input->post('bank_name');

		$data = array(
			'user_id' => $user_id,
			'project' => $project,
			'post_name' => $post_name,
			'bank_name' => $bank,
			'date_applied' => date("Y-m-d h:i:sa")
		);

		if($this->input->post('post_id') == '') {
			$insert = $this->WebsiteModel->add_user_post($data);
			if($insert) {
				$this->session->set_flashdata('warning', 'Form sumbitted');
				return redirect(base_url().'website/Signup/challan_form?id='.$user_id);
			} else {
				$this->session->set_flashdata('warning', 'Form could not be sumbitted. Try again');
				return redirect(base_url().'website/Signup/Challan?id='.$user_id);
			}
		} 
	}

	public function save_experience() {
		
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		$post_name = $this->input->post('post_name');
		$dept_name = $this->input->post('department_name');
		$dept_type = $this->input->post('department_type');
		$bps = $this->input->post('bps');
		$salary = $this->input->post('salary');
		$duties = $this->input->post('duties');
		$user_id = $this->input->post('id');

		$data = array(
			'user_id' => $user_id,
			'from_date' => $from_date,
			'to_date' => $to_date,
			'post_name' => $post_name,
			'dept_name' => $dept_name,
			'dept_type' => $dept_type,
			'bps' => $bps,
			'salary' => $salary,
			'duties' => $duties
		);

		if($this->input->post('exp_id') == '') {
			$insert = $this->WebsiteModel->add_user_experience($data);
			if($insert) {
				$this->session->set_flashdata('warning', 'Form sumbitted');
				return redirect(base_url().'website/Signup/Experience?id='.$user_id);
			} else {
				$this->session->set_flashdata('warning', 'Form could not be sumbitted. Try again');
				return redirect(base_url().'website/Signup/Experience?id='.$user_id);
			}
		} else if($this->input->post('exp_id') != '') {
			$exp_id = $this->input->post('exp_id');
			$update = $this->WebsiteModel->update_exp($data, $exp_id);
			if($update) {
				$this->session->set_flashdata('warning', 'Form sumbitted');
				return redirect(base_url().'website/Signup/Experience?id='.$user_id);
			} else {
				$this->session->set_flashdata('warning', 'Form could not be sumbitted. Try again');
				return redirect(base_url().'website/Signup/Experience?id='.$user_id);
			}
		}
	}

	public function save_post() {

		$challan_date = $this->input->post('challan_date');
		// $file = $this->input->post('file');
		$user_id = $this->input->post('id');

        $name= $_FILES['file']['name'];

		$tmp_name= $_FILES['file']['tmp_name'];

		$size= $_FILES['file']['size'];

		// $path= "./uploads/users";

		if(isset($name)) {
			if(empty($name)) {
				$this->session->set_flashdata('warning', 'please select an image');
				return redirect(base_url().'website/Signup/Post?id='.$user_id);	
			} else {
				$config['upload_path']          = './uploads/challan';
		        $config['allowed_types']        = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JEPG';
		        // $config['max_size']             = 100;
		        // $config['max_width']            = 1024;
		        // $config['max_height']           = 768;

	          	$this->load->library('upload', $config);
	          	$this->upload->do_upload('file');
	          	$upload_data = $this->upload->data(); 
          		$file_name = $upload_data['file_name'];

          		$data = array(
					'challan_submitted' => 1,
					'challan_date' => $challan_date,
					'date_applied' => date("Y-m-d h:i:sa"),
					'challan_file' => $file_name
				);

					if($this->input->post('id') != '' && $this->input->post('post_id') == '' && $this->input->post('project_id') == '') {
					$insert = $this->WebsiteModel->update_user_postt($user_id,$data);
					if($insert) {
						// $this->session->set_flashdata('warning', 'Form sumbitted');
						// return redirect(base_url().'website/Signup/Success?id='.$user_id);
						$post = $this->WebsiteModel->get_post($user_id);
						return redirect(base_url().'website/Rollnoslips/pending_slip?user_id='.$user_id.'&post_id='.$post);
					} else {
						$this->session->set_flashdata('warning', 'Form could not be sumbitted. Try again');
						return redirect(base_url().'website/Signup/Post?id='.$user_id);
					}
				} else if($this->input->post('id') != '' && $this->input->post('post_id') != '' && $this->input->post('project_id') != '') {
					$insert = $this->WebsiteModel->update_user_postt_2($user_id, $this->input->post('project_id'), $this->input->post('post_id'), $data);
					if($insert) {
						return redirect(base_url().'website/Rollnoslips/pending_slip?user_id='.$user_id.'&post_id='.$this->input->post('post_id'));
					} else {
						$this->session->set_flashdata('warning', 'Form could not be sumbitted. Try again');
						return redirect(base_url().'website/Signup/Post?id='.$user_id);
					}
				}
		    }
		} else {
		      	$this->session->set_flashdata('warning', 'There is a problem with the uploaded file. Try again');
						return redirect(base_url().'website/Signup/Post?id='.$user_id);
		      }
	}


	public function Success() {
		$this->load->view('layouts/header');
		$this->load->view('website/success');
		$this->load->view('layouts/footer');
	}

	public function getProjects() {
		$this->WebsiteModel->get_postslist();
	}
}	

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>