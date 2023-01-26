@extends('header-footer')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" type="text/css">
@endpush

@section('title')
    Register
@endsection

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2>Register</h2>
        <input id="name" type="text" name="name" placeholder="Name" required autofocus />
        <input id="email" type="email" name="email" placeholder="Email" required />
        <input id="password" type="password" name="password" placeholder="Password" required />
        <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm password" required />
        <button type="submit">Register</button>
    </form>
@endsection