<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		 if (!$this->session->userdata('logged_in')) {
		      redirect('Home','refresh');
		    }
	}
	
	public function index()
	{
	    $this->load->view('Divisi_view');
	}
}
