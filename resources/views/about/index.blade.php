@extends('header-footer')

@section('title')
	About Us
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/about.css') }}" type="text/css">
@endpush

@section('content')
	<section class="about">
		<h3>About us</h3>
		<div class="about-box">
			<img src="{{ URL('images/room3.avif') }}" alt="room">
			<p>Wszystkie pokoje zostały urządzone w nowoczesnej stylistyce, zaprojektowanej z myślą o zapewnieniu komfortu i dobrego samopoczucia naszym gościom, czy to przyjeżdżającym na rodzinne wakacje, czy też planującym romantyczny weekend dla dwojga. Design oraz wyposażenie pokoi z pewnością sprostają najbardziej wymagającym gustom.</p>
		</div>
		<div class="about-box">
			<img src="{{ URL('images/restaurant3.avif') }}" alt="restaurant">
			<p>Otoczenie, gościnność i doświadczenie personelu odpowiedzialnego za opiekę nad Gośćmi gwarantują profesjonalne przygotowanie każdej imprezy okolicznościowej, eventu lub spotkania w gronie rodzinnym. Tradycyjne specjały kuchni polskiej i nie tylko, wyszukane dania rybne oraz wspaniałe wypieki z własnej piekarni i cukierni - to jedynie część tego, co zapewniamy Gościom.</p>
		</div>
		<div class="about-box">
			<img src="{{ URL('images/spa3.avif') }}" alt="spa">
			<p>Nowoczesna strefa SPA to przestronne, urządzone ze smakiem wnętrza oraz bogata oferta profesjonalnych zabiegów. Każda wizyta w naszym nadmorskim SPA zapewni relaks i poprawę samopoczucia.</p>
		</div>			
	</section>
@endsection