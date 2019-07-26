<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('form_view');	
	}

	function printed()
	{

		$session_data=$this->session->userdata('registered');
		$no_psa=$session_data['no_psa'];
		if (!$this->session->userdata('registered')) {
			$no_psa=$this->input->post('no_psa');
		}

		$this->db->where('no_psa', $no_psa);
		$get=$this->db->get('data_request', 1);
		$data['data']=$get->result();
		$this->load->view('print',$data);
	}


	function update()
	{
		date_default_timezone_set('Asia/Jakarta');
		$digunakan = $this->input->post('tgl_digunakan');
		$interview = $this->input->post('tgl_interview');
		$deploy = $this->input->post('tgl_deploy');
		$proses = $this->input->post('tgl_proses');
		
		$d = strtotime($digunakan);
		if ($d === FALSE) {
			$tgl_digunakan = strtotime(str_replace('/', '-', $d));
		}else{
			$tgl_digunakan=$d;
		}
		$i = strtotime($interview);
		if ($i === FALSE) {
			$tgl_interview = strtotime(str_replace('/', '-', $i));
		}else{
			$tgl_interview=$i;
		}
		$e = strtotime($deploy);
		if ($e === FALSE) {
			$tgl_deploy = strtotime(str_replace('/', '-', $e));
		}else{
			$tgl_deploy=$e;
		}
		$p = strtotime($proses);
		if ($p === FALSE) {
			$tgl_proses = strtotime(str_replace('/', '-', $p));
		}else{
			$tgl_proses=$p;
		}

		$no_psa=$this->input->post('no_psa');

     $data=array(
      'nama_user'   => $this->input->post('nama_user'),
      'no_telp'    => $this->input->post('no_telp'),
      'divisi'	  => $this->input->post('divisi'),
      'departemen' => $this->input->post('departemen'),
      'tgl_interview' => date("Y-m-d",$tgl_interview),
      'tgl_digunakan' => date("Y-m-d",$tgl_digunakan),
      'tgl_deploy' => date("Y-m-d",$tgl_deploy),
      'tgl_onproses' => date("Y-m-d",$tgl_proses),
      'nama_aplikasi' => $this->input->post('nama_aplikasi'),
      'permasalahan' => $this->input->post('permasalahan'),
      'fungsi' => $this->input->post('fungsi'),
      'pengguna' => $this->input->post('pengguna'),
      'input' => $this->input->post('input'),
      'proses' => $this->input->post('proses'),
      'output' => $this->input->post('output'),
      'kebutuhan' => $this->input->post('kebutuhan'),
      'status' => $this->input->post('status')
    );
    $this->db->where('no_psa',$no_psa);
    $this->db->update('data_request', $data);


    redirect('DaftarP');
	}

}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */