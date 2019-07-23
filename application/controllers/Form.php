<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{
		$this->load->view('form_view');	
	}

	function printed()
	{
		$this->load->view('print');
	}
	function update()
	{
	 $Nomor=$this->input->post('Nomor');
     $data=array(
      'no_psa'     => $this->input->post('Nomor'),
      'nama_user'   => $this->input->post('Nama'),
      'no_telp'    => $this->input->post('Nomor_tlp'),
      'divisi'	  => $this->input->post('Divisi'),
      'departemen' => $this->input->post('Departemen'),
      'tgl_interview' => $this->input->post("Tanggal_interview"),
      'tgl_digunakan' => $this->input->post('Tanggal_rencana'),
      'nama_aplikasi' => $this->input->post('aplikasi'),
      'permasalahan' => $this->input->post('Permasalahan'),
      'fungsi' => $this->input->post('Fungsi'),
      'pengguna' => $this->input->post('Pengguna'),
      'input' => $this->input->post('Input'),
      'proses' => $this->input->post('Proses'),
      'output' => $this->input->post('Output'),
      'kebutuhan' => $this->input->post('Kebutuhan')
    );
    $this->db->where('no_psa',$Nomor);
    $this->db->update('data_request', $data);
    // $this->db->update('akses', $data);

    redirect('DaftarP');
	}

}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */