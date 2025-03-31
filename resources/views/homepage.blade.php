@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
<body>
    <div class="homepage-container">

        <nav class="navbar">
            <div class="navbar-left">
            </div>
            <div class="navbar-right">
                @auth
                    <span class="navbar-text">Welcome, {{ Auth::user()->name }} ({{ Auth::user()->email }})</span>
                @else
                    <a href="{{ route('login') }}" class="navbar-link">Login</a>
                    <a href="{{ route('register') }}" class="navbar-link">Register</a>
                @endauth
            </div>
        </nav>

        <section class="user-info-section">
            @auth
                <h1>Hello, {{ Auth::user()->name }}!</h1>
                <p>Your email: {{ Auth::user()->email }}</p>
            @else
                <h1>Please Log In</h1>
                <p>To view your account details, please log in.</p>
            @endauth
        </section>
        <a href = "/login">Logout</a>

        <footer class="footer">
            <p>&copy; 2025 Bring Duterte Back. All rights reserved.</p>
            <ul class="footer-links">
            </ul>
        </footer>
    </div>
</body>
@endsection
