<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Request_Model extends CI_Model {
		
		function jumlah_waiting(){
			$this->db->where('status', '1');
			$get=$this->db->get('data_request');
			return $jumlahw = $get->num_rows();
		}

		function jumlah_onproses(){
			$this->db->where('status', '2');
			$get=$this->db->get('data_request');
			return $jumlaho = $get->num_rows();
		}

		function jumlah_trial(){
			$this->db->where('status', '3');
			$get=$this->db->get('data_request');
			return $jumlaht = $get->num_rows();
		}

		function jumlah_deploy(){
			$this->db->where('status', '4');
			$get=$this->db->get('data_request');
			return $jumlahd = $get->num_rows();
		}
	
	}
	
	/* End of file Request_Model.php */
	/* Location: ./application/models/Request_Model.php */
 ?>