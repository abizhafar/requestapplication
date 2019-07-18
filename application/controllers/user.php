<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
    	parent::__construct();
    	$this->load->library('Datatables');
    	$this->load->model('User_Model');
    		if (!$this->session->userdata('logged_in')) {
    			redirect('home','refresh');
        }
	}

	public function index()
	{
		$this->load->view('user_view');
	}

	function get_guest_json() //data data produk by JSON object 
	{ 
    	header('Content-Type: application/json');
    	echo $this->User_Model->get_all_user();
  	}


	public function simpan()
	{
		 $config = array(
           array(
                    'field' => 'id',
                    'label' => 'Nomer Petugas',
                    'rules' => 'trim|required|is_unique[user.id_user]',
                    'errors'=> array('is_unique' =>'Nomer User Telah Terdaftar','required'=>'Nomer User Tidak Boleh Kosong' )
            ),
            array(
                    'field' => 'Nama',
                    'label' => 'Nama User',
                    'rules' => 'trim|required',
                    'errors'=> array('required'=>'Nama User Tidak Boleh Kosong' )
            ),
             array(
                    'field' => 'Username',
                    'label' => 'Username Petugas',
                    'rules' => 'trim|required',
                    'errors'=> array('required' =>'Username Tidak Boleh Kosong')
            ),
            array(
                    'field' => 'Password',
                    'label' => 'Password',
                    'rules' => 'trim|required',
                    'errors'=> array('required'=>'Password Tidak Boleh Kosong' )
            ),
            // array(
            //         'field' => 'hak_akses',
            //         'label' => 'hak_akses',
            //         'rules' => 'trim|required',
            //         'errors'=> array('required'=>'Hak Akses Tidak Boleh Kosong' )
            // )
    );
    
  	$this->form_validation->set_rules($config);
    if ($this->form_validation->run() === FALSE) {
        $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
    }else{
   $data=array(
      'id_user'      => $this->input->post('id'),
      'nama_user'    => $this->input->post('Nama'),
      'username'	 => $this->input->post('Username'),
      'password'	 => mD5($this->input->post('Password')),
      'akses'		 => '1'
    );
    $this->db->insert('user', $data);
    	echo json_encode(['success'=>'Data User Berhasil Ditambahkan']);
    redirect('User', 'refresh');
  }}
	

	function update(){ //function update data
    $id=$this->input->post('id');
    $data=array(
      'id_user'     => $this->input->post('id'),
      'nama_user'   => $this->input->post('Nama'),
      'username'    => $this->input->post('Username'),
      'password'	  => $this->input->post('Password')
    );
    $this->db->where('id_user',$id);
    $this->db->update('user', $data);
    // $this->db->update('akses', $data);

    redirect('user');
  }

  function delete(){ //function hapus data
    $id=$this->input->post('id');
    // $this->db->where('user', $id);
    // $query=$this->db->get('arsip_dokumen');
    // if ($query->num_rows()>=1) {
    //     $errors = "Delete Gagal! \nNomor Petugas Terelasi Dengan Data Arsip";
    //     echo json_encode(['error'=>$errors]);
    // }else{
      $this->db->where('id_user',$id);
      $this->db->delete('user');
      echo json_encode(['success'=>'Data User Berhasil Dihapus']);
      redirect('User','refresh');
    }
    
  }

/* End of file user.php */
/* Location: ./application/controllers/user.php */