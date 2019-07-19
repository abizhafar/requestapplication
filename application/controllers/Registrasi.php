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
		date_default_timezone_set('Asia/Jakarta');
		$d=strtotime($this->input->post('tgl_digunakan'));
		
		$psa="123141";
		$data1 = [
		    'no_psa' => $psa,
		    'nama_user' => $this->input->post('nama_user'),
		    'no_telp' => $this->input->post('no_telp'),
		    'divisi' => $this->input->post('divisi'),
		    'tgl_digunakan' => date("Y-m-d",$d),
		    'nama_aplikasi' => $this->input->post('nama_aplikasi'),
		    'status' => '1',
		    'departemen' => $this->input->post('departemen'),
		];
		$data2 = [
		    'no_psad' => $psa,
		    'permasalahan' => $this->input->post('permasalahan'),
		    'fungsi' => $this->input->post('fungsi'),
		    'pengguna' => $this->input->post('pengguna'),
		    'input' => $this->input->post('input'),
		    'proses' => $this->input->post('proses'),
		    'output' => $this->input->post('output'),
		    'kebutuhan' => $this->input->post('kebutuhan'),
		];

		$this->db->insert('data_request', $data1);
		$this->db->insert('detail', $data2);
    	redirect('User', 'refresh');
	}

}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */