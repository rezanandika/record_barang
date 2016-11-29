<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Users extends MY_Controller {
 
  function __construct() {
    parent::__construct();
    $this->load->model('Users_model','users');
    $this->redirect_url = base_url(). "users";
 
  }
 
   function index(){
   
    $data = array();
   
    $data['users'] = $this->users->get_all();
    $data['tittle'] = "Data Users";
    $data['content'] = "Users/users";
    $this->template->views($data);
  }


  public function tambah(){
    $data['title'] ='Tambah User';
    $data['content'] = 'Users/form';
    $data['state'] = 'insert';
    $this->template->views($data);


  }


  function delete($id_user){
  $where = array('id_user' => $id_user);

  $this->load->model('Users_model','users');
  $this->users->hapus_data($where,'users');

  redirect($this->redirect_url);

  }

   function insert(){

   $this->db->trans_start();

    $datas = $this->input->post();

    //$data['id_user'] = $datas['iduser'];
    $data['name'] = $datas['name'];
    $data['email'] = $datas['email'];
    $data['username'] = $datas['username'];
    $data['password'] = $datas['password'];
    $data['telepon'] = $datas['telepon'];

    $this->users->insert($data);
    $this->db->trans_complete();

    redirect($this->redirect_url);

  }

     public function edit()
  {
    $id = $this->input->get('id');
    $data['content'] = "Users/form";

    $data['users'] = $this->users->get_by(array("id_user" => $id));
    //$data['users'] = $this->users->get_all(); 

    $data['title'] = "Edit User";
    $data['state'] = "edit";

    $this->template->views($data);
  }

  public function update(){
    $this->db->trans_start();

    $datas = $this->input->post();
    $id = $this->input->post('iduser');

    //$data['id_user'] = $datas['iduser'];
    $data['name'] = $datas['name'];
    $data['email'] = $datas['email'];
    $data['username'] = $datas['username'];
    $data['password'] = $datas['password'];
    $data['telepon'] = $datas['telepon'];


    $this->users->update($id,$data);


    $this->db->trans_complete();

    redirect($this->redirect_url);
  }
  
}