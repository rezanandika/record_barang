

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RECORD INVENTORY BARANG</title>
    <!--<link rel="icon" href="<?php echo base_url(); ?>/assets/img/favicon.ico" type="image/x-icon">-->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url('template/admin_lte'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />   
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/select2/select2.min.css">
      <!-- Bootstrap time Picker -->
<!--   <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/timepicker/bootstrap-timepicker.min.css"> 
   bootstrap datepicker
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datepicker/datepicker3.css">  --> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/dist/css/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.10.3 -->
     </head>


  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">IR</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Inventory Ruang</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('template/admin_lte'); ?>/dist/img/user.png" class="user-image" alt="User Image"/>
                  <!-- <span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span> -->
                  <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('template/admin_lte'); ?>/dist/img/user.png" class="img-circle" alt="User Image" />
                    <p>
                      <p>Selamat Datang <?php echo $this->session->userdata('username'); ?></p>
                      <!-- <small>Login terakhir <?php echo date('d-M-Y H:i:s', strtotime($this->session->userdata('last_login'))); ?></small> -->
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(). 'users'; ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(). 'login/logout'; ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>





      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('template/admin_lte'); ?>/dist/img/user.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('username'); ?></p>
              <!-- <p><?php echo $this->session->userdata('name'); ?></p> -->

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
        </br>
          
		  <!-- Main menu -->
		  <!--<?php $this->load->modules('home/menu') ?>-->



 <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo base_url(). "beranda"; ?> ">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
         <li class="treeview">
          <a href="<?php echo base_url(). "barang"; ?>">
            <i class="fa fa-edit"></i> <span>MENU BARANG</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."barang" ?>"><i class="fa fa-circle-o"></i>Data Barang</a></li>
            <li><a href="<?php echo base_url()."barang/barang_modal" ?>"><i class="fa fa-circle-o"></i>Barang Modal</a></li>
            <li><a href="<?php echo base_url()."barang_pemeliharaan" ?>"><i class="fa fa-circle-o"></i>Barang Pemeliharaan</a></li>
            <li><a href="<?php echo base_url()."barang_rt" ?>"><i class="fa fa-circle-o"></i>Barang Rumah Tangga</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="<?php echo base_url()."kategori" ?>">
            <i class="fa fa-edit"></i> <span>MENU KATEGORI</span>
            </span>
          </a>        
        </li>
         <li class="treeview">
          <a href="<?php echo base_url()."lokasi" ?>">
            <i class="fa fa-edit"></i> <span>MENU LOKASI</span>
            </span>
          </a>
        </li>
         <li class="treeview">
          <a href="<?php echo base_url()."penempatan" ?>">
            <i class="fa fa-edit"></i> <span>MENU PENEMPATAN RUANG</span>
            </span>
          </a>
        </li>
         <li class="treeview">
          <a href="<?php echo base_url()."pemeliharaan" ?>">
            <i class="fa fa-edit"></i> <span>MENU PEMELIHARAAN</span>
            
           <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."pemeliharaan" ?>"><i class="fa fa-circle-o"></i>Data Perbaikan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Instalasi</a></li>
          </ul>
        </li>
          </a>
        </li>

        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>MENU SETTING</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(). 'users'; ?>"><i class="fa fa-circle-o"></i>PROFILE</a></li>
          </ul>
        </li>
  
  </ul>

        </section>
        <!-- /.sidebar -->
      </aside>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
		<?php $this->load->view($content) ?>
          <!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      </div>


      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b>
        </div>
        <strong>Copyright &copy; 2016 <a href="#">Design Admin</a>.</strong> All rights reserved.
      </footer>
    <!-- ./wrapper -->

    
    
    <!-- jQuery 2.2.3 -->
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('template/admin_lte/'); ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<!-- <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
bootstrap time picker
<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/timepicker/bootstrap-timepicker.min.js"></script> -->
<!-- DataTables -->

<!-- SlimScroll -->
<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('template/admin_lte/'); ?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('template/admin_lte/'); ?>/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/select2/select2.full.min.js"></script>
<!-- page script -->

<!-- <script>
  $(function () {
//Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

     //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });

  });
  </script> -->
  <script>
  $(function () {
  //Initialize Select2 Elements
    $(".select2").select2();
  });
  </script>

  </body>
</html>