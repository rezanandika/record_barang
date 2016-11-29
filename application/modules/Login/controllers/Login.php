<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Login extends MY_Controller {
 
	function __construct() {
  parent::__construct();
  $this->load->model('Login_model','login');

  }
 
   public function index (){


    $data['tittle'] = "Login";
    $this->load->view('login');
  }
    // Fungsi Login
/*    $valid = $this->form_validation;

    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $valid->set_rules('username','Username','required');
    $valid->set_rules('password','Password','required');
    if($valid->run()) {
    $this->simple_login->login($username,$password, base_url('beranda'), base_url('login'));
    }*/
    // End fungsi login

function validasi() { 
 $data=array(
 'username'=>$this->input->post('username'),
 'password'=>$this->input->post('password')
 );
 
 // Berfungsi untuk memanggil fungsi ambil_data pada class login_model
 $cek=$this->login->ambil_data($data);
 if($cek == 1) { // Berfungsi untuk mengecek kebenaran data login yang diinput (1 = true)
 
 // Berfungsi untuk menyimpan user data
 $sesi=$this->session->set_userdata($data);
 // Jika data yang dimasukkan valid maka akan redirect ke halaman Dashboard
 redirect('beranda');
 }else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
 $this->load->view('login');

 }
 }
 
 // Berfungsi untuk menghapus session atau logout


 function logout() {
   session_destroy();
   redirect('login');
 } 
/*  public function logout() {
  $this->simple_login->logout(); */
}