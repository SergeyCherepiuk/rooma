@extends('header-footer')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" type="text/css">
@endpush

@section('title')
    Log In
@endsection

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Log in</h2>
        <input id="email" type="email" name="email" placeholder="Email" required autofocus />
        <input id="password" type="password" name="password" placeholder="Password" required />
        <label for="remember_me">
            <input id="remember_me" type="checkbox" name="remember">
            <span>Remember me</span>
        </label>
        <button type="submit">Log In</button>
    </form>
@endsection