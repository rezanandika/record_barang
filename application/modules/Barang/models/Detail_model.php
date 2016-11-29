	
<?php
class Detail_model extends MY_Model{
/*   function selectAll()
   {
		$this->db->order_by("id_barang","desc"); 
		return $this->db->get('barang')->result();
   }
   public function ambil_data() {
        $query = $this->db->query("select * from barang");
        return $query->result_array();
   }
    public function get_barang($limit, $start) {
    $this->db->limit($limit, $start);
    $query = $this->db->get("barang");

    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
               $data[] = $row;
            }
            return $data;
        }
        return false;
   }*/
    protected $_table     = 'detail_barang';
    protected $primary_key = 'id_detail';

    function hapus_data($where, $table){
      $this->db->where($where);

      $this->db->delete($table);
    }

    function edit_data($where, $table){
      return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
      $this->db->where($where);

      $this->db->update($table, $data);
    }
      
    function status()
    {
   /* $this->db->where('status', 'distribusi')->count_all_results('detail_barang');*/
      //$table_row_count = $this->db->count_all('detail_barang');
    /*  $this->db->from('detail_barang');
      $query = $this->db->get();
      $rowcount = $query->num_rows();*/

    /*  $query = $this->db->query('SELECT * FROM detail_barang WHERE status = "distribusi"' );

      echo $query->num_rows(); */
      $query = $this->db->query('SELECT * FROM detail_barang WHERE id_penempatan IS NOT NULL');

      echo $query->num_rows(); 
    }

    function sisa_stok(){
      $query = $this->db->query('SELECT * FROM detail_barang' );
      echo $query->num_rows(); 
    }

}
?>