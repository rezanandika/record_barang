<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Barang_rt extends MY_Controller {
 
  function __construct() {
  parent::__construct();
  $this->load->model('Brgrt_model','brgrt');
  $this->redirect_url = base_url(). "barang_rt";

 
  }
 

  function index(){

    $data = array();

    $data['brgrt'] = $this->brgrt->get_all();

    $data['tittle'] = "Data Barang";
    $data['content'] = "Barang_rt/barang_rt";
    $this->template->views($data);
  }



   public function tambah(){
    $data['title'] ='Tambah Data Barang Rumah Tangga';
    $data['content'] = 'Barang_rt/form';
    $data['state'] = 'insert';

    $this->template->views($data);
    
  }


   public function insert()
  {

    $this->db->trans_start();
    $datas = $this->input->post();


    $data['id_brgrt'] = $datas['id_brgrt'];
    $data['nama_brgrt'] = $datas['nama_brgrt'];
    $data['satuan'] = $datas['satuan'];
    $data['jumlah'] = $datas['jumlah'];
    $data['tgl_masuk'] = date('Y-m-d',strtotime($datas['tgl_masuk']));

    $this->brgrt->insert($data);

    $this->db->trans_complete();
    redirect($this->redirect_url);
  }

  public function edit()
  {
    $id = $this->input->get('id');
    $data['content'] = "Barang_rt/form";
    $data['d'] = $this->brgrt->get_by(array("id_brgrt" => $id));

    $data['title'] = "Edit Data Barang";
    $data['state'] = "edit";

    $this->template->views($data);
  }

  function update(){
    


   $this->db->trans_start();

    $datas = $this->input->post();
    $id = $this->input->post('id_brgrt');

    //$data['id_brgpemeliharaan'] = $datas['id_brgpemeliharaan'];
    $data['nama_brgrt'] = $datas['nama_brgrt'];
    $data['satuan'] = $datas['satuan'];
    $data['jumlah'] = $datas['jumlah'];
    $data['tgl_masuk'] = date("Y-m-d",strtotime($datas['tgl_masuk']));


    $this->brgrt->update($id,$data);
    $this->db->trans_complete();

    redirect($this->redirect_url);
  }


  function delete($id_brgrt){
  $where = array('id_brgrt' => $id_brgrt);

  $this->load->model('Brgrt_model','barang_rt');
  $this->brgrt->hapus_data($where,'barang_rt');

  redirect($this->redirect_url);
  }

}