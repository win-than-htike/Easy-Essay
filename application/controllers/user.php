<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login()
	{
		if ($this->input->post()) {

			$this->load->model('UserModel');
			$data = $this->UserModel->login($this->input->post());
			

			if ($data != null) {
				$this->session->set_userdata('user_data',$data);
				redirect('essay');
			}else{
				redirect('essay');
			}
			
		}
	}

	public function checkLogin()
	{
		$this->load->view('login');
	}

	public function logout()
	{
		$this->session->unset_userdata('user_data');
		redirect('user/checkLogin');
	}

	// public function create()
	// {
		
	// 	if ($this->input->post()) {
			
	// 		$this->CategoryModel->create( $this->input->post() );
	// 		redirect('category');

	// 	}else{

	// 		$this->load->view('category_create');

	// 	}

	// }

	// public function edit($id)
	// {

	// 	if ( $this->input->post() ) {
			
	// 		$this->CategoryModel->edit($id, $this->input->post());
	// 		redirect('category');

	// 	}else{

	// 		$category = $this->CategoryModel->get_single($id);

	// 		if ($category->num_rows() > 0) {

	// 			$data['category'] = $category->row();
	// 			$this->load->view('category_edit', $data);

	// 		}

	// 	}
	// }

	// public function delete($id)
	// {
	// 	$this->CategoryModel->delete($id);
	// 	redirect('category');
	// }


}

?>
