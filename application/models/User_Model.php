<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User_Model extends CI_Model {
	
		public function Login($username,$password)
		{
			$this->db->select('id_user,nama_user,username,password,akses');
			$this->db->from('user');
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$query=$this->db->get();
			if ($query->num_rows()==1) {
				return $query->result();
			}else{
				return false;
			}
		}
	
	}
	
	/* End of file User_Model.php */
	/* Location: ./application/models/User_Model.php */
 ?>