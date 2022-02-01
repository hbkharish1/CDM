@extends('layouts.app')
@section('content')
   <div class="card-body login-card-body">
      <p class="login-box-msg">Reset Password</p>
     
      <form method="post" action="/reset-password">
          @csrf
          <input type="hidden" name="token" value="{{ $token }}">
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
        <div class="input-group mb-3">
          <!-- <input type="password" name="password" class="form-control" placeholder="Password" > -->
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-unlock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">@error('password'){{ $message }} @enderror</span>

        <div class="input-group mb-3">
          <!-- <input type="password" name="password" class="form-control" placeholder="Password" > -->
          <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm-Password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Reset Password <i class="fas fa-sign-in-alt"></i></button>
          </div>
        </div>
      </form>

      <p>&nbsp;</p>
    </div>
    <!-- /.login-card-body -->
    @endsection