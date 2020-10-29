<?php $v->layout("_theme");?>
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