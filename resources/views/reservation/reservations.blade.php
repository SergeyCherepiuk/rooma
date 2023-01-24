@extends('header-footer')

@section('title')
	Profile
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/profile.css') }}" type="text/css">
@endpush

@section('content')
	@if ($reservations != null)
		@foreach ($reservations as $reservation)
			<p>{{ $reservation->from }} {{ $reservation->to }}</p>
		@endforeach
	@endif
@endsection