 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.css">
 
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $tittle ?></h3>
              <!-- <a href="<?php echo base_url(). 'barang/tambah'; ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Barang</a> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Spesifikasi</th>
                  <th>Kategori</th>
                  <th>Software/Hardware</th>
                  <th>IP</th>
                  <th>Jenis</th>
                  <th>Penempatan</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Perbaikan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
              <tbody>

              
             <?php foreach ($barang as $d) { ?>
                  
            
                    <tr align="left">
                      <td><?php echo $d['id_detail']; ?></td>
                      <td><?php echo $d['nama_barang']; ?></td>
                      <td><?php echo $d['spesifikasi']; ?></td>
                      <td><?php echo $d['nama_kategori']; ?></td>
                       <td><?php echo '<b>Antivirus</b> : '.$d['nama_antivirus'].
                                     '</br><b>Windows</b> : '.$d['nama_windows'].
                                     '</br><b>Office</b> : ' .$d['nama_office']
                                      ?> </br><b>Lain</b>: <?php $sel="";
                                        foreach ($brglain as $val) {
                                          if ($d['id_detail'] == $val['id_detail']){ echo $val['deskripsi'].', '; }
                                        } 
                                       ?>
                                      
                                        </td>
                      <td><?php echo $d['IP'] ?></td>
                      <td><?php echo $d['nama_inventaris']; ?></td>
                      <td><?php echo $d['nama_lokasi']; ?></td>
                      <td><?php echo $d['tgl_penempatan'] ?></td>
                      <td><?php echo $d['status']; ?> </td>
                      <td><a href="<?php echo base_url(). 'barang/det_pemeliharaan/?id=' .$d['id_detail']; ?>">Detail</a> </td>
                      <!-- <td><a href="#">Lihat</a></td> -->
                      <td><a href="<?php echo base_url(). 'index.php/barang/edit_detail/?id=' .$d['id_detail'] ?>" title="Edit"><i class="fa fa-pencil text-primary"></i></a> 
                        <a href="<?php echo base_url(). 'index.php/barang/delete_detail/' .$d['id_detail'] ?>" title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>
                    </tr>
            
                 <?php  } ?>  
                           
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