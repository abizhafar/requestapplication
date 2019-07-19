<?php
class Divisi_model extends CI_Model{

  function get_all_vm() 
  {
    $this->datatables->select('id_divisi,divisi');
    $this->datatables->from('divisi');
    $this->datatables->add_column('view',
    '<a href="javascript:void(0);" class="edit_record" data-id_divisi="$1" data-divisi="$2"><i style="font-size:20px" class="icon fa fa-edit"></i></a>
    &nbsp &nbsp &nbsp
    <a href="javascript:void(0);" class="hapus_record" data-id_divisi="$1"><i style="font-size:15px" class="glyphicon glyphicon-trash"></i></a>',
    'id_divisi,divisi');
        
    return $this->datatables->generate();
  }

  function get_divisi()
  {
    $get=$this->db->get('divisi');
    return $get->result();
  }
}

   