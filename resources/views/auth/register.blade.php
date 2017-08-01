<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Recruit Hero | Registration Page</title>
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
            <a href="#"><b>E Recruit</b>Hero</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new account</p>

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group has-feedback{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="First Name">
                                 <span class="fa fa-user-o form-control-feedback"></span>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group has-feedback{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <span class="fa fa-user-o form-control-feedback"></span>
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required placeholder="Last Name">

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            
                        </div>


                        <div class="form-group has-feedback{{ $errors->has('gender') ? ' has-error' : '' }}">
                          <select class="form-control" name="gender">
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                          <span class="fa fa-venus-mars form-control-feedback"></span>
                           @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                        </div>


                        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                                 <span class="fa fa-envelope form-control-feedback"></span>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                <span class="fa fa-unlock-alt form-control-feedback"></span>
    
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group has-feedback">
                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm password">
                                <span class="fa fa-unlock-alt form-control-feedback"></span>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-flat btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                    Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                        Google+</a>
                    </div>

                    <a href="/login" class="text-center">I already have an account</a>
                </div>
                <!-- /.form-box -->
            </div>
            <!-- /.register-box -->

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