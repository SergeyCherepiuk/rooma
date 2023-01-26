@extends('header-footer')

@section('title')
	Delete an account
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/auth.css') }}" type="text/css">
@endpush

@section('content')
	<form action="{{ route('auth.destroy') }}" method="POST">
		@csrf
		@method("DELETE")
		<h2>Delete an account</h2>
		<input id="password" type="password" name="password" placeholder="Password" required autofocus />
		<button type="submit">Delete</button>
	</form>
@endsection