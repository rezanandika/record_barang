<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $this->session->userdata('title').' '.$title; ?></title>
    <!--<link rel="icon" href="<?php echo base_url(); ?>/assets/img/favicon.ico" type="image/x-icon">-->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url('template/admin_lte'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.4.0 -->
    <link href="<?php echo base_url('template/admin_lte'); ?>/dist/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <!--<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />-->
    <!-- Theme style -->
    <link href="<?php echo base_url('template/admin_lte'); ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url('template/admin_lte/'); ?>/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url('template/admin_lte'); ?>/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <!-- <link href="<?php //echo base_url('template/admin_lte'); ?>/plugins/morris/morris.css" rel="stylesheet" type="text/css" /> -->
    <!-- jvectormap -->
    <link href="<?php echo base_url('template/admin_lte'); ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url('template/admin_lte'); ?>/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo base_url('template/admin_lte'); ?>/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.10.3 -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/jQueryUI/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
  </head>




  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url_admin(); ?>" class="logo">
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
                  <img src="<?php echo base_url('template/admin_lte'); ?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('template/admin_lte'); ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $this->session->userdata('name'); ?>
                      <small>Login terakhir <?php echo date('d-M-Y H:i:s', strtotime($this->session->userdata('last_login'))); ?></small>
                    </p>
                  </li>




                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url_admin().'user/edit?id='.$this->session->userdata('id') ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url_admin().'login/signout' ?>" class="btn btn-default btn-flat">Sign out</a>
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
              <img src="<?php echo base_url('template/admin_lte'); ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('name'); ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
		  <!-- Main menu -->
		  <?php $this->load->view('template/admin_lte/menu') ?>
        </section>
        <!-- /.sidebar -->
      </aside>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
		<?php $this->load->view('template/admin_lte/header') ?>


        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
		  <?php $this->load->view($content) ?>
          <!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->






      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> <?php echo $this->session->userdata('app_version'); ?>
        </div>
        <strong>Copyright &copy; 2016 <a href="#">Design Admin</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/moment/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url('template/admin_lte/'); ?>/plugins/fastclick/fastclick.min.js'></script>
	<!-- MaskMoney -->
    <script src='<?php echo base_url('template/admin_lte/'); ?>/plugins/maskmoney/jquery.maskMoney.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('template/admin_lte/'); ?>/dist/js/app.min.js" type="text/javascript"></script>
    <script type="text/javascript">
  		$(document).bind('contextmenu', function (e) {
  		  // e.preventDefault();
  		  // alert('Right Click is not allowed.');
  		});
    </script>
  </body>
</html>