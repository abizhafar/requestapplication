<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Request_Model');
		 if (!$this->session->userdata('logged_in')) {
	      redirect('Home','refresh');
	    }
	}

	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
	    // $nama=$session_data['nama_user'];
	    $data['waiting']=$this->Request_Model->jumlah_waiting();
	    $data['proses']=$this->Request_Model->jumlah_onproses();
	    $data['trial']=$this->Request_Model->jumlah_trial();
	    $data['deploy']=$this->Request_Model->jumlah_deploy();
	    $this->load->view('dashboard_view', $data);

	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */ ?>