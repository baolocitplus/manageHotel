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
						<li><a href="../index.html">Home</a></li>
						<li class="current"><a href="#">Booking</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<section id="booking-section" class="step-2">
			<div class="inner-container container">
				<div class="col-md-4 l-sec">
					<div class="ravis-title-t-2">
						<div class="title"><span>Reservation Information</span></div>
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
							<a href="#" class="edit-box">Edit</a>
						</div>
						<div class="selected-room-box active">
							<div class="room-title">
								<div class="title">Room 2 :</div>
								<div class="value"></div>
							</div>
							<div class="adult-count">
								<div class="title">Adult :</div>
								<div class="value">3</div>
							</div>
							<div class="child-count">
								<div class="title">Children :</div>
								<div class="value">1</div>
							</div>
						</div>
					</div>

					<div class="field-row room-field" id="room-field-tmpl">
						<div class="title">Room {{id}}:</div>
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
							<div class="input-daterange">
								<div class="field-row">
									<input placeholder="2016-09-14" class="datepicker-fields check-in" type="text"
										   name="start"/>
									<!-- Date Picker field ( Do Not remove the "datepicker-fields" class ) -->
									<i class="fa fa-calendar"></i><!-- Date Picker Icon -->
								</div>
								<div class="field-row">
									<input placeholder="2016-09-20" class="datepicker-fields check-out" type="text"
										   name="end"/>
									<i class="fa fa-calendar"></i>
								</div>
							</div>
						</div>
						<div class="field-row">
							<select name="rooms" class="room-count">
								<option value="">Rooms</option>
								<option value="1">1 Room</option>
								<option value="2" selected>2 Rooms</option>
								<option value="3">3 Rooms</option>
								<option value="4">4 Rooms</option>
								<option value="5">5 Rooms</option>
							</select>
						</div>
						<div class="room-field-container">
							<div class="field-row room-field">
								<div class="title">Room 1:</div>
								<select name="adult[]" class="adult-field">
									<option value="1">1 Adult</option>
									<option value="2" selected>2 Adults</option>
									<option value="3">3 Adults</option>
									<option value="4">4 Adults</option>
									<option value="5">5 Adults</option>
								</select>
								<select name="child[]">
									<option value="0" selected>No Child</option>
									<option value="1">1 Children</option>
									<option value="2">2 Children</option>
									<option value="3">3 Children</option>
									<option value="4">4 Children</option>
									<option value="5">5 Children</option>
								</select>
							</div>
							<div class="field-row room-field">
								<div class="title">Room 2:</div>
								<select name="adult[]" class="adult-field">
									<option value="1">1 Adult</option>
									<option value="2">2 Adults</option>
									<option value="3" selected>3 Adults</option>
									<option value="4">4 Adults</option>
									<option value="5">5 Adults</option>
								</select>
								<select name="child[]">
									<option value="0">No Child</option>
									<option value="1" selected>1 Children</option>
									<option value="2">2 Children</option>
									<option value="3">3 Children</option>
									<option value="4">4 Children</option>
									<option value="5">5 Children</option>
								</select>
							</div>
						</div>
						<div class="field-row btn-container">
							<input type="submit" value="Book Now">
						</div>
					</form>
				</div>
				<div class="col-md-8 r-sec">
					<div class="inner-box">
						<div class="steps">
							<ul class="list-inline">
								<li>Choose Date</li>
								<li class="active">Choose Room</li>
								<li>Make a Reservation</li>
								<li>Confirmation</li>
							</ul>
						</div>

						<div id="booking-room-container">
							<div class="room-box">
								<div class="col-md-5 room-img" data-bg-img="{{asset('assets/img/gallery/1.jpg')}}">
									<div class="select-room-box">
										<a href="#">Select This Room</a>
									</div>
								</div>
								<div class="r-sec col-md-7">
									<div class="title-box">
										<div class="title">Single Room</div>
										<div class="price">
											<div class="title">Starting from :</div>
											<div class="value">$320</div>
										</div>
										<a href="#price-break-down-1" class="price-breakdown"><i class="fa fa-caret-right"></i>Price Breakdown</a>
										<div id="price-break-down-1" class="price-breakdown-popup mfp-hide">
											<table>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 7 Nights (Weekday)</div>
													</td>
													<td class="price">$630.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 2 Nights (Weekend)</div>
													</td>
													<td class="price">$180.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Total</div>
														<div class="duration">vat is not included yet</div>
													</td>
													<td class="price">$810.00</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="amenities">
										<ul class="list-inline clearfix">
											<li class="col-md-6">
												<div class="title">Breakfast :</div>
												<div class="value">Included</div>
											</li>
											<li class="col-md-6">
												<div class="title">Room Size :</div>
												<div class="value">60 sqm</div>
											</li>
											<li class="col-md-6">
												<div class="title">Max People :</div>
												<div class="value">3</div>
											</li>
											<li class="col-md-6">
												<div class="title">View :</div>
												<div class="value">Sea</div>
											</li>
											<li class="col-md-12">
												<div class="title">Facilities :</div>
												<div class="value">Free Wifi, Free Mini Bar, Room Security</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-box">
								<div class="col-md-5 room-img" data-bg-img="{{asset('assets/img/gallery/2.jpg')}}">
									<div class="select-room-box">
										<a href="#">Select This Room</a>
									</div>
								</div>
								<div class="r-sec col-md-7">
									<div class="title-box">
										<div class="title">Double Room</div>
										<div class="price">
											<div class="title">Starting from :</div>
											<div class="value">$350</div>
										</div>
										<a href="#price-break-down-2" class="price-breakdown"><i class="fa fa-caret-right"></i>Price Breakdown</a>
										<div id="price-break-down-2" class="price-breakdown-popup mfp-hide">
											<table>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 7 Nights (Weekday)</div>
													</td>
													<td class="price">$630.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 2 Nights (Weekend)</div>
													</td>
													<td class="price">$180.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Total</div>
														<div class="duration">vat is not included yet</div>
													</td>
													<td class="price">$810.00</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="amenities">
										<ul class="list-inline clearfix">
											<li class="col-md-6">
												<div class="title">Breakfast :</div>
												<div class="value">Included</div>
											</li>
											<li class="col-md-6">
												<div class="title">Room Size :</div>
												<div class="value">60 sqm</div>
											</li>
											<li class="col-md-6">
												<div class="title">Max People :</div>
												<div class="value">3</div>
											</li>
											<li class="col-md-6">
												<div class="title">View :</div>
												<div class="value">Sea</div>
											</li>
											<li class="col-md-12">
												<div class="title">Facilities :</div>
												<div class="value">Free Wifi, Free Mini Bar, Room Security</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-box">
								<div class="col-md-5 room-img" data-bg-img="{{asset('assets/img/gallery/3.jpg')}}">
									<div class="select-room-box">
										<a href="#">Select This Room</a>
									</div>
								</div>
								<div class="r-sec col-md-7">
									<div class="title-box">
										<div class="title">One-bedroom Suite</div>
										<div class="price">
											<div class="title">Starting from :</div>
											<div class="value">$450</div>
										</div>
										<a href="#price-break-down-3" class="price-breakdown"><i class="fa fa-caret-right"></i>Price Breakdown</a>
										<div id="price-break-down-3" class="price-breakdown-popup mfp-hide">
											<table>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 7 Nights (Weekday)</div>
													</td>
													<td class="price">$630.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 2 Nights (Weekend)</div>
													</td>
													<td class="price">$180.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Total</div>
														<div class="duration">vat is not included yet</div>
													</td>
													<td class="price">$810.00</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="amenities">
										<ul class="list-inline clearfix">
											<li class="col-md-6">
												<div class="title">Breakfast :</div>
												<div class="value">Included</div>
											</li>
											<li class="col-md-6">
												<div class="title">Room Size :</div>
												<div class="value">60 sqm</div>
											</li>
											<li class="col-md-6">
												<div class="title">Max People :</div>
												<div class="value">3</div>
											</li>
											<li class="col-md-6">
												<div class="title">View :</div>
												<div class="value">Sea</div>
											</li>
											<li class="col-md-12">
												<div class="title">Facilities :</div>
												<div class="value">Free Wifi, Free Mini Bar, Room Security</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-box">
								<div class="col-md-5 room-img" data-bg-img="{{asset('assets/img/gallery/4.jpg')}}">
									<div class="select-room-box">
										<a href="#">Select This Room</a>
									</div>
								</div>
								<div class="r-sec col-md-7">
									<div class="title-box">
										<div class="title">Two-bedroom Suite</div>
										<div class="price">
											<div class="title">Starting from :</div>
											<div class="value">$480</div>
										</div>
										<a href="#price-break-down-4" class="price-breakdown"><i class="fa fa-caret-right"></i>Price Breakdown</a>
										<div id="price-break-down-4" class="price-breakdown-popup mfp-hide">
											<table>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 7 Nights (Weekday)</div>
													</td>
													<td class="price">$630.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 2 Nights (Weekend)</div>
													</td>
													<td class="price">$180.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Total</div>
														<div class="duration">vat is not included yet</div>
													</td>
													<td class="price">$810.00</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="amenities">
										<ul class="list-inline clearfix">
											<li class="col-md-6">
												<div class="title">Breakfast :</div>
												<div class="value">Included</div>
											</li>
											<li class="col-md-6">
												<div class="title">Room Size :</div>
												<div class="value">60 sqm</div>
											</li>
											<li class="col-md-6">
												<div class="title">Max People :</div>
												<div class="value">3</div>
											</li>
											<li class="col-md-6">
												<div class="title">View :</div>
												<div class="value">Sea</div>
											</li>
											<li class="col-md-12">
												<div class="title">Facilities :</div>
												<div class="value">Free Wifi, Free Mini Bar, Room Security</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-box">
								<div class="col-md-5 room-img" data-bg-img="{{asset('assets/img/gallery/5.jpg')}}">
									<div class="select-room-box">
										<a href="#">Select This Room</a>
									</div>
								</div>
								<div class="r-sec col-md-7">
									<div class="title-box">
										<div class="title">Royal Suite</div>
										<div class="price">
											<div class="title">Starting from :</div>
											<div class="value">$550</div>
										</div>
										<a href="#price-break-down-5" class="price-breakdown"><i class="fa fa-caret-right"></i>Price Breakdown</a>
										<div id="price-break-down-5" class="price-breakdown-popup mfp-hide">
											<table>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 7 Nights (Weekday)</div>
													</td>
													<td class="price">$630.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 2 Nights (Weekend)</div>
													</td>
													<td class="price">$180.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Total</div>
														<div class="duration">vat is not included yet</div>
													</td>
													<td class="price">$810.00</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="amenities">
										<ul class="list-inline clearfix">
											<li class="col-md-6">
												<div class="title">Breakfast :</div>
												<div class="value">Included</div>
											</li>
											<li class="col-md-6">
												<div class="title">Room Size :</div>
												<div class="value">60 sqm</div>
											</li>
											<li class="col-md-6">
												<div class="title">Max People :</div>
												<div class="value">3</div>
											</li>
											<li class="col-md-6">
												<div class="title">View :</div>
												<div class="value">Sea</div>
											</li>
											<li class="col-md-12">
												<div class="title">Facilities :</div>
												<div class="value">Free Wifi, Free Mini Bar, Room Security</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-box">
								<div class="col-md-5 room-img" data-bg-img="{{asset('assets/img/gallery/6.jpg')}}">
									<div class="select-room-box">
										<a href="#">Select This Room</a>
									</div>
								</div>
								<div class="r-sec col-md-7">
									<div class="title-box">
										<div class="title">King Suit</div>
										<div class="price">
											<div class="title">Starting from :</div>
											<div class="value">$660</div>
										</div>
										<a href="#price-break-down-6" class="price-breakdown"><i class="fa fa-caret-right"></i>Price Breakdown</a>
										<div id="price-break-down-6" class="price-breakdown-popup mfp-hide">
											<table>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 7 Nights (Weekday)</div>
													</td>
													<td class="price">$630.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Base Price</div>
														<div class="duration">x 2 Nights (Weekend)</div>
													</td>
													<td class="price">$180.00</td>
												</tr>
												<tr>
													<td>
														<div class="title">Total</div>
														<div class="duration">vat is not included yet</div>
													</td>
													<td class="price">$810.00</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="amenities">
										<ul class="list-inline clearfix">
											<li class="col-md-6">
												<div class="title">Breakfast :</div>
												<div class="value">Included</div>
											</li>
											<li class="col-md-6">
												<div class="title">Room Size :</div>
												<div class="value">60 sqm</div>
											</li>
											<li class="col-md-6">
												<div class="title">Max People :</div>
												<div class="value">3</div>
											</li>
											<li class="col-md-6">
												<div class="title">View :</div>
												<div class="value">Sea</div>
											</li>
											<li class="col-md-12">
												<div class="title">Facilities :</div>
												<div class="value">Free Wifi, Free Mini Bar, Room Security</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>

@endsection()