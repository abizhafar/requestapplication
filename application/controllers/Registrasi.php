<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Divisi_model');
	}

	public function index()
	{
		$data['divisi']=$this->Divisi_model->get_divisi();
		$this->load->view('registrasi_view',$data);
	}

}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */