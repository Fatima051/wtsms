@extends('layouts.app')

@section('title', 'AKKHOR | Login')

@section('content')
<!-- Login Page Start Here -->
<div class="login-page-wrap">
    <div class="login-page-content">
        <div class="login-box">
            <div class="item-logo">
                <img src="{{ asset('img/logo2.png') }}" alt="logo">
            </div>
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="email" placeholder="Enter username" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <i class="far fa-envelope"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                    <i class="fas fa-lock"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="form-check-label">Remember Me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-btn">Forgot Password?</a>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="login-btn">Login</button>
                </div>
            </form>
            <div class="login-social">
                <p>or sign in with</p>
                <ul>
                    <li><a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="bg-gplus"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#" class="bg-git"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="sign-up">Don't have an account ? <a href="{{ route('register') }}">Signup now!</a></div>
    </div>
</div>
<!-- Login Page End Here -->
@endsection
