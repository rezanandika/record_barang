<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Lokasi1 extends MY_Controller {
 
	function __construct() {
    parent::__construct();
    $this->load->model('lokasi1_model','lokasi1', 'lok');
    $this->redirect_url = base_url(). "index.php/lokasi";
 
  }
 
   function index(){
   
    $data = array();
   
    $data['lokasi1'] = $this->lokasi1->get_all();
    $data['tittle'] = "Data Lokasi";
    $data['content'] = "Lokasi1/data_lokasi1";

    $data['lokasi'] = $this->db->get('lokasi')->result();

    $this->template->views($data);
  }

  public function get_detail(){

    $this->load->module('Barang/detail');
    
    $id = $this->input->get("id");
    $data['tittle'] ='Data Lokasi';
    $data['content'] = $this->load->module('Barang/detail');
    $this->db->join("lokasi","lokasi.id_lokasi = detail_barang.id_lokasi",
                    "lokasi.id_lokasi = detail_barang.nama");
                    /*"barang.id_barang = detail_barang.spesifikasi",
                    "barang.id_barang = detail_barang.inventaris");*/

    //$data['penempatan'] = $this->db->get('penempatan')->result();
    $data['lok'] = $this->lokasi1->get_many_by(array("detail_barang.id_lokasi" => $id));


    $this->template->views($data);
  }


}