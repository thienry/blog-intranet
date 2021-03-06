<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Intranet | Jayme da Fonte</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/res/admin/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/res/admin/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Link do favicon -->
  <link rel="shortcut icon" href="/res/admin/dist/img/favicon.ico" type="image/x-icon">

</head>
<body class="hold-transition login-page" style="background-color: #8d1d2e;">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <div class="login-logo">
        <b>Intranet </b> HJF
      </div>

        <p class="login-box-msg">Entre com seu usuário e senha</p>

      <form action="/admin/login" method="post">
        <div class="form-group has-feedback">
          <input type="text" id="login" name="login" class="form-control" placeholder="Usuário" required>
          
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
          
        </div>
        <?php if( $erro == 1 ){ ?>
        <p style="color: #8d1d2e">Usuário incorreto ou senha errada.</p>
        <?php } ?>
        <div class="row">
          
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block pull-right" id="btn-login">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <br>
      <p class="mb-1" style="text-align: center;">
        Esqueceu a senha?
      </p>
      <p class="mb-0" style="text-align: center;">
        <a href="//helpdesk/" target="_blank">Abra um chamado</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/res/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/res/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="/res/admin/plugins/iCheck/icheck.min.js"></script>

<script src="/res/admin/dist/js/validaLogin.js"></script>


<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
