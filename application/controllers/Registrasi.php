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

	function simpan()
	{

		$this->db->select("no_psa");
		$this->db->from("data_request");
		$this->db->limit(1);
		$this->db->order_by('no_psa',"DESC");
		$query = $this->db->get();
		$result = $query->result();
		if ($result->num_rows==0) {
			$div=substr($this->input->post('divisi'),0,5);
			$th=date("Y");
			$n="00";
			$n2 = str_pad($n + 1, 2, 0, STR_PAD_LEFT);
			$psa=$th."".$div."".$n2;
		}else{
			foreach ($result as $id) {			
				$div=substr($this->input->post('divisi'),0,5);
				$th=date("Y");
				$n=$id->no_psa;
				$th_db=substr($n, 0,4);
				if ($th>$th_db) {
					$n="00";	
				}
				$n2 = str_pad($n + 1, 2, 0, STR_PAD_LEFT);
				$psa=$n2;
			}
		}

		date_default_timezone_set('Asia/Jakarta');
		$date = $this->input->post('tgl_digunakan');
		$timestamp = strtotime($date);
		if ($timestamp === FALSE) {
		  $timestamp = strtotime(str_replace('/', '-', $date));
		}

		$data1 = [
		    'no_psa' => $psa,
		    'nama_user' => $this->input->post('nama_user'),
		    'no_telp' => $this->input->post('no_telp'),
		    'divisi' => substr($this->input->post('divisi'),8,50),
		    'tgl_digunakan' => date("Y-m-d",$timestamp),
		    'nama_aplikasi' => $this->input->post('nama_aplikasi'),
		    'status' => '1',
		    'departemen' => $this->input->post('departemen'),
		    'permasalahan' => $this->input->post('permasalahan'),
		    'fungsi' => $this->input->post('fungsi'),
		    'pengguna' => $this->input->post('pengguna'),
		    'input' => $this->input->post('input'),
		    'proses' => $this->input->post('proses'),
		    'output' => $this->input->post('output'),
		    'kebutuhan' => $this->input->post('kebutuhan'),
		];
		print_r($psa);
		// die();
		$dr=$this->db->insert('data_request', $data1);
    	redirect('Home', 'refresh');
	}

}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */