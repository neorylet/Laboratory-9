@extends('layouts.default')

@section('title', 'Register')

@section('content')
<div class="Register-background d-flex align-items-center justify-content-center">
    <div class="register-card">
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
        <div class="register-header">
            <h2>Registration</h2>
        </div>
        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
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
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="register-button">Register</button>
            </div>
            <div class="form-links">
                <a href="{{ route('login.post') }}">Already have an account? Login</a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const registerContainer = document.querySelector('.register-card');
        const closeButton = document.querySelector('.close-button');

        registerContainer.style.display = 'block'; // Show the register form immediately

        closeButton.addEventListener('click', function() {
            registerContainer.style.display = 'none';
        });
    });
</script>
@endsection