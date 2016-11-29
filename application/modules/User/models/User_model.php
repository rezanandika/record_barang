<?php
class User_model extends MY_Model {
  protected $_table     = 'user';
  protected $_primary_key = 'id';

  // observer
  public $_user_id = 0; // from session 
  public $before_create = array('create_mark');
  public $before_update = array('update_mark');

  function cek_username($u){
    $this->db->where('username', $u);
    $query = $this->db->get('user');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return NULL;
    }
  }

}
?>