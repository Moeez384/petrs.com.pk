<?php

class News extends CI_Controller {

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
					'created_date' => $pr->created_date
				);
			}
		} else {
			$data = array();
		}	

		$this->load->view('admin/news/listing', $data);

	}

	public function add_news() {
		$this->load->view('admin/news/add');
	}

	public function edit_news() {
		
		$id = $this->input->get('id');
		$news = $this->ProjectsModel->fetch_news($id);
		foreach($news as $ns) {
			$data = array(
				'id' => $id,
				'title' => $ns->title,
				'detail' => $ns->details,
				'attachment' => $ns->image
			);
		}

		$this->load->view('admin/news/edit', $data);
	}

	public function save() {
		$name = $this->input->post('title');
		$details = $this->input->post('detail');
		$file = $this->input->post('file');

		  $config['upload_path']          = './uploads/news';
          $config['allowed_types']        = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JEPG';
          $config['max_size']             = 100;
          $config['max_width']            = 1024;
          $config['max_height']           = 768;

          $this->load->library('upload', $config);

            $upload = $this->upload->do_upload('file');
         if($upload) {
          $upload_data = $this->upload->data(); 
          $file_name = $upload_data['file_name'];
      } else {
      	$file_name = '';
      }

		$data = array(
				'title' => $name,
				'details' => $details,
				'image' => $file_name,
				'created_date' => date('Y-m-d')
		);

		$add_news = $this->ProjectsModel->add_news($data);
			if($add_news) {
				$this->session->set_flashdata('success', 'News submitted successfully');
			    return redirect(base_url().'admin/News/add_news');
			} else {
				$this->session->set_flashdata('warning', 'News could not be sumbitted. Try again' );
			   return redirect(base_url().'admin/News/add_news');
			}
		}

	public function update() {
		$id = $this->input->post('id');
		$name = $this->input->post('title');
		$details = $this->input->post('detail');
		$file = $this->input->post('file');

		  $config['upload_path']          = './uploads/news';
          $config['allowed_types']        = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JEPG';
          // $config['max_size']             = 100;
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;

          $this->load->library('upload', $config);

         $upload = $this->upload->do_upload('file');
         if($upload) {
          $upload_data = $this->upload->data(); 
          $file_name = $upload_data['file_name'];
      } else {
      	$file_name = '';
      }

		$data = array(
				'title' => $name,
				'details' => $details,
				'image' => $file_name,
				'created_date' => date('Y-m-d')
		);

		$update_news = $this->ProjectsModel->update_news($data, $id);
			if($update_news) {
			   $this->session->set_flashdata('success', 'News updated successfully');
			   return redirect(base_url().'admin/News/edit_news?id='.$id);
			} else {
			   $this->session->set_flashdata('warning', 'News could not be updated. Try again' );
			   return redirect(base_url().'admin/News/edit_news?id='.$id);
			}
		}
}
