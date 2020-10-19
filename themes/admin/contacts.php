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
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Blank Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Contatos</h3>


              <div class="box-tools">
                <?=$paginator?>
              </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-hover">
              <tr>
                <th>E-mail</th>
                <th>Mensagem</th>
                <th>Realizado em:</th>
                <th>Status</th>
                <th>Erro</th>
              </tr>
              <?php foreach ($contacts as $contact): ?>
                <tr>
                <td><?=$contact->email?></td>
                <td><?=strLimitChars($contact->mensagem, 120)?></td>
                <td><?=dateFmtBr($contact->created_at)?></td>
                <td>
                  <?php if ($contact->status == 'delivered'): ?>
                    <span class="label label-success">Enviado</span>
                  <?php else: ?>
                    <span class="label label-danger">Erro</span>
                  <?php endif;?>
                </td>
                <?php if ($contact->status != 'delivered'): ?>
                  <td><?=$contact->error?></td>
                <?php endif;?>
                </tr>
                <?php endforeach;?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer -->
<?=$v->insert("components/footer");?>