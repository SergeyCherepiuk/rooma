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
					<form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST">
						@csrf
                    	@method('DELETE')
						<button type="submit">
							<a class="delete" href="{{ route("reservation.destroy", $reservation->id) }}">
								<img src="{{ URL('images/icon-delete.svg') }}" alt="delete">
							</a>
						</button>
					</form>
					<form action="{{ route('reservation.edit', $reservation->id) }}" method="POST">
						@csrf
                    	@method('GET')
						<button type="submit">
							<a class="edit" href="{{ route("reservation.edit", $reservation->id) }}">
								<img src="{{ URL('images/icon-edit.svg') }}" alt="edit">
							</a>
						</button>
					</form>
					<p>Class: {{ $reservation->apartment_class }}, rooms: {{ $reservation->rooms }}</p>
					<p>From: {{ $reservation->from }}, to: {{ $reservation->to }}</p>
					<p>Adults: {{ $reservation->adults }}, children: {{ $reservation->children }}</p>
				</div>
			@endforeach
		@endif
	</div>
@endsection