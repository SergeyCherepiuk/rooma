@extends('header-footer')

@section('title')
	Edit reservation
@endsection

@push('head')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/reservation.css') }}" type="text/css">
@endpush

@section('content')
	@if ($errors->any())
		<div class="errors">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
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
						@foreach (array("A", "B", "C", "D") as $letter)
							<option value="{{ $letter }}" @if ($reservation->apartment_class == $letter) selected="selected" @endif>{{ $letter }} class</option>
						@endforeach
					</select>
					<select size="1" name="rooms" id="rooms" class="rooms">
						<option value="hide" class="select-hidden">Rooms count</option>
						@for ($i = 1; $i <= 3; $i++)
							<option value="{{ $i }}" @if ($reservation->rooms == $i) selected="selected" @endif>{{ $i }}</option>
						@endfor
					</select>
				</div>
				<div class="dates">
					<input type="date" name="check-in" id="check-in" value="{{ $reservation->from }}">
					<input type="date" name="check-out" id="check-out" value="{{ $reservation->to }}">
				</div>
				<div class="persons-info">
					<select size="1" name="adults" id="adults" class="adults">
						<option value="hide" class="select-hidden">Adults</option>
						@for ($i = 1; $i <= 6; $i++)
							<option value="{{ $i }}" @if ($reservation->adults == $i) selected="selected" @endif>{{ $i }}</option>
						@endfor
					</select>
					<select size="1" name="children" id="children" class="children">
						<option value="hide" class="select-hidden">Children</option>
						@for ($i = 0; $i <= 6; $i++)
							<option value="{{ $i }}" @if ($reservation->children == $i) selected="selected" @endif>{{ $i }}</option>
						@endfor
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