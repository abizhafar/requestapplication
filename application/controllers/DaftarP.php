<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarP extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Request_Model');
		$this->load->library('ssp');

	}
	public function index()
	{

		$this->load->view('daftarP_view');

	}

	function get_data(){
		// $table="data_request";
		$table = "
		 ( SELECT dr.no_psa,dr.nama_aplikasi,dr.nama_user,dr.divisi,dr.no_telp,dr.status,dr.tgl_deploy,dr.tgl_digunakan,dr.tgl_interview,dr.tgl_onproses,dr.departemen,  
		     d.no_psad,d.permasalahan,d.fungsi,d.pengguna,d.input,d.proses,d.output,d.kebutuhan 
		     FROM data_request dr JOIN detail d ON dr.no_psa=d.no_psad
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
		        'db'        => 'tgl_interview',
		        'dt'        => 'tgl_interview',
		        'formatter' => function( $d, $row ) {
		            return date( 'd M y', strtotime($d));
		        }
		    ),
		    array(
		        'db'        => 'tgl_digunakan',
		        'dt'        => 'tgl_digunakan',
		        'formatter' => function( $d, $row ) {
		            return date( 'd M y', strtotime($d));
		        }
		    ),
		    array(
		        'db'        => 'tgl_onproses',
		        'dt'        => 'tgl_onproses',
		        'formatter' => function( $d, $row ) {
		            return date( 'd M y', strtotime($d));
		        }
		    ),
		    array(
		        'db'        => 'tgl_deploy',
		        'dt'        => 'tgl_deploy',
		        'formatter' => function( $d, $row ) {
		            return date( 'd M y', strtotime($d));
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

}

/* End of file DaftarP.php */
/* Location: ./application/controllers/DaftarP.php */?>