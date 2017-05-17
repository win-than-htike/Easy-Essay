<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Essay extends CI_Controller {

	public function index()
	{

		$page = $this->input->get('page');
		$pagesize = 10;
		$offset = ($page-1)*$pagesize;

		$this->load->model('api/ApiEssayModel');
		$data = $this->ApiEssayModel->getAllEssay($pagesize, $offset);

		header('Content-Type: application/json');
    	echo json_encode( $data );
	}

	// public function create()
	// {

	// 	if ($this->input->post()) {

	// 		$this->EssayModel->create( $this->input->post() );
	// 		redirect('essay');

	// 	}else{

	// 		$data['category'] = $this->EssayModel->getAllCategory();
	// 		$this->load->view('essay_create', $data);

	// 	}

	// }

	// public function edit($id)
	// {

	// 	if ( $this->input->post() ) {

	// 		$this->EssayModel->edit($id, $this->input->post());
	// 		redirect('essay');

	// 	}else{

	// 		$essay = $this->EssayModel->get_single($id);

	// 		if ($essay->num_rows() > 0) {

	// 			$data['essay'] = $essay->row();
	// 			$data['category'] = $this->EssayModel->getAllCategory();
	// 			$this->load->view('essay_edit', $data);

	// 		}

	// 	}
	// }

	// public function delete($id)
	// {
	// 	$this->EssayModel->delete($id);
	// 	redirect('essay');
	// }


}

?>
