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

		function get_all_user() 
  		{
    		$this->datatables->select('id_user,nama_user,username,password,akses');
    		$this->datatables->from('user');
    		$this->datatables->add_column('view',
    		'<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-id_user="$1" data-nama_user="$2" data-username="$3" data-password="$4" data-akses="$5"><i class="fa fa-edit"></i> EDIT</a>
    		 <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-s" data-id_user="$1"><i class="glyphicon glyphicon-remove-sign"></i> HAPUS</a>', 'id_user,nama_user,username,password,akses');
        
    		return $this->datatables->generate();
 		}

	
	}
	
	/* End of file User_Model.php */
	/* Location: ./application/models/User_Model.php */
 ?>