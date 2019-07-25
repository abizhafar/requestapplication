<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarP extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Request_Model');
		$this->load->library('ssp');
		$this->load->model('Request_Model');
		 if (!$this->session->userdata('logged_in')) {
	      redirect('Home','refresh');
	    }

	}
	public function index()
	{

		$this->load->view('daftarP_view');

	}

	function get_data(){
		// $table="data_request";
		$table = "
		 ( SELECT * FROM data_request 
		 ) temp
		";
		 
		// Table's primary key
		$primaryKey = 'no_psa';
		 
		$columns = array(
		    array(
		        'db' => 'no_psa',
		        'dt' => 'DT_RowId',
		        'formatter' => function( $d, $row ) {
		            return 'row_'.$d;
		        }
		    ),
		    array( 'db' => 'no_psa', 'dt' => 'no_psa' ),
		    array( 'db' => 'nama_aplikasi',  'dt' => 'nama_aplikasi' ),
		    array( 'db' => 'nama_user',   'dt' => 'nama_user' ),
		    array( 'db' => 'no_telp',   'dt' => 'no_telp' ),
		    array( 'db' => 'divisi',   'dt' => 'divisi' ),
		    array( 'db' => 'departemen',     'dt' => 'departemen' ),
		    array( 'db' => 'permasalahan',     'dt' => 'permasalahan' ),
		    array( 'db' => 'fungsi',     'dt' => 'fungsi' ),
		    array( 'db' => 'pengguna',     'dt' => 'pengguna' ),
		    array( 'db' => 'input',     'dt' => 'input' ),
		    array( 'db' => 'proses',     'dt' => 'proses' ),
		    array( 'db' => 'output',     'dt' => 'output' ),
		    array( 'db' => 'kebutuhan',     'dt' => 'kebutuhan' ),
		    array( 'db' => 'status',     'dt' => 'status' ),
		    array( 
			    	'db' => 'tgl_interview', 
			    	'dt' => 'tgl_interview',
			    	'formatter' => function( $d, $row ) {
			        	if ($d=="0000-00-00"||$d==null||$d=="1970-01-01") {
			            	return "Belum Diset";
			        	}else{
			            	return date( 'd M Y', strtotime($d));	
			        	}
			        }
			),
		    array( 
		    	   'db' => 'tgl_digunakan',
		    	   'dt' => 'tgl_digunakan',
		    		'formatter' => function( $d, $row ) {
		        	if ($d=="0000-00-00"||$d==null||$d=="1970-01-01") {
		            	return "Belum Diset";
		        	}else{
		            	return date( 'd M Y', strtotime($d));	
		        	}
		        }
			),
		    array(
		    	'db'        => 'tgl_onproses',
		        'dt'        => 'tgl_onproses',
		        'formatter' => function( $d, $row ) {
		        	if ($d=="0000-00-00"||$d==null||$d=="1970-01-01") {
		            	return "Belum Diset";
		        	}else{
		            	return date( 'd M Y', strtotime($d));	
		        	}
		        }
		    ),
		    array(
		        'db'        => 'tgl_deploy',
		        'dt'        => 'tgl_deploy',
		        'formatter' => function( $d, $row ) {
		            if ($d=="0000-00-00"||$d==null||$d=="1970-01-01") {
		            	return "Belum Diset";
		        	}else{
		            	return date( 'd M Y', strtotime($d));	
		        	}
		        }
		    ),
		);
		 
		$sql_details = array(
		    'user' => 'root',
		    'pass' => '',
		    'db'   => 'par',
		    'host' => 'localhost'
		);
		 
		 
		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * If you just want to use the basic configuration for DataTables with PHP
		 * server-side, there is no need to edit below this line.
		 */
		 
		 
		echo json_encode(
		    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		);
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
		    </tr>
		    </thead>
		 ';
		 foreach ($get as $value) {
		 	switch($value->status) {
		               case '1' : $status='<td><span class="label label-warning">Waiting</span></td>'; break;
		               case '2' : $status='<td><span class="label label-primary">On-Process</span></td>'; break;
		               case '3' : $status='<td><span class="label label-success">Deployment</span></td>'; break;
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
			    .'
			   </tr>
			 <tbody>
			  ';
		 }
		print_r($psa);
		echo $output1."".$output2;
	}else{
		 echo 'Data Not Found';
	}
	echo $trdcych;
	}
}

/* End of file DaftarP.php */
/* Location: ./application/controllers/DaftarP.php */?>