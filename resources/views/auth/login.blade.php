@extends('layouts.app')

@section('title', 'WTS | Login')

@section('content')
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo text-center">
                    <img src="{{ asset('img/wtslogo.png') }}" alt="logo">
                </div>

                {{-- Login Form --}}
                <form method="POST" action="{{ route('login.post') }}" class="login-form">
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

                    <div class="form-group">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </form>

                {{-- Social Icons --}}
                <div class="login-social text-center mt-4">
                    <p>or sign in with</p>
                    <ul class="d-flex justify-content-center list-unstyled">
                        <li class="mx-2">
                            <a href="#" class="social-btn bg-fb"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="social-btn bg-twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="social-btn bg-gplus"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="social-btn bg-git"><i class="fab fa-github"></i></a>
                        </li>
                    </ul>
                </div>


                {{-- Register Link --}}
                <div class="sign-up text-center mt-3">
                    <p>Don't have an account?
                        <a href="{{ route('auth.register') }}" class="nav-link d-inline">
                            <i class="fas fa-angle-right"></i> Register Now
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
