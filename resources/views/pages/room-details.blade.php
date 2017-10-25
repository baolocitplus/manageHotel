@extends('master')
@section('content')

		<section id="room-top-section">
			<!-- Event Slider -->
			<section id="room-slider">
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/slider/room/1.jpg')}}"></div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/slider/room/2.jpg')}}"></div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/slider/room/3.jpg')}}"></div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/slider/room/4.jpg')}}"></div>
				</div>
			</section>
			<!-- End of Event Slider -->
			<div class="inner-container container">
				<div class="room-title-box">
					<h1 class="title">Deluxe Two-bedroom Suite</h1>
					<div class="price">
						<div class="title">Starting from :</div>
						<div class="value">$350</div>
					</div>
				</div>
			</div>
		</section>

		<section class="room-desc">
			<div class="inner-container container">
				<div class="l-sec col-md-8">
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
					<div class="icons-container">
						<ul class="list-inline">
							<li><i class="ravis-icon-hotel-tv"></i></li>
							<li><i class="ravis-icon-towel-on-hanger"></i></li>
							<li><i class="ravis-icon-swimming-pool-sign"></i></li>
							<li><i class="ravis-icon-surveillance-camera"></i></li>
							<li><i class="ravis-icon-hotel-left-luggage"></i></li>
							<li><i class="ravis-icon-hair-dryer"></i></li>
							<li><i class="ravis-icon-fast-food-burger-and-drink"></i></li>
						</ul>
					</div>
					<div class="description">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio error ex explicabo
							fugiat libero, maxime molestias nostrum odit, officia quia recusandae, soluta velit! Ab
							aspernatur cupiditate doloremque, in iusto optio ratione rerum soluta. Atque culpa ea eaque
							eligendi expedita necessitatibus repellat sed tempore veniam voluptatum! Assumenda cum eius
							exercitationem expedita facere iusto laudantium necessitatibus nisi odit officiis quam quod
							rem reprehenderit sint tenetur vitae, voluptatibus. Amet atque commodi consectetur
							consequatur dicta dolor doloremque enim eum expedita, harum illo illum iure iusto mollitia
							nam nisi nobis omnis perferendis possimus sequi veniam vitae voluptas. Accusantium animi
							consectetur delectus sunt totam veniam voluptate.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquam aliquid
							asperiores atque consequuntur illum ipsum, iusto laudantium molestias non optio quas quasi
							quo tempora, unde vitae voluptate voluptatum!
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nam quaerat rerum veritatis.
							Consequatur cupiditate earum explicabo id illum magni, minima quae quam voluptate? Adipisci
							alias deserunt error expedita facilis fuga ipsa libero magnam minus mollitia natus, nulla,
							numquam odio quae repellendus sapiente totam ut velit? Aut, consequuntur ducimus enim
							eveniet, ipsum maxime praesentium quia quos soluta velit vero vitae.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus itaque qui quisquam
							voluptatum? Aliquid aperiam blanditiis consequatur dolorum facilis maiores placeat, sint
							tempora tempore. Atque deserunt doloremque optio suscipit voluptatum!
						</p>
					</div>
				</div>
				<div class="r-sec col-md-4">

					<form id="room-booking-form" action="#"><!-- Do Not remove the classes -->
						<div class="input-daterange">
							<div class="field-row">
								<input placeholder="Check in" class="datepicker-fields check-in" type="text"
									   name="start"/>
								<!-- Date Picker field ( Do Not remove the "datepicker-fields" class ) -->
								<i class="fa fa-calendar"></i><!-- Date Picker Icon -->
							</div>
							<div class="field-row">
								<input placeholder="Check out" class="datepicker-fields check-out" type="text"
									   name="end"/>
								<i class="fa fa-calendar"></i>
							</div>
						</div>
						<div class="field-row">
							<!-- Select boxes ( you can change the items and its value based on your project's needs ) -->
							<select name="room-type">
								<option value="">Adult</option>
								<!-- Select box items ( you can change the items and its value based on your project's needs ) -->
								<option value="2">1</option>
								<option value="3">2</option>
								<option value="4">3</option>
								<option value="5">4</option>
								<option value="6">5</option>
							</select>
							<!-- End of Select boxes -->
						</div>
						<div class="field-row">
							<select name="guest">
								<option value="">Child</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="field-row">
							<input type="submit" value="Book Now">
						</div>
					</form>

					<div class="room-rating">
						<div class="ravis-title-t-2">
							<div class="title"><span>Room Rating</span></div>
							<div class="sub-title">Our guests rate this room as below</div>
						</div>

						<div class="rate-box-container">
							<div class="rate-box">
								<div class="title">Overall</div>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0"
										 aria-valuemax="100" style="width: 88%"><span>88%</span></div>
								</div>
							</div>
							<div class="rate-box">
								<div class="title">Cleanliness</div>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
										 aria-valuemax="100" style="width: 95%"><span>95%</span></div>
								</div>
							</div>
							<div class="rate-box">
								<div class="title">Value</div>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0"
										 aria-valuemax="100" style="width: 78%"><span>78%</span></div>
								</div>
							</div>
							<div class="rate-box">
								<div class="title">View</div>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
										 aria-valuemax="100" style="width: 60%"><span>60%</span></div>
								</div>
							</div>
							<div class="rate-box">
								<div class="title">Services</div>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="0"
										 aria-valuemax="100" style="width: 97%"><span>97%</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!--Other Rooms Section-->
		<section id="other-rooms">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Other Rooms</div>
						<div class="sub-title">List of other rooms that you might be interested</div>
					</div>
				</div>
				<div class="room-container clearfix">
					<div class="room-box col-xs-6 col-md-4 animated-box" data-animation="fadeInUp">
						<div class="inner-box" data-bg-img="{{asset('assets/img/gallery/1.jpg')}}">
							<a href="room-details.html" class="more-info"></a>
							<div class="caption">
								<div class="title">Single Room</div>
								<div class="price">
									<div class="title">Starting from :</div>
									<div class="value">$320</div>
								</div>
								<div class="desc">
									<div class="inner-box">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, quia?
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="room-box col-xs-6 col-md-4 animated-box" data-animation="fadeInUp" data-delay="300">
						<div class="inner-box" data-bg-img="{{asset('assets/img/gallery/2.jpg')}}">
							<a href="room-details.html" class="more-info"></a>
							<div class="caption">
								<div class="title">Double Room</div>
								<div class="price">
									<div class="title">Starting from :</div>
									<div class="value">$350</div>
								</div>
								<div class="desc">
									<div class="inner-box">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, quia?
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="room-box col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-4 animated-box" data-animation="fadeInUp" data-delay="600">
						<div class="inner-box" data-bg-img="{{asset('assets/img/gallery/3.jpg')}}">
							<a href="room-details.html" class="more-info"></a>
							<div class="caption">
								<div class="title">One-bedroom Suite</div>
								<div class="price">
									<div class="title">Starting from :</div>
									<div class="value">$450</div>
								</div>
								<div class="desc">
									<div class="inner-box">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, quia?
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>


<<style>
		.inner-container {
			position: relative;
		}
		.room-title-box {
		    position: absolute;
			left: 15px;
			bottom: 50px;
			padding: 30px;
			margin: 0;
			max-width: calc(100% - 30px);
			display: inline-block;
			color: #FFFFFF;
			border-left: 2px solid #d2bd7f;
			white-space: nowrap;
			background: rgba(0, 0, 0, 0.4);
		}
		h1.title {
			margin: 0;
			color: #FFFFFF;
			font: 30px/40px "Playfair Display", Arial, Helvetica, sans-serif;
			white-space: nowrap;
		}
		.price {
			color: #d2bd7f;
			margin-top: 20px;
			font: 1.6em/30px "Great Vibes", Arial, Helvetica, sans-serif;
			-webkit-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;
		}
		.price > div {
			display: inline-block;
		}
		.price .value {
			color: #FFFFFF;
		}

		 .room-desc .l-sec {
			padding-left: 0;
			padding-right: 50px;
		}

		.room-desc .l-sec .amenities {
   			 margin: 50px 0;
		}
		.room-desc .l-sec .amenities ul {
    margin: 0;
}

.room-desc .l-sec .amenities ul li {
    padding: 0;
}
.room-desc .l-sec .amenities ul li .title {
    width: 90px;
}
 .room-desc .l-sec .amenities ul li .value {
    color: #d2bd7f;
}
.room-desc .l-sec .amenities ul li > div {
    display: inline-block;
    line-height: 30px;
}
</style>
		<!--End of Other Rooms Section-->
@endsection()