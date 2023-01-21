@extends('header-footer')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
@endpush

@section('title')
    Log In
@endsection

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Log In</h2>
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required autofocus />
        </div>
        <div class="mt-4">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" />
        </div>
        <div class="block mt-4">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>
        </div>
        <div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            <button type="submit">Log In</button>
        </div>
    </form>
@endsection