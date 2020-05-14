<!DOCTYPE html>
<html>
<head>
	@include('admin.head')
	@section('css')
	@show
</head>
<body class="hold-transition login-page">
<div class="login-box" style="margin-bottom:30px;">
  <div class="login-logo">
    <a href="../../index2.html"><b>Library Management System</b></a>
  </div>
  <!-- /.login-logo -->
  <h3 class="bg-danger"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3><br>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{route('admin.login')}}" method="post">
    	@csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name='email'>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

   
  </div>
  <!-- /.login-box-body -->
</div>

    


@include('admin.script')
</body>
</html>