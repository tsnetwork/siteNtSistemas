<?php $v->layout('_theme')?>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?="Usuários"?></h3>

            <?=flash()?>
            <div class="box-tools">
                <a href="<?=url('/admin/usuarios/novo')?>" class="btn btn-success">Adicionar Usuário <i class="fa fa-plus pull right"></i></a>
            </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php foreach ($users as $user): ?>
            <div class="col-xs-12 bg-gray-light user-card">
                <div class="image pull-left user-card-image">
                    <img src="<?=image($user->image, 50, 50)?>"
                        alt="User Image" class="img-circle bg-black" >
                </div>
                <div class="user-card-body">
                    <p><?=$user->name?></p>
                    <p><?=$user->email?></p>
                </div>
                <div class="user-card-footer">
                    <a href="<?=url("/admin/usuarios/{$user->id}/editar")?>"
                      class="btn btn-info">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a href="<?=url("/admin/usuarios/{$user->id}/excluir")?>"
                      class="btn btn-danger pull-right"
                      <?=($user->id == $activeUser->id) ? "disabled" : ""?> >
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer"><?=$paginator?></div>
      </div>
      <!-- /.box -->
    </div>
  </div>

</section>
<!-- /.content -->
