@extends('header-footer')

@section('title')
	Edit reservation
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/reservation.css') }}" type="text/css">
@endpush

@section('content')
	<form id="reservation-form" action="{{ route('reservation.update', $reservation) }}" method="POST">
		@csrf
		@method("PATCH")
		<div class="reservation">
			<img src="{{ url('images/room4.avif') }}" alt="room">
			<div class="reservation-inputs">
				<h3>Update the booking</h3>
				<div class="room-info">
					<select size="1" name="apartment-class" id="apartment-class" class="apartment-class">
						<option value="hide" class="select-hidden">Apartment class</option>
						<option value="A" @if ($reservation->apartment_class == "A") selected="selected" @endif>A class</option>
						<option value="B" @if ($reservation->apartment_class == "B") selected="selected" @endif>B class</option>
						<option value="C" @if ($reservation->apartment_class == "C") selected="selected" @endif>C class</option>
						<option value="D" @if ($reservation->apartment_class == "D") selected="selected" @endif>D class</option>
					</select>
					<select size="1" name="rooms" id="rooms" class="rooms">
						<option value="hide" class="select-hidden">Liczba pokoi</option>
						<option value="1" @if ($reservation->rooms == "1") selected="selected" @endif>1</option>
						<option value="2" @if ($reservation->rooms == "2") selected="selected" @endif>2</option>
						<option value="3" @if ($reservation->rooms == "3") selected="selected" @endif>3</option>
					</select>
				</div>
				<div class="dates">
					<input type="date" name="check-in" id="check-in" value="{{ $reservation->from }}">
					<input type="date" name="check-out" id="check-out" value="{{ $reservation->to }}">
				</div>
				<div class="persons-info">
					<select size="1" name="adults" id="adults" class="adults">
						<option value="hide" class="select-hidden">Dorosłych</option>
						<option value="1" @if ($reservation->adults == "1") selected="selected" @endif>1</option>
						<option value="2" @if ($reservation->adults == "2") selected="selected" @endif>2</option>
						<option value="3" @if ($reservation->adults == "3") selected="selected" @endif>3</option>
						<option value="4" @if ($reservation->adults == "4") selected="selected" @endif>4</option>
						<option value="5" @if ($reservation->adults == "5") selected="selected" @endif>5</option>
						<option value="6" @if ($reservation->adults == "6") selected="selected" @endif>6</option>
					</select>
					<select size="1" name="children" id="children" class="children">
						<option value="hide" class="select-hidden">Dzieci</option>
						<option value="0" @if ($reservation->children == "0") selected="selected" @endif>0</option>
						<option value="1" @if ($reservation->children == "1") selected="selected" @endif>1</option>
						<option value="2" @if ($reservation->children == "2") selected="selected" @endif>2</option>
						<option value="3" @if ($reservation->children == "3") selected="selected" @endif>3</option>
						<option value="4" @if ($reservation->children == "4") selected="selected" @endif>4</option>
						<option value="5" @if ($reservation->children == "5") selected="selected" @endif>5</option>
						<option value="6" @if ($reservation->children == "6") selected="selected" @endif>6</option>
					</select>
				</div>
				<div class="reservation-buttons">
					<button type="submit">Update</button>
					<a href="{{ url("reservation/index") }}">Back</a>
				</div>
			</div>
		</div>
	</form>
@endsection