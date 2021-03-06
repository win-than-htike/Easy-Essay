<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Essay extends E_Controller {

	public function index()
	{
		$this->load->model('EssayModel');
		$data['data'] = $this->EssayModel->getAllEssay();
		$this->load->view('essay_list', $data);
	}

	public function create()
	{
		
		if ($this->input->post()) {
			
			$this->EssayModel->create( $this->input->post() );
			redirect('essay');

		}else{

			$data['category'] = $this->EssayModel->getAllCategory();
			$this->load->view('essay_create', $data);

		}

	}

	public function edit($id)
	{

		if ( $this->input->post() ) {
			
			$this->EssayModel->edit($id, $this->input->post());
			redirect('essay');

		}else{

			$essay = $this->EssayModel->get_single($id);

			if ($essay->num_rows() > 0) {

				$data['essay'] = $essay->row();
				$data['category'] = $this->EssayModel->getAllCategory();
				$this->load->view('essay_edit', $data);

			}

		}
	}

	public function delete($id)
	{
		$this->EssayModel->delete($id);
		redirect('essay');
	}


}

?>
