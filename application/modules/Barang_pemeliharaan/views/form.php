<?php 
if($state == "edit"){
  $id_brgpemeliharaan = $d['id_brgpemeliharaan'];
  $nama_brgpemeliharaan = $d['nama_brgpemeliharaan'];
  $jumlah = $d['jumlah'];
  $tgl_masuk = $d['tgl_masuk'];
  $satuan = $d['satuan'];
  $action =  "update";
}else{
  $id_brgpemeliharaan ="";
  $nama_brgpemeliharaan ="";
  $jumlah ="";
  $tgl_masuk = "";
  $satuan ="";
  $action ="insert";
}

?>

<link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datepicker/datepicker3.css"> 

 <div class="row">
            
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><?= $title ?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" class="form-horizontal" action="<?php echo base_url()."barang_pemeliharaan/".$action; ?>" onsubmit="return validasi_input(this)">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="id_brgpemeliharaan" class="col-sm-2 control-label">Kode Barang</label>
                      <div class="col-sm-5 input-group">
                        <input type="text" class="form-control" id="id_brgpemeliharaan" placeholder="Kode Barang" name="id_brgpemeliharaan" value="<?php if(isset($id_brgpemeliharaan)) echo $id_brgpemeliharaan,''  ?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-5 input-group">
                        <input type="text" class="form-control" id="nama_brgpemeliharaan" placeholder="Nama Barang" name="nama_brgpemeliharaan" value="<?php if(isset($nama_brgpemeliharaan)) echo $nama_brgpemeliharaan,'' ?>">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">jumlah</label>
                      <div class="col-sm-5 input-group">
                        <input type="text" class="form-control" id="satuan" placeholder="jumlah" name="jumlah" value="<?php if(isset($jumlah)) echo $jumlah,'' ?>">
                      </div>
                    </div>

                    <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Masuk</label>
                              <div class="col-sm-5 input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="datepicker3" value="<?php if(isset($tgl_masuk)) echo $tgl_masuk,''; ?>" placeholder="Tanggal Masuk" name="tgl_masuk" >
                              </div>
                              <!-- /.input group -->
                      </div>


                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Satuan</label>
                      <div class="col-sm-5 input-group">
                        <input type="text" class="form-control" id="satuan" placeholder="satuan" name="satuan" value="<?php if(isset($satuan)) echo $satuan,'' ?>">
                      </div>
                    </div>
                 
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info">Simpan</button>
                 
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                     </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              <!-- general form elements disabled -->
             
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->

<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
//Date picker
    $('#datepicker3').datepicker({
      autoclose: true
    });
    
  });
  </script>
  <script type="text/javascript">
function validasi_input(form){
  if (form.id_brgpemeliharaan.value == ""){
    alert("Kode Barang harus diisi!");
    form.id_brgpemeliharaan.focus();
    return (false);
  }
return (true);
}
</script>