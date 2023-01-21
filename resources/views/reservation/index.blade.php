@extends('header-footer')

@section('title')
	Reservation
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/reservation.css') }}" type="text/css">
@endpush

@section('content')
	<form id="reservation-form">
		<div class="reservation">
			<img src="{{ url('images/room4.avif') }}" alt="room">
			<div class="reservation-inputs">
				<h3>Zapytaj o dostępność</h3>
				<div class="room-info">
					<select size="1" name="room-class" id="room-class" class="room-class">
						<option value="hide" class="select-hidden">Klasa pokoju</option>
						<option value="A">Klasa A</option>
						<option value="B">Klasa B</option>
						<option value="C">Klasa C</option>
						<option value="D">Klasa D</option>
					</select>
					<select size="1" name="rooms" id="rooms" class="rooms">
						<option value="hide" class="select-hidden">Liczba pokoi</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
				<div class="dates">
					<input type="date" name="check-in" id="check-in">
					<input type="date" name="check-out" id="check-out">
				</div>
				<div class="persons-info">
					<select size="1" name="adults" id="adults" class="adults">
						<option value="hide" class="select-hidden">Dorosłych</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
					<select size="1" name="children" id="children" class="children">
						<option value="hide" class="select-hidden">Dzieci</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</div>
				<div class="reservation-buttons">
					<button type="submit">Rezerwuj</button>
					<button type="reset">Anuluj</button>
				</div>
			</div>
		</div>
	</form>
@endsection