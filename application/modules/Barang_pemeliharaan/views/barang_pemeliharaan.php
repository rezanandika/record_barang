 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.css">
 
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $tittle ?></h3>
              <a href="<?php echo base_url(). 'barang_pemeliharaan/tambah'; ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Barang</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang</th>
                  <th>Tanggal Masuk</th>
                  <th>Sisa Stok</th>
                  <th>Jumlah Distribusi</th>
                  <th>Satuan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
              <tbody>

                 <?php foreach($brgpem as $d){ ?>
                       <?php
                            $this->db->from("sparepart");
                            $this->db->group_by("id_brgpemeliharaan");
                            $this->db->like('id_brgpemeliharaan', $d['id_brgpemeliharaan']);
                            $qty =$this->db->count_all_results();
                       ?>

                    <tr align="left">
                      <td><?php echo $d['id_brgpemeliharaan'] ?></td>
                      <td><?php echo $d['nama_brgpemeliharaan'] ?></td>
                      <td><?php echo $d['jumlah'] ?></td>
                      <td><?php echo $d['tgl_masuk'] ?></td>
                      <td><?php if ($qty != 0 )echo $d['jumlah'] - $qty. " Item"; ?></td>
                      <td><?php if ($qty != 0 )echo $qty. " Item"; ?></td>
                      <td><?php echo $d['satuan'] ?></td>
                      <td><a href="<?php echo base_url(). 'barang_pemeliharaan/edit/?id=' .$d['id_brgpemeliharaan'] ?>" 
                        title="Edit"><i class="fa fa-pencil text-primary"></i></a> 
                      <a href="<?php echo base_url(). 'barang_pemeliharaan/delete/' .$d['id_brgpemeliharaan'] ?>" 
                        title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>
                    </tr>

                   

                 <?php } ?>
             
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "pageLength": 25,
        });
        
      });
    </script>