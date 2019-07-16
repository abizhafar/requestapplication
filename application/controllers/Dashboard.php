<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
		$session_data=$this->session->userdata('logged_in');
	    // $nama=$session_data['nama_user'];
	    $this->load->view('daftarP_view');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */ ?>