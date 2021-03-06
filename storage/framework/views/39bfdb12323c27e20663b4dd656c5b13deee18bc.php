<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-RECRUIT HERO | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/employer/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/employer/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/employer/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/employer/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/employer/plugins/iCheck/square/blue.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box" style=" margin-top: 35px;">
  <div class="login-logo">
    <a href="<?php echo e(route('login')); ?>"><b>E-Recruit </b>Hero</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start</p>
    
    <form class="" role="form" method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo e(csrf_field()); ?>


                        <div class="form-group has-feedback<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                            
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="Email">
                                 <span class="fa fa-envelope form-control-feedback"></span>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            
                        </div>
                        <div class="form-group has-feedback<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                           
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                <span class="fa fa-unlock-alt form-control-feedback"></span>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                           
                        </div>

                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-xs-12">
                               <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div>

                        </div>

                        <br>
                     <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                        Forgot Your Password?
                    </a>

                      
    </form>
   
      

    <!-- /.social-auth-links -->

    <a href="/register" class="text-center">No account yet? Sign up here</a>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/employer/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/employer/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/employer/plugins/iCheck/icheck.min.js"></script>
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
