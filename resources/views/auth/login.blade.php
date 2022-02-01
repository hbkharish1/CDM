@extends('layouts.app')
@section('content')
<div class="card-body login-card-body">
      <p class="login-box-msg">CRM Login</p>
     
      <form method="post" action="{{route('login')}}">
          @csrf

        <div class="input-group mb-3">
          <!-- <input type="email" name="email" class="form-control" placeholder="Email" > -->
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
        <div class="input-group mb-3">
          <!-- <input type="password" name="password" class="form-control" placeholder="Password" > -->
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember" style="font-weight:normal;">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login <i class="fas fa-sign-in-alt"></i></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p>&nbsp;</p>
	  <!--<div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          Login with Facebook <i class="fab fa-facebook-square"></i>
        </a>
        <a href="#" class="btn btn-block btn-danger">
          Login with Google <i class="fab fa-google-plus-square"></i>
        </a>
      </div>-->
      <!-- /.social-auth-links -->

      <p align="center" class="mb-1">
        <a href="/forget-password">Forgot Password</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{ route('register') }}" class="text-center">Register New User</a>
      </p>
      <!--<p class="mb-0">
        <a href="#" class="text-center">New User Sign Up</a>
      </p>-->
    </div>
    <!-- /.login-card-body -->
    @endsection