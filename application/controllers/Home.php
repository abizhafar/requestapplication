<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('User_Model');
			$this->load->library('session');
		}
		public function index()
		{
			$this->load->view('home');		
		}

		public function CekLogin($value='')
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required');	
			$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_CekDB');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('home');
			} else {
				$session_data=$this->session->userdata('logged_in');
				$akses=$session_data['akses'];
				redirect('Dashboard','refresh');
				
			}
		}


		public function CekDB($password)
		{
			$username=$this->input->post('username');
				$result =$this->User_Model->login($username,$password);
				if ($result) {
					$sess_array= array();
					foreach ($result as $row) {
						$sess_array = array(
							'id_user'=>$row->id_user,
							'username'=>$row->username,
							'akses'=>$row->akses,
							'nama_user'=>$row->nama_user
						);
						
						$this->session->set_userdata('logged_in', $sess_array );
					}
					return true;
				}else{
					$this->form_validation->set_message('CekDB',"Login GAGAL, Username dan Password TIDAK VALID");
					return false;
				}
			
		}

		public function Logout()
		{
			$this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
			redirect('login','refresh');
		}
	
	}
	
	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */
 ?>