<?php 

/**
* 
*/
class E_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->checkLogin();
	}

	public function checkLogin()
	{
		$userdata = $this->session->userdata('user_data');
		if ($userdata != null) {
			return true;
		}else {
			redirect('user/checkLogin');
		}
	}

}

 ?>