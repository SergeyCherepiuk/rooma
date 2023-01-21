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
				<div class="container">
					<div class="carousel-caption text-start">
						<h1>ROOMA Hotels</h1>
						<p>Sieć hoteli №1 w Polsce. Do najbardziej wymagających klientów.</p>
						<p><a class="primary" href="{{ url('/reservation') }}">Rezerwacja</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="overlay-image" style="background-image: url({{ URL('images/restaurant1.avif') }});"></div>
				<div class="container">
					<div class="carousel-caption text-start">
						<h1>ROOMA Hotels</h1>
						<p>Sieć hoteli №1 w Polsce. Do najbardziej wymagających klientów.</p>
						<p><a class="primary" href="{{ url('/reservation') }}">Rezerwacja</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="overlay-image" style="background-image: url({{ URL('images/spa1.avif') }});"></div>
				<div class="container">
					<div class="carousel-caption text-start">
						<h1>ROOMA Hotels</h1>
						<p>Sieć hoteli №1 w Polsce. Do najbardziej wymagających klientów.</p>
						<p><a class="primary" href="{{ url('/reservation') }}">Rezerwacja</a></p>
					</div>
				</div>
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
	</div>
	<div class="cards">
		<div class="card">
			<img src="{{ URL('images/room2.avif') }}" alt="card1">
			<p>Każdy z pokoi jest elegancki, nowoczesny, a jednocześnie bardzo kameralny, dzięki czemu można przyjemnie odprężyć się.</p>
			<a href="about-us.html#box1">Więcej</a>
		</div>
		<div class="card">
			<img src="{{ URL('images/restaurant2.avif') }}" alt="card2">
			<p>Szef kuchni naszej eleganckiej restauracji codziennie serwuje dania, które zawsze trafiają w gusta naszych Gości. Zapraszamy!</p>
			<a href="about-us.html#box2">Więcej</a>
		</div>
		<div class="card">
			<img src="{{ URL('images/spa2.avif') }}" alt="card3">
			<p>Jedyne w Polsce SPA w klimacie Morza Bałtyckiego, z wodą w każdym stanie skupienia, zaprasza na pełną niezapomnianych wrażeń podróż do źródeł piękna.</p>
			<a href="about-us.html#box3">Więcej</a>
		</div>
	</div>
@endsection