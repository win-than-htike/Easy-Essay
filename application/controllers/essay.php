<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Essay extends CI_Controller {

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

			$this->load->view('create_essay');

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
				$this->load->view('edit_essay', $data);

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
