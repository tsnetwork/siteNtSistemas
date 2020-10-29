<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?=$head?>


  <!-- Theme style -->
  <link rel="stylesheet" href="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/style.css")?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/css/skin/skin-purple.min.css")?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-purple sidebar-mini">

  <div class="wrapper">
    <header class="main-header">
      <!-- Navbar -->
      <?=$v->insert("components/navbar")?>
      <!-- /.navbar -->
    </header>


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar">
      <?=$v->insert("components/sidebar")?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <?=$title?>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?=url('/admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><?=$title?></li>
        </ol>
      </section>

      <?=$v->section('content');?>

    </div>
      <!-- /.content-wrapper -->

      <!-- Footer -->
    <?=$v->insert("components/footer");?>

  </div>
  <!-- ./wrapper -->

 <!-- AdminLTE App -->
 <script src="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/scripts.js")?>"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>


  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <?=$v->section('scripts')?>

</body>

</html>
