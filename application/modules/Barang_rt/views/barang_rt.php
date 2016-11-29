 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.css">
 
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $tittle ?></h3>
              <a href="<?php echo base_url(). 'barang_rt/tambah'; ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Barang</a>
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

                 <?php foreach($brgrt as $d){ ?>
                    <tr align="left">
                      <td><?php echo $d['id_brgrt'] ?></td>
                      <td><?php echo $d['nama_brgrt'] ?></td>
                      <td><?php echo $d['jumlah'] ?></td>
                      <td><?php echo $d['tgl_masuk'] ?></td>
                      <td> </td>
                      <td> </td>
                      <td><?php echo $d['satuan'] ?></td>
                      <td><a href="<?php echo base_url(). 'barang_rt/edit/?id=' .$d['id_brgrt'] ?>" 
                        title="Edit"><i class="fa fa-pencil text-primary"></i></a> 
                      <a href="<?php echo base_url(). 'barang_rt/delete/' .$d['id_brgrt'] ?>" 
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