<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?=$head?>

    <link rel="stylesheet"
      href="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/style.css");?>">

    <link rel="stylesheet"
      href="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/css/skin/skin-purple.min.css");?>">

    <link rel="stylesheet"
      href="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/css/i-check/purple.css");?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition login-page bg-purple">
  <div class="login-box">
    <div class="login-logo ">
      <span class="text-white"><b>NT</b> SISTEMAS WEB</span>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Efetue login para acessar o painel</p>

      <form action="<?=url('/admin/login')?>" method="post">
        <div class="ajax_response"></div>
        <?=csrfInput()?>
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control"
            placeholder="Email" value="<?=($cookie ?? null);?>">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="save"> Lembrar
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <script src="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/scripts.js")?>"></script>

  <!-- iCheck -->
  <script src="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/js/i-check/icheck.min.js")?>"></script>
  <script src="<?=asset("/scripts/jquery.form.js")?>"></script>
  <script src="<?=theme(CONF_VIEW_THEME_ADMIN, "/assets/js/ajax/form.js")?>"></script>


  <script>
    $(function () {
      $("input").iCheck({
        checkboxClass: 'icheckbox_square-purple',
        radioClass: 'iradio_square-purple',
        increaseArea: '20%' /* optional */
      });
    });
  </script>


  </body>
</html>

<!-- /.login-box -->
