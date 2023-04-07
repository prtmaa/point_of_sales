
@extends('layouts.auth')

@section('login')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Admin</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Masukan Username dan Password</p>
  
        <form action="/login" method="post">
        @csrf
        
         @error('email')<label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> {{$message}}</label> @enderror
          <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required value="{{old('email')}}" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>        
          
          @error('password')<label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> {{$message}}</label> @enderror
          <div class="input-group mb-3">
            <input type="password" class="form-control @error('email') is-invalid @enderror" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
      
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>   
@endsection
