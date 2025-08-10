@extends('layouts.app')

@section('title', 'WTS | Register')

@section('content')
    <!-- register Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{ asset('img/WTS.png') }}" alt="logo">
                </div>
                <form method="POST" action="{{ route('register.post') }}" class="login-form">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Enter username"
                            class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}"
                            required autocomplete="username" autofocus>
                        <i class="far fa-envelope"></i>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        <i class="far fa-envelope"></i>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter password"
                            class="form-control @error('password') is-invalid @enderror" required
                            autocomplete="current-password">
                        <i class="fas fa-lock"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    

                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="form-check-label">Remember Me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-btn">Forgot Password?</a>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Register</button>
                    </div>
                </form>
                
            </div>
            <div class="sign-up">
                Already have an account? <a href="{{ route('login') }}">Login here</a>
            </div>
        </div>
    @endsection
