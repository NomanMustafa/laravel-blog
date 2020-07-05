@extends('layout.auth')
@section('content')

 <div class="login-logo">
        <a href="index.html"><img src="{{ asset('admin/assets/images/logo.png') }}" alt="" /></a>
    </div>
    <h2 class="form-heading">login</h2>
    <div class="app-cam">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" class="text" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
         
            <ul class="new">
                <li class="new_left">
                    <p><a href="#">Forgot Password ?</a></p>
                </li>
                <li class="new_right">
                    <p class="sign">New here ?<a href="register.html"> Sign Up</a></p>
                </li>
                <div class="clearfix"></div>
            </ul>
        </form>
    </div>
    <div class="copy_layout login">
        <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>

@endsection
