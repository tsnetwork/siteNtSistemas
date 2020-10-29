<?php $v->layout("_theme")?>
<section class="content">
    <div class="box box-primary">
        <!-- form start -->
        <form action="<?=url("admin/usuarios/{$user->id}/editar")?>" method="post" enctype="multipart/form-data">
            <div class="ajax_response"></div>
            <?=csrfInput()?>

            <div class="box-body">
                <div class="form-group">
                    <div class="user-image-div">
                        <div class="edit-icon text-center">
                            <i class="fa fa-camera fa-2x" aria-hidden="true"></i>
                        </div>
                        <img src="<?=image($user->image ?? 'images/defaults/user_icon.png', 100, 100)?>"
                            id="form_image" class="img-circle user-image">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="name" value="<?=$user->name?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" value="<?=$user->email?>">
                </div>
                <div class="form-group">
                    <label for="password"> Nova Senha</label>
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                </div>
                <div class="form-group">
                    <label for="passwordre">Confirme sua senha:</label>
                    <input type="password" class="form-control" name="passwordre" placeholder="Senha">
                </div>
                <div class="form-group">
                    <input type="file" name="image" id="exampleInputFile" onchange="previewImage()">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="mb-3 text-center">
                    <div class="loading"></div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>

    </div>
</section>
<?php $v->start('scripts')?>
    <script src="<?=asset("/scripts/jquery.form.js")?>"></script>
    <script src="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/js/ajax/form.js")?>"></script>
    <script src="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/js/components/form_image.js")?>"></script>

<?php $v->stop()?>