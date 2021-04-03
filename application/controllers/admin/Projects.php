<?php

class Projects extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');	
	}

	public function index() {
		$all_projects = $this->ProjectsModel->fetch_all_projects();
		if($all_projects) {
			foreach($all_projects as $pr) {
				if($pr->status == 0) {
					$status_val = 'Not started';
				} else if($pr->status == 1) {
					$status_val = 'Ongoing';
				} else if($pr->status == 2) {
					$status_val = 'Completed';
				} else {
					$status_val = '';
				}

				$data[] = array(
					'id' => $pr->id,
					'name' => $pr->name,
					'last_date' => $pr->last_date,
					'status' => $status_val,
					'created_date' => $pr->created_date,
					'center' => $pr->center
				);
			}
		} else {
			$data = array();
		}	

		$this->load->view('admin/projects/listing', $data);

	}

	public function add_project() {
		$this->load->view('admin/projects/add');
	}

	public function edit_project() {
		$id = $this->input->get('id');
		$project = $this->ProjectsModel->fetch_project($id);
		foreach($project as $pr) {

			if($pr->status == 0) {
				$status_val = 'Not started';
			} else if($pr->status == 1) {
				$status_val = 'Ongoing';
			} else if($pr->status == 2) {
				$status_val = 'Completed';
			} else {
				$status_val = '';
			}

		$data = array(
			'id' => $id,
			'name' => $pr->name,
			'last_date' => $pr->last_date,
			'status' => $pr->status,
			'attachment' => $pr->attachment,
			'status_val' => $status_val,
			'advertisement' => $pr->advertisement,
			'center' => $pr->center
		);
		}
		$this->load->view('admin/projects/edit', $data);
	}

	public function deleteProject(){
		$id = $this->input->get('id');
		$query=$this->ProjectsModel->DeleteProject($id);
		if($query){
			$this->session->set_flashdata('Deleted','Your Data Has Been Successfully Deleted');
			redirect('admin/Projects/index');
		}
	}

	public function save() {
		$name = $this->input->post('name');
		$last_date = $this->input->post('date');
		$status = $this->input->post('status');
		$attachment = $this->input->post('attachment');
		$advertisement = $this->input->post('adv');
		$center = $this->input->post('center');

		  $config['upload_path']          = './uploads/projects';
		  // $config['allowed_types'] = "*";
          $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx';
          $config['max_size']             = 100;
          $config['max_width']            = 1024;
          $config['max_height']           = 768;

          $this->load->library('upload', $config);

          $this->upload->do_upload('file');
          $upload_data = $this->upload->data(); 
          $file_name = $upload_data['file_name'];

        $check_name_projects = $this->ProjectsModel->fetch_name_project($name);
		if($check_name_projects) {
			$this->session->set_flashdata('warning', 'Project name already exists. Try again' );
			return redirect(base_url().'admin/Projects/add_project');
		} else {

		$data = array(
				'name' => $name,
				'last_date' => $last_date,
				'status' => $status,
				'attachment' => $file_name,
				'advertisement' => $advertisement,
				'created_date' => date('Y-m-d'),
				'center' => $center
		);

			$add_project = $this->ProjectsModel->add_project($data);
			if($add_project) {
				$this->session->set_flashdata('success', 'Project submitted successfully');
			   return redirect(base_url().'admin/Projects/add_project');
			} else {
			   $this->session->set_flashdata('warning', 'Project could not be sumbitted. Try again' );
			   return redirect(base_url().'admin/Projects/add_project');
			}
		}
	}

	public function update() {
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$last_date = $this->input->post('date');
		$status = $this->input->post('status');
		$attachment = $this->input->post('file');
		$advertisement = $this->input->post('adv');
		$center = $this->input->post('center');
		$image = $this->input->post('img');

		        $config['upload_path']          = './uploads/projects';
		        // $config['allowed_types'] = "*";
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

               $this->upload->do_upload('file');
               $upload_data = $this->upload->data(); 
               $file_name = $upload_data['file_name'];
        
        if($file_name == '') {
        	$img = $image;
        } else {
        	$img = $file_name;
        }      

		$data = array(
			'name' => $name,
			'last_date' => $last_date,
			'status' => $status,
			'attachment' => $img,
			'advertisement' => $advertisement,
			'updated_date' => date('Y-m-d'),
			'center' => $center
		);

		$this->ProjectsModel->update_project($data, $id);

		$this->session->set_flashdata('success', 'Project updated successfully');
		return redirect(base_url().'admin/Projects/edit_project?id='.$id);


			// if($update_project) {
			//    $this->session->set_flashdata('success', 'Project updated successfully');
			//    return redirect(base_url().'admin/Projects/edit_project?id='.$id);
			// } else {
			// 	$this->session->set_flashdata('warning', 'Project could not be updated. Try again' );
			//    return redirect(base_url().'admin/Projects/edit_project?id='.$id);
			// }
		// }
	}

	public function download() {

	//	$this->load->helper('download');

		$file = $this->input->get('file');
		//$id = $this->input->get('id');
$this->load->helper('download');

		$path = file_get_contents(base_url()."uploads/projects/".$file);
		force_download(base_url()."uploads/projects/".$file, NULL);

		// $this->session->set_flashdata('success', 'File downloaded successfully');
		// return redirect(base_url().'admin/Projects/edit_project?id='.$id);
	}
}

?>