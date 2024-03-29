<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>宝聚投资 | 管理员注册</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Public/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Public/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Public/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Public/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Public/AdminLTE/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>宝聚投资</b>后台管理</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">注册一个新的账号</p>


      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="真实姓名" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="电子邮箱" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="密码" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="确认密码" name="repassword">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <!--<div class="col-xs-8">-->
          <!--<div class="checkbox icheck">-->
            <!--<label>-->
              <!--<input type="checkbox"> 我同意 <a href="#">《中铠服务条约》</a>-->
            <!--</label>-->
          <!--</div>-->
        <!--</div>-->
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="button" class="btn btn-primary btn-block btn-flat" id="register">注册</button>
        </div>
        <!-- /.col -->
      </div>


    <!--<div class="social-auth-links text-center">-->
      <!--<p>- 或使用第三方账号登录 -</p>-->
      <!--<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-wechat"></i> 通过微信账号登录</a>-->
      <!--<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-qq"></i> 通过QQ账号登录</a>-->
    <!--</div>-->

    <div style="margin-top: 15px;">
      <a href="<?php echo U('home/login/index');?>" class="text-center">已有账号</a>
    </div>

  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="Public/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="Public/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="Public/AdminLTE/plugins/iCheck/icheck.min.js"></script>

<script src="Public/Dialog/layer/layer.js"></script>

<script src="Public/Dialog/dialog.js"></script>

<script src="Public/js/admin/register.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>