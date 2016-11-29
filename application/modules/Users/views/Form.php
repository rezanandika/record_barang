<?php 

  if($state == 'edit'){
    $id_user = $users['id_user'];
    $name = $users['name'];
    $email = $users['email'];
    $username = $users['username'];
    $password = $users['password'];
    $telepon = $users['telepon'];
    $action = 'update';
  }else{
    $ability = 'disabled';
    $id_user = "";
    $name = "";
    $email = "";
    $username = "";
    $password = "";
    $telepon = "";
    $action = 'insert';
  }

?>
 <div class="row">
            
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><?= $title ?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" class="form-horizontal" action="<?php echo base_url()."users/".$action; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="iduser" class="col-sm-2 control-label">ID User</label>
                      <div class="col-sm-5">
                      <input type="text" class="form-control" id="iduser" placeholder="ID User" name="iduser" value="<?php if(isset($id_user)) echo $id_user,''  ?>" >
                      </div>

                    </div>
                    <div class="form-group">
                      <label for="name" class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="name" placeholder="Nama" name="name" value="<?php if(isset($name)) echo $name,'' ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" id="name" placeholder="email" name="email" value="<?php if(isset($email)) echo $email,'' ?>">
                      </div>
                    </div>
                
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php if(isset($username)) echo $username,'' ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-5">
                        <input type="Password" class="form-control" id="password" placeholder="Password" name="password" value="<?php if(isset($password)) echo $password,'' ?>">
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputPassword" class="col-sm-2 control-label">Telepon</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="telepon" placeholder="Telepon" name="telepon" value="<?php if(isset($telepon)) echo $telepon,'' ?>">
                      </div>
                    </div>


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