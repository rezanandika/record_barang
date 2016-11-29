 <!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.css">



<script>
    function get_detail(){
      var id_lokasi = $("#lokasi"),val();
      $.ajax({
            type: "POST",
            url: "<?php echo site_url('Penempatan/data_penempatan'); ?>",
            data:"id_lokasi="+id_lokasi,
            success: function(msg) {
                      $("#div_detail").html(msg);
            }
      });

    }

</script>
 
<section class="content">
  <label>Lokasi Ruang</label>
                  <select class="form-control" name="lokasi" id="lokasi" onchange="get_detail();">
                    <option>Pilih Lokasi</option>
                     <?php foreach($lokasi as $d){ ?>
                    <tr align="left">
                    <option><?php echo $d->nama ?></option>
                    <?php } ?>
                  </select>
                </br>
              </br>
      <div class="row" id="div_detail">

        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $tittle ?></h3>
              <a href="<?php echo base_url(). '/index.php/lokasi/tambah'; ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Lokasi</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <!-- <th>Kode lokasi</th> -->
                  <th>Lokasi</th>
                  <th>Nama Barang</th>
                  <th>Aksi</th>
                </tr>
                </thead>
              <tbody>

                 <?php foreach($lok as $p){ ?>
                    <tr align="left">
                      <!-- <td><?php echo $p->id_lokasi ?></td> -->
                      <td><?php echo $p['id_lokasi'] ?></td>
                      <td><?php echo $p['nama'] ?></td>
                      <td><a href="#" title="Edit"><i class="fa fa-pencil text-primary"></i></a> <a href="#" title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>
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
<script src="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
      $(function () {
        $('#example2').DataTable({
          "pageLength": 15,
        });
        
      });
</script>