<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{
		$this->load->view('form_view');	
	}

	function printed()
	{
		$this->load->view('print');
	}
}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */