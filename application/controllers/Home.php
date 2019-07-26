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
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('registered');
			$this->session->sess_destroy();
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
			redirect('home','refresh');
		}

		function cari()
	{

		if($this->input->post("psa"))
		{
			$search = $this->input->post("psa");
			$this->db->where('no_psa', $search);
			$query=$this->db->get('data_request', 1);
		}
		$get=$query->result();
		if($query->num_rows()>0)
		{
		 $output1 = '
		   <table class="table table-bordered">
		   <thead>
		    <tr>
			    <th>No. PSA</th>
		        <th>Nama User</th>
		        <th>No. Telepon</th>
		        <th>Divisi</th>
		        <th>Departemen</th>
		        <th>Nama Aplikasi</th>
		        <th>Tanggal Interview User</th>
		        <th>Tanggal Rencana Digunakan</th>
		        <th>Status</th>
		        <th>Aksi</th>

		    </tr>
		    </thead>
		 ';
		 foreach ($get as $value) {
		 	switch($value->status) {
		               case '1' : $status='<td><span class="label label-warning">Waiting</span></td>'; break;
		               case '2' : $status='<td><span class="label label-primary">On-Process</span></td>'; break;
		               case '3' : $status='<td><span class="label label-info">In Trial</span></td>'; break;
		               case '4' : $status='<td><span class="label label-success">Deployment</span></td>'; break;
		               default  : $status='<td>N/A</td>';}
		 	$output2 = '
			 <tbody>  
			   <tr>
			    <td>'.$value->no_psa.'</td>
			    <td>'.$value->nama_user.'</td>
			    <td>'.$value->no_telp.'</td>
			    <td>'.$value->divisi.'</td>
			    <td>'.$value->departemen.'</td>
			    <td>'.$value->nama_aplikasi.'</td>
			    <td>'.$value->tgl_interview.'</td>
			    <td>'.$value->tgl_digunakan.'</td>'.
			    	$status
			    .'<td><form method="post" action="'.site_url('Form/printed').'"><input value="'.$value->no_psa.'" name="no_psa" style="display:none"><button type="submit" class="btn btn-primary"><i class="fa fa-print"></i></button>
			    </form>
			   </tr>
			 <tbody>
			  ';
		 }
		echo $output1."".$output2;
	}else{
		 echo 'Data Not Found';
	}
	}
	
	}
	
	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */
 ?>