@extends('header-footer')

@section('title')
	Profile
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/profile.css') }}" type="text/css">
@endpush

@section('content')
	<p id="name">{{ $user->name }}</p>
	<p>{{ $user->email }}</p>
	<div class="reservations">
		@if ($reservations != null)
			@foreach ($reservations as $reservation)
				<div class="reservation">
					{{-- TODO: Separate page for editing --}}
					<a class="edit" href="#"><img src="{{ URL('images/icon-edit.svg') }}" alt="edit"></a>
					<a class="delete" href="#"><img src="{{ URL('images/icon-delete.svg') }}" alt="delete"></a>
					<p>Class: {{ $reservation->class }}, rooms: {{ $reservation->rooms }}</p>
					<p>From: {{ $reservation->from }}, to: {{ $reservation->to }}</p>
					<p>Adults: {{ $reservation->adults }}, children: {{ $reservation->children }}</p>
				</div>
			@endforeach
		@endif
		{{-- TODO: "Delete account" button --}}
	</div>
@endsection