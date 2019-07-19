<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		 if (!$this->session->userdata('logged_in')) {
		      redirect('Home','refresh');
		    }
    	$this->load->library('Datatables');
		    
		    $this->load->model('Divisi_model');
	}
		function get_guest_json() //data data produk by JSON object 
	{ 
    	header('Content-Type: application/json');
    	echo $this->Divisi_model->get_all_vm();
  	}
	public function index()
	{
	    $this->load->view('Divisi_view');
	}
		public function simpan()
	{
		 $config = array(
           array(
                    'field' => 'Kode',
                    'label' => 'Kode Divisi',
                    'rules' => 'trim|required',
                    'errors'=> array('required'=>'Kode Divisi Tidak Boleh Kosong' )
            ),
            array(
                    'field' => 'Nama',
                    'label' => 'Nama Divisi',
                    'rules' => 'trim|required',
                    'errors'=> array('required'=>'Nama Divisi Tidak Boleh Kosong' )
            ),
           
    );
    
  	$this->form_validation->set_rules($config);
    if ($this->form_validation->run() === FALSE) {
        $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
    }else{
   $data=array(
      'id_divisi'      => $this->input->post('Kode'),
      'divisi'    => $this->input->post('Nama')
    );
    $this->db->insert('Divisi', $data);
    	echo json_encode(['success'=>'Data Divisi Berhasil Ditambahkan']);
    redirect('Divisi', 'refresh');
  }}

  function update(){ //function update data
    $id=$this->input->post('id');
    $data=array(
      'id_divisi'     => $this->input->post('id'),
      'divisi'   => $this->input->post('Nama'),
    );
    $this->db->where('id_divisi',$id);
    $this->db->update('divisi', $data);
    // $this->db->update('akses', $data);

    redirect('Divisi');
  }
	
  function delete(){ //function hapus data
    $id=$this->input->post('Nomer');
    // $this->db->where('user', $id);
    // $query=$this->db->get('arsip_dokumen');
    // if ($query->num_rows()>=1) {
    //     $errors = "Delete Gagal! \nNomor Petugas Terelasi Dengan Data Arsip";
    //     echo json_encode(['error'=>$errors]);
    // }else{
      $this->db->where('id_divisi',$id);
      $this->db->delete('divisi');
      echo json_encode(['success'=>'Divisi Berhasil Dihapus']);
      redirect('Divisi','refresh');
    }
    
}
