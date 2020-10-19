<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?=($active == "dashboard") ? "active" : ""?>">
          <a href="<?=url("/admin")?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?=($active == "contatos") ? "active" : ""?>">
          <a href="<?=url("/admin/contatos")?>">
            <i class="fa fa-envelope"></i> <span>Contatos</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
