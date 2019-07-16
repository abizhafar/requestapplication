<?php
class Divisi_model extends CI_Model{

  function get_all_vm() 
  {
    $this->datatables->select('kd_divisi,nama_divisi');
    $this->datatables->from('divisi');
    $this->datatables->add_column('view',
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_divisi="$1" data-nama_divisi="$2"><i class="fa fa-edit"></i> &nbsp EDIT </a>
    <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-s" data-kd_divisi="$1"><i class="fa fa-trash-o"></i> &nbsp Hapus</a>',
    'kd_divisi,nama_divisi');
        
    return $this->datatables->generate();
  }

}

   