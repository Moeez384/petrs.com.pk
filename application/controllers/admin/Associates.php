<?php

class Associates extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->view('admin/layouts/nav_header');
		$this->load->model('ProjectsModel');	
	}

	public function index() {
		$this->load->view('admin/associate/listing');
	}

	public function add_associate() {
		$this->load->view('admin/associate/add');
	}

	public function update_associate() {
		$id = $this->input->get('id');

		$associate = $this->ProjectsModel->fetch_associate($id);
		foreach($associate as $as) {
			$data = array(
				'id' => $id,
				'uni_name' => $as->uni_name
			);
		}

		$this->load->view('admin/associate/edit', $data);
	}

	public function save() {
		$name = $this->input->post('title');

		$data = array(
			'uni_name' => $name
		);

		$check_associate = $this->ProjectsModel->check_associate($name);
		if($check_associate) {
			$this->session->set_flashdata('warning', 'Associate already exists. Try again' );
			return redirect(base_url().'admin/Associates/add_associate');
		} else {
			$save = $this->ProjectsModel->add_associate($data);
			if($save) {
				$this->session->set_flashdata('success', 'Associate submitted successfully');
				return redirect(base_url().'admin/Associates/add_associate');
			} else {
				$this->session->set_flashdata('warning', 'Associate could not be sumbitted. Try again' );
				return redirect(base_url().'admin/Associates/add_associate');
			}
		}
	}

	// public function update() {
	// 	$id = $this->input->post('id');
	// 	$name = $this->input->post('title');

	// 	$data = array(
	// 		'uni_name' => $name
	// 	);

	// 	$check_associate = $this->ProjectsModel->check_associate($name);
	// 	if($check_associate) {
	// 		$this->session->set_flashdata('warning', 'Associate already exists. Try again' );
	// 		return redirect(base_url().'admin/Associates/update_associate');
	// 	} else {
	// 		$update = $this->ProjectsModel->update_associate($data, $id);
	// 		if($update) {
	// 			$this->session->set_flashdata('success', 'Associate updated successfully');
	// 			return redirect(base_url().'admin/Associates/update_associate?id='.$id);
	// 		} else {
	// 			$this->session->set_flashdata('warning', 'Associate could not be updated. Try again' );
	// 			return redirect(base_url().'admin/Associates/update?id='.$id);
	// 		}
	// 	}
	// }

	public function update(){
		$data['id']=$this->input->post('id');
		$data['name'] = $this->input->post('title');
		$query = $this->ProjectsModel->check_associate($data);
		if ($query) {
			$this->session->set_flashdata('Updated','Your Data Has Been Successfully Updated');
			redirect('admin/Associates/index');
		}
	}
}

?>