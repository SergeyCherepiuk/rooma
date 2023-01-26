<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ URL('favicon.ico') }}">
    @stack('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav>
        <img src="{{ URL('images/logo.png') }}" class="logo" alt="logo">
        <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About us</a></li>
            <li><a href="{{ url('/reservation/create') }}">Reservation</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <ul>
            @if (Auth::check())
                @if (request()->routeIs('reservation.show'))
                    <li><a href="{{ url('logout') }}">Log Out</a></li>
                    <li><a href="{{ url('delete') }}">Delete</a></li>
                @elseif (request()->routeIs('auth.delete'))
                    <li><a href="{{ url('reservation/index') }}">Back</a></li>
                @else
                    <li><a href="{{ url('/reservation/index') }}">Profile</a></li>
                @endif
            @else
                <li><a href="{{ url('/login') }}">Log In</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @endif
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Copyright © 2023 Serhii Cherepiuk, 96493.
        <br>Lublin University of Technology</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>