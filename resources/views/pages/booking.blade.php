@extends('master')
@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="{{asset('/assets/img/breadcrumb.jpg')}}">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Booking</div>
						<div class="sub-title">Check the availability of our rooms</div>
					</div>
				</div>

				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li class="current"><a href="#">Booking</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<section id="booking-section" class="step-1">
			<div class="inner-container container">
				<div class="col-md-4 l-sec">
					<div class="ravis-title-t-2">
						<div class="title"><span>Reservation Information</span></div>
					</div>

					<div class="field-row room-field" id="room-field-tmpl">
						<div class="title">Room :</div>
						<select name="adult[]" class="adult-field disable-select2">
							<option value="1">1 Adult</option>
							<option value="2">2 Adults</option>
							<option value="3">3 Adults</option>
							<option value="4">4 Adults</option>
							<option value="5">5 Adults</option>
						</select>
						<select name="child[]" class="disable-select2">
							<option value="0">No Child</option>
							<option value="1">1 Children</option>
							<option value="2">2 Children</option>
							<option value="3">3 Children</option>
							<option value="4">4 Children</option>
							<option value="5">5 Children</option>
						</select>
					</div>
					<form id="room-information-form" action="#"><!-- Do Not remove the classes -->
						<div class="input-daterange">
							<div class="field-row check-in">
								<input type="hidden" name="check-in"/>
								<div class="check-in-box">
									<div class="title">Check in :</div>
									<div class="value">Choose a date</div>
								</div>
							</div>
							<div class="field-row check-out">
								<input type="hidden" name="check-out"/>
								<div class="check-out-box">
									<div class="title">Check out :</div>
									<div class="value">Choose a date</div>
								</div>
							</div>
							<div class="field-row duration">
								<input type="hidden" name="duration"/>
								<div class="duration-box">
									<div class="title">Duration :</div>
									<div class="value">Choose a date</div>
								</div>
							</div>
						</div>
						<div class="field-row">
							<select name="rooms" class="room-count">
								<option value="">Rooms</option>
								<option value="1">1 Room</option>
								<option value="2">2 Rooms</option>
								<option value="3">3 Rooms</option>
								<option value="4">4 Rooms</option>
								<option value="5">5 Rooms</option>
							</select>
						</div>
						<div class="room-field-container"></div>
						<div class="field-row btn-container">
							<input type="submit" value="Book Now">
						</div>
					</form>
				</div>
				<div class="col-md-8 r-sec">
					<div class="inner-box">
						<div class="steps">
							<ul class="list-inline">
								<li class="active">Choose Date</li>
								<li>Choose Room</li>
								<li>Make a Reservation</li>
								<li>Confirmation</li>
							</ul>
						</div>
						<div id="booking-date-range-inline" class="clearfix">
							<div class="check-in col-md-6" name="start"></div>
							<div class="check-out col-md-6" name="end"></div>
						</div>
					</div>
				</div>
			</div>

		</section>

@endsection()