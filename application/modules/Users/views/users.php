 <!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.css">
 
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $tittle ?></h3>
              <a href="<?php echo base_url(). 'users/tambah'; ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah User</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID User</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Telepon</th>
                  <th>Aksi</th>
                </tr>
                </thead>
              <tbody>

                 <?php foreach($users as $u){ ?>
                    <tr align="left">
                      <td><?php echo $u['id_user']; ?></td>
                      <td><?php echo $u['name'] ?></td>
                      <td><?php echo $u['email'] ?></td>
                      <td><?php echo $u['username'] ?></td>
                      <td><?php echo $u['password'] ?></td>
                      <td><?php echo $u['telepon'] ?></td>
                      <td><a href="<?php echo base_url(). "users/edit/?id=" .$u['id_user'] ?>" title="Edit"><i class="fa fa-pencil text-primary"></i></a> 
                      <a href="<?php echo base_url(). 'users/delete/' .$u['id_user'] ?>" title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>
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