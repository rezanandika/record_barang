<?php 
if($state == "edit"){
  $id_detail = $d['id_detail'];
  $id_barang = $d['id_barang'];
  $nama = $d['nama_barang'];
  $spesifikasi = $d['spesifikasi'];
  $id_windows = $d['id_windows'];
  $id_antivirus = $d['id_antivirus'];
  $id_office = $d['id_office'];
  $id_penempatan = $d['id_penempatan'];
  $ip = $d['IP'];
  
  $action =  "update";
}else{
  $id_barang ="";
  $nama ="";
  $spesifikasi ="";
  $id_kategori ="";
  $jumlah ="";
  $satuan ="";
  $id_invent ="";
  $action ="insert";
}
?>

 <div class="row">
            
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Barang</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" class="form-horizontal" action="<?php echo base_url()."barang/detail_update" ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="iddetal" class="col-sm-2 control-label">Kode Detail Barang</label>
                      <div class="col-sm-5">

                        <input disabled type="text" class="form-control" id="iddetail" value="<?= $id_detail; ?>" name="iddetail">
                        <input type="hidden" class="form-control" id="iddetail" value="<?= $id_detail; ?>" name="iddetail">
                       
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-5">
                    
                        <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" name="namadetail" disabled>

                         <input type="hidden" class="form-control" id="id_barang" value="<?php echo $d['id_barang'] ?>" name="id_barang" >
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Spesifikasi</label>
                      <div class="col-sm-5">
                    
                         <textarea class="form-control" id="spesifikasi" name="spesifikasi" disabled><?php echo $d['spesifikasi'] ?></textarea>
                       
                      </div>
                    </div>


<!--                     <div class="col-md-5">
                        <div class="box-body pad">
                          <form>
                                <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                        This is my textarea to be replaced with CKEditor.
                                </textarea>
                          </form>
                        </div>
                    </div>
                    </div> -->
                    <div class="form-group ">
                      <label for="inputPassword3" class="col-sm-2 control-label">Software</label>
                  

                      <div class="col-md-6">

                                <div class="form-horizontal">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label" >Antivirus</label>

                                      <div class=" col-sm-8">
                                        <select class="form-control" name="id_antivirus">
                                        <option class="disabled">Pilih Antivirus</option>
                                         <?php foreach($antivirus as $av){
                                            $sel=""; if(isset($id_antivirus)){
                                                if($id_antivirus == $av->id_antivirus) $sel = "selected";
                                            }
                                          ?>
                                          <option value="<?= $av->id_antivirus ?>" <?= $sel; ?>><?php echo $av->nama_antivirus ?></option>
                                          <?php } ?>
                                       </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Windows</label>

                                      <div class="col-sm-8">
                                        <select class="form-control" name="id_windows">
                                        <option class="disabled">Pilih Windows</option>
                                           <?php foreach($windows as $w){
                                              $sel="";  if(isset($id_windows)){
                                                  if($id_windows == $w->id_windows) $sel="selected";
                                                }
                                             ?>
                                          
                                            <option value="<?= $w->id_windows ?>" <?= $sel; ?>><?php echo $w->nama_windows ?></option>
                                            <?php } ?>
                                         </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Office</label>

                                      <div class="col-sm-8">
                                        <select class="form-control" name="id_office">
                                        <option class="disabled">Pilih Office</option>
                                           <?php foreach($office as $o){ 
                                            $sel=""; if(isset($id_office)){
                                              if($id_office == $o->id_office) $sel="selected";
                                            }
                                             ?>
                                            }
                                            <tr align="left">
                                            <option value="<?= $o->id_office ?>" <?= $sel ?>><?php echo $o->nama_office ?></option>
                                            <?php } ?>
                                         </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Lain-lain</label>

                                      <div class="col-sm-8">
                                        <textarea class="form-control" id="lain" name="lain"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                      </div>
                                    </div>
                                  </div>
                              </div>
                      </div>

                  </div>

                    <div class="form-group">
                      <label for="ip" class="col-sm-2 control-label">IP</label>
                      <div class="col-sm-5">
                         <input type="text" class="form-control" id="ip" name="ip" value="<?php if(isset($ip)) echo $ip,'' ?>">
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="idperbaikan" class="col-sm-2 control-label">Kode Perbaikan</label>
                      <div class="col-sm-5">
                         <input type="text" class="form-control" id="idperbaikan" name="idperbaikan"> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="idpenempatan" class="col-sm-2 control-label">Kode Penempatan</label>
                      <div class="col-sm-5">
                                      <select class="form-control" name="id_penempatan">
                                        <option class="disabled">Pilih Lokasi</option>
                                           <?php foreach($lokasi as $l){
                                            $sel=""; if(isset($id_penempatan)){
                                              if($id_penempatan == $l->id_lokasi) $sel="selected";
                                              } ?>
                                            <tr align="left">
                                            <option value="<?= $l->id_lokasi; ?>" <?= $sel; ?>><?php echo $l->nama_lokasi ?></option>
                                            <?php } ?>
                                         </select>
                                      </div>
                                    </div> 

                 <!--    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Jenis Inventaris</label>
                      <div class="col-sm-5">
                         <select class="form-control" name="inventaris">
                         <option class="disabled">Pilih Inventaris</option>
                           <?php foreach($inventaris as $i){ ?>
                            <tr align="left">
                            <option><?php echo $i->nama_inventaris ?></option>
                            <?php } ?>
                         </select>
                      </div>
                    </div> -->
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button  class="btn btn-default">Cancel</button>
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


<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
  });
</script>