@extends('header-footer')

@section('title')
	About us
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/about.css') }}" type="text/css">
@endpush

@section('content')
	<section class="about">
		<h3>About us</h3>
		@include('about.partials.box', [
			'background_image' => 'images/room3.avif',
			'alt' => 'room',
			'text' => 'All rooms are decorated in a modern style, designed to ensure the comfort and well-being of our Guests, whether coming for a family holiday or planning a romantic weekend for two. The design and equipment of the rooms will certainly meet the most demanding tastes.',
		])
		@include('about.partials.box', [
			'background_image' => 'images/restaurant3.avif',
			'alt' => 'restaurant',
			'text' => 'The environment, hospitality and experience of the staff responsible for taking care of guests guarantee professional preparation of every occasion, event or family meeting. Traditional specialties of Polish and other cuisines, sophisticated fish dishes and wonderful pastries from our own bakery and pastry shop - this is only part of what we provide to our Guests.',
		])
		@include('about.partials.box', [
			'background_image' => 'images/spa3.avif',
			'alt' => 'spa',
			'text' => 'The modern SPA zone is a spacious, tastefully decorated, interior and a wide range of professional treatments. Each visit to our seaside SPA will ensure relaxation and improvement of well-being.',
		])
	</section>
@endsection