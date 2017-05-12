<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index()
	{
		$this->load->model('CategoryModel');
		$data['data'] = $this->CategoryModel->getAllCategory();
		$this->load->view('category_list', $data);
	}

	public function create()
	{
		
		if ($this->input->post()) {
			
			$this->CategoryModel->create( $this->input->post() );
			redirect('category');

		}else{

			$this->load->view('category_create');

		}

	}

	public function edit($id)
	{

		if ( $this->input->post() ) {
			
			$this->CategoryModel->edit($id, $this->input->post());
			redirect('category');

		}else{

			$category = $this->CategoryModel->get_single($id);

			if ($category->num_rows() > 0) {

				$data['category'] = $category->row();
				$this->load->view('category_edit', $data);

			}

		}
	}

	public function delete($id)
	{
		$this->CategoryModel->delete($id);
		redirect('category');
	}


}

?>
