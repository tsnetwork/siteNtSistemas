<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar" style="height: auto;">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?=image($activeUser->image, 50, 50)?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?=$activeUser->name?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">

    <li class="<?=($title == "Dashboard") ? "active" : ""?>">
      <a href="<?=url("/admin")?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="<?=($title == "Contatos") ? "active" : ""?>">
      <a href="<?=url("/admin/contatos")?>">
        <i class="fa fa-envelope"></i> <span>Contatos</span>
      </a>
    </li>
    <li class="<?=($title == "Usuários") ? "active" : ""?>">
      <a href="<?=url("/admin/usuarios")?>">
        <i class="fa fa-user"></i> <span>Usuários</span>
      </a>
    </li>
  </ul>
</section>
<!-- /.sidebar -->
