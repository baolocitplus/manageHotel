@extends('master')
@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="{{asset('assets/img/breadcrumb.jpg')}}">
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

		<section id="booking-section" class="step-3">
			<div class="inner-container container">
				<div class="col-md-4 l-sec">
					<div class="ravis-title-t-2">
						<div class="title"><span>Reservation Information</span></div>
					</div>
					<div class="check-in-out-container">
						<div class="check-in-out-box">
							<div class="title">Check In :</div>
							<div class="value">27-07-2016</div>
						</div>
						<div class="check-in-out-box">
							<div class="title">Check Out :</div>
							<div class="value">30-07-2016</div>
						</div>
					</div>

					<div class="selected-room-container">
						<div class="selected-room-box">
							<div class="room-title">
								<div class="title">Room 1 :</div>
								<div class="value">Deluxe Suite</div>
							</div>
							<div class="adult-count">
								<div class="title">Adult :</div>
								<div class="value">2</div>
							</div>
							<div class="child-count">
								<div class="title">Children :</div>
								<div class="value">0</div>
							</div>
							<div class="price">$280.00</div>
						</div>
						<div class="selected-room-box">
							<div class="room-title">
								<div class="title">Room 2 :</div>
								<div class="value">King Suite</div>
							</div>
							<div class="adult-count">
								<div class="title">Adult :</div>
								<div class="value">3</div>
							</div>
							<div class="child-count">
								<div class="title">Children :</div>
								<div class="value">1</div>
							</div>
							<div class="price">$340.00</div>
						</div>
					</div>

					<div class="price-details-container">
						<div class="price-detail-box">
							<div class="title">Rooms &amp; Services :</div>
							<div class="value">$1,217.00</div>
						</div>
						<div class="price-detail-box">
							<div class="title">Vat 8% :</div>
							<div class="value">$117.00</div>
						</div>
						<div class="price-detail-box total">
							<div class="title">Total Price :</div>
							<div class="value">$1,334.00</div>
						</div>
						<div class="payment-method">
							<div class="ravis-radio">
								<label for="full-payment">
									<input type="radio" name="payment-method" value="1" id="full-payment">
									<span></span>
									Full Payment
								</label>
							</div>
							<div class="ravis-radio">
								<label for="deposit">
									<input type="radio" name="payment-method" value="2" id="deposit" checked>
									<span></span>
									20% Deposit
								</label>
							</div>
						</div>
						<div class="deposit-price">
							<div class="title-box">
								<div class="title">20% Deposit</div>
								<div class="sub-title">Pay the rest on arrival</div>
							</div>
							<div class="value">$933.80</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 r-sec">
					<div class="inner-box">
						<div class="steps">
							<ul class="list-inline">
								<li>Choose Date</li>
								<li>Choose Room</li>
								<li class="active">Make a Reservation</li>
								<li>Confirmation</li>
							</ul>
						</div>

						<div id="booking-guest-info-form">
							<form action="#">
								<div class="field-row clearfix">
									<div class="col-md-6">
										<input type="text" placeholder="First Name :" required>
									</div>
									<div class="col-md-6">
										<input type="text" placeholder="Last Name :" required>
									</div>
								</div>
								<div class="field-row clearfix">
									<div class="col-md-6">
										<input type="text" placeholder="Phone :" required>
									</div>
									<div class="col-md-6">
										<input type="email" placeholder="Email :" required>
									</div>
								</div>
								<div class="field-row clearfix">
									<input type="text" placeholder="Address :">
								</div>
								<div class="field-row clearfix">
									<textarea placeholder="Special Requirements : "></textarea>
								</div>
								<div class="field-row clearfix">
									<div class="ravis-checkbox">
										<label for="terms-condition">
											<input type="checkbox" name="terms" value="1" id="terms-condition" required>
											<span></span>
											I have read and accept the <a href="#">terms and conditions</a>.
										</label>
									</div>
								</div>
								<div class="field-row btn-container clearfix">
									<button class="by-email" type="submit">Book By Email</button>
									<button class="by-paypal">Book and Pay By PayPal</button>
								</div>
							</form>
						</div>


					</div>
				</div>
			</div>

		</section>
@endsection()