@extends('header-footer')

@section('title')
	Contact us
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/contact.css') }}" type="text/css">
    <script src="{{ asset('js/map.js') }}"></script>
@endpush

@section('content')	
	<main>
		<div class="contact">
			<form action="mailto:rooma-hotel@example.com" method="post" class="contact-form">
				<h3>Contact</h3>
				<div class="credits">
					<input type="text" name="name" id="name" pattern="^[A-Z][a-z]{2,20}(\s[A-Z][a-z]{2,20})?$" title="The name must start with a capital letter and have at least three letters." placeholder="Name" required>
					<input type="email" name="email" id="email" placeholder="Email" required>
				</div>
				<input type="text" name="subject" id="subject" placeholder="Topic" required>
				<textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
				<button type="submit">Send</button>
			</form>
			<section class="info">
				<div class="info-box">
					<h3>Address</h3>
					<p>ul. Wyzwolenia 29, Dźwirzyno</p>
				</div>
				<div class="info-box">
					<h3>Email</h3>
					<p>rooma-hotel@example.com</p>
				</div>
				<div class="info-box">
					<h3>Phone number</h3>
					<p>+48 589 587 526</p>
				</div>
			</section>
		</div>
		<div id="map"></div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzUFyQye5bD07-bmn87qFVVqyqbpGDG9s&callback=initMap"></script>
	</main>
@endsection