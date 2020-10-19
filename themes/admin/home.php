<?php $v->layout("_theme");?>

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
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3><?=$contactCount?></h3>

                <p>Contatos Realizados</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-mail"></i>
              </div>
              <a href="<?=url("/admin/contatos")?>" class="small-box-footer">Ver Contatos <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<!-- Footer -->
<?=$v->insert("components/footer");?>