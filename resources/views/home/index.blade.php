@extends('header-footer')

@section('title')
	Home
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/carousel.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/cards.css') }}" type="text/css">
@endpush

@section('content')
	<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="overlay-image" style="background-image: url({{ URL('images/room1.avif') }});"></div>
			</div>
			<div class="carousel-item">
				<div class="overlay-image" style="background-image: url({{ URL('images/restaurant1.avif') }});"></div>
			</div>
			<div class="carousel-item">
				<div class="overlay-image" style="background-image: url({{ URL('images/spa1.avif') }});"></div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
		<div class="carousel-caption text-start">
			<h1>ROOMA Hotels</h1>
			<p>Hotel chain №1 in Poland. For the most demanding customers</p>
			<p><a class="primary" href="{{ url('reservation/create') }}">Reservation</a></p>
		</div>
	</div>
	<div class="cards">
		<div class="card">
			<img src="{{ URL('images/room2.avif') }}" alt="card1">
			<p>Each of the rooms is elegant, modern and at the same time very intimate, thanks to which you can pleasantly relax.</p>
			<a href="{{ url('/about') }}">More</a>
		</div>
		<div class="card">
			<img src="{{ URL('images/restaurant2.avif') }}" alt="card2">
			<p>The Chef of our elegant restaurant serves dishes every day that always meet the tastes of our Guests. Welcome!</p>
			<a href="{{ url('/about') }}">More</a>
		</div>
		<div class="card">
			<img src="{{ URL('images/spa2.avif') }}" alt="card3">
			<p>The only SPA in Poland in the climate of the Baltic Sea, with water in every state of aggregation, invites you to an unforgettable journey to the sources of beauty.</p>
			<a href="{{ url('/about') }}">More</a>
		</div>
	</div>
@endsection


{{-- <div class="carousel-caption text-start">
	<h1>ROOMA Hotels</h1>
	<p>Hotel chain №1 in Poland. For the most demanding customers</p>
	<p><a class="primary" href="{{ url('reservation/create') }}">Reservation</a></p>
</div> --}}