<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Barang_pemeliharaan extends MY_Controller {
 
	function __construct() {
  parent::__construct();
  $this->load->model('Brgpemeliharaan_model','brgpem');
  $this->load->model('sparepart_model', 'sparepart');
  $this->redirect_url = base_url(). "barang_pemeliharaan";

 
  }
 

  function index(){

    $data = array();

    $data['brgpem'] = $this->brgpem->get_all();

    $data['tittle'] = "Data Barang";
    $data['content'] = "Barang_pemeliharaan/barang_pemeliharaan";
    $this->template->views($data);
  }



   public function tambah(){
    $data['title'] ='Tambah Data Barang Pemeliharaan';
    $data['content'] = 'Barang_pemeliharaan/form';
    $data['state'] = 'insert';

    $this->template->views($data);
    
  }


   public function insert()
  {

    $this->db->trans_start();
    $datas = $this->input->post();


    $data['id_brgpemeliharaan'] = $datas['id_brgpemeliharaan'];
    $data['nama_brgpemeliharaan'] = $datas['nama_brgpemeliharaan'];
    $data['satuan'] = $datas['satuan'];
    $data['jumlah'] = $datas['jumlah'];
    $data['tgl_masuk'] = date("Y-m-d",strtotime($datas['tgl_masuk']));

    $this->brgpem->insert($data);

    $this->db->trans_complete();
    redirect($this->redirect_url);
  }

  public function edit()
  {
    $id = $this->input->get('id');
    $data['content'] = "Barang_pemeliharaan/form";
    $data['d'] = $this->brgpem->get_by(array("id_brgpemeliharaan" => $id));

    $data['title'] = "Edit Data Barang";
    $data['state'] = "edit";

    $this->template->views($data);
  }

  function update(){
    


   $this->db->trans_start();

    $datas = $this->input->post();
    $id = $this->input->post('id_brgpemeliharaan');

    //$data['id_brgpemeliharaan'] = $datas['id_brgpemeliharaan'];
    $data['nama_brgpemeliharaan'] = $datas['nama_brgpemeliharaan'];
    $data['satuan'] = $datas['satuan'];
    $data['jumlah'] = $datas['jumlah'];
    $data['tgl_masuk'] = date("Y-m-d",strtotime($datas['tgl_masuk']));


    $this->brgpem->update($id,$data);
    $this->db->trans_complete();

    redirect($this->redirect_url);
  }


  function delete($id_brgpemeliharaan){
  $where = array('id_brgpemeliharaan' => $id_brgpemeliharaan);

  $this->load->model('Brgpemeliharaan_model','barang_pemeliharaan');
  $this->brgpem->hapus_data($where,'barang_pemeliharaan');

  redirect($this->redirect_url);
  }

  // public function Quantity($value='')
  // {
  //   # code...
  // }

}