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
    		'<a href="javascript:void(0);" class="edit_record" data-id_user="$1" data-nama_user="$2" data-username="$3" data-password="$4" data-akses="$5"><i style="font-size:20px" class="icon fa fa-edit"></i></a>
    		&nbsp &nbsp &nbsp
    		 <a href="javascript:void(0);" class="hapus_record" data-id_user="$1"><i style="font-size:15px" class="glyphicon glyphicon-trash"></i></a>', 'id_user,nama_user,username,password,akses');
        
    		return $this->datatables->generate();
 		}

	
	}
	
	/* End of file User_Model.php */
	/* Location: ./application/models/User_Model.php */
 ?>