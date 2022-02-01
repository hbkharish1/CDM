@extends('layouts.app')
@section('content')
   <div class="card-body login-card-body">
      <p class="login-box-msg">Reset Password</p>
     
      <form method="post" action="/forget-password">
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
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
        
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link     <i class="fas fa-sign-in-alt"></i></button>
          </div>
        </div>
      </form>

      <p>&nbsp;</p>
      <p align="center" class="mb-1">
        Are You Remembered just?<a href="{{ route('login') }}" class="text-center">Log In</a>
      </p>
	  
  </div>
  @endsection