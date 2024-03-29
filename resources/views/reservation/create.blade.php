@extends('header-footer')

@section('title')
	Reservation
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
	<form id="reservation-form" action="{{ route('reservation.store') }}" method="POST">
		@csrf
		<div class="reservation">
			<img src="{{ url('images/room4.avif') }}" alt="room">
			<div class="reservation-inputs">
				<h3>Book an apartment</h3>
				<div class="room-info">
					<select size="1" name="apartment-class" id="apartment-class" class="apartment-class">
						<option value="hide" class="select-hidden">Apartment class</option>
						@foreach (array("A", "B", "C", "D") as $letter)
							<option value="{{ $letter }}">{{ $letter }} class</option>
						@endforeach
					</select>
					<select size="1" name="rooms" id="rooms" class="rooms">
						<option value="hide" class="select-hidden">Rooms count</option>
						@for ($i = 1; $i <= 3; $i++)
							<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
				</div>
				<div class="dates">
					<input type="date" name="check-in" id="check-in">
					<input type="date" name="check-out" id="check-out">
				</div>
				<div class="persons-info">
					<select size="1" name="adults" id="adults" class="adults">
						<option value="hide" class="select-hidden">Adults</option>
						@for ($i = 1; $i <= 6; $i++)
							<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
					<select size="1" name="children" id="children" class="children">
						<option value="hide" class="select-hidden">Children</option>
						@for ($i = 0; $i <= 6; $i++)
							<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
				</div>
				<div class="reservation-buttons">
					<button type="submit">Book</button>
					<button type="reset">Clear</button>
				</div>
			</div>
		</div>
	</form>
@endsection