@extends('layouts.default')

@section('title', 'Login')

@section('content')
<body>
<div class="login-background">
    <div class="login-container">
        <div class="login-form">
        @if(session()->has("success"))
           <div class="alert alert-succes">
              {{ session()->get("success") }}
           </div>
        @endif

        @if(session()->has("error"))
           <div class="alert alert-succes">
              {{ session()->get("error") }}
           </div>
        @endif
            <div class="login-header">
                <h2>Login</h2>
            </div>
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="login-button">Login</button>
                </div>
                <div class="form-links">
                    <a href="{{ route('register.post') }}">Don't have an account? Register</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loginContainer = document.querySelector('.login-container');
        const closeButton = document.querySelector('.close-button');

        loginContainer.style.display = 'block'; 

        closeButton.addEventListener('click', function() {
            loginContainer.style.display = 'none';
        });
    });
</script>
@endsection