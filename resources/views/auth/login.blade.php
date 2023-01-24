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
        <input id="email" type="email" name="email" placeholder="Email" required autofocus />
        <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password" />

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