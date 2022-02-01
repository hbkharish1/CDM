<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GoPast CRM | GoPast Center for Learning</title
  <!-- favicon icon -->
<!-- <link rel="shortcut icon" href="dist/img/favicon.png" /> -->
<link rel="shortcut icon" href="{{asset('dist/img/favicon.png')}}" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!--<a href="#"><b>GoPast</b>CRM Login</a>-->
	<img src="{{asset('dist/img/gopast-01.png')}}" class="rounded" alt="GoPast Logo" width="215" height="75">
  </div>
  <!-- /.login-logo -->
  <div class="card">
  @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif


        <main class="py-4">
            @yield('content')
        </main>
        </div>
</div>
<!-- /.login-box -->
<p class="login-box-msg" style="margin-top:15px;">Copyright &copy; 2021. GoPast Center for Learning Pvt. Ltd.</p>
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
<!-- {{asset('')}} -->
</html>

</body>
</html>