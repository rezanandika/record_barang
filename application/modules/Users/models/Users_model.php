<?php
class Users_model extends MY_Model {
  protected $_table     = 'users';
  protected $_primary_key = 'id_user';

  function cek_username($u){
    $this->db->where('username', $u);
    $query = $this->db->get('users');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return NULL;
    }
  }

  function hapus_data($where, $table){
      $this->db->where($where);
      
      $this->db->delete($table);
    }

}
?>