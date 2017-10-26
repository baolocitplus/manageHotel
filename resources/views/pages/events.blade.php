@extends('master')
@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="{{asset('assets/img/breadcrumb-events.jpg')}}">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Events</div>
						<div class="sub-title">We will be hosted of some events</div>
					</div>
				</div>
				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li class="current"><a href="#">Events</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!-- Upcoming Events -->
		<section id="upcoming-events">
			<div class="inner-container container">

				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Upcoming Events</div>
						<div class="sub-title">We proudly host some international events</div>
					</div>
				</div>

				<div class="event-container">
					<div class="sort-section">
						<div class="sort-section-container">
							<div class="sort-handle">Filters</div>
							<ul class="list-inline">
								<li><a href="#" data-filter="*" class="active">All</a></li>
								<li><a href="#" data-filter=".fashion">Fashion</a></li>
								<li><a href="#" data-filter=".music-concert">Music Concert</a></li>
								<li><a href="#" data-filter=".fair">Fair</a></li>
								<li><a href="#" data-filter=".conference">Conference</a></li>
							</ul>
						</div>
					</div>
					<ul class="event-main-box clearfix">
						<li class="item col-xs-6 col-md-4 fair">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/1.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Jewelery Fair</span>
											<span class="sub-title">By : Luxury Jewelery Institute</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-8 fashion">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/4.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Fashion Show</span>
											<span class="sub-title">Designer : John Doe</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dicta, dolorem laborum quam qui temporibus?
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 conference">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/2.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Photography Conferences</span>
											<span class="sub-title">Presenter : Jack Rush</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-8 Conferences">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/5.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Management Conferences</span>
											<span class="sub-title">By : Management Academy</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dicta, dolorem laborum quam qui temporibus?
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 music-concert">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/3.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Music Concert</span>
											<span class="sub-title">Singer : Elton John</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>

			</div>
		</section>
		<!-- End of Upcoming Events -->

		<!-- Past Events -->
		<section id="past-events">
			<div class="inner-container container">

				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Past Events</div>
						<div class="sub-title">Some of our past events is listed here</div>
					</div>
				</div>

				<div class="event-container">
					<ul class="event-main-box clearfix">
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/8.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Car Fair</span>
											<span class="sub-title">By : Ferrari</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/7.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Annual Cooking Fair</span>
											<span class="sub-title">Presenter : Jenni Spark</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/6.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Interior Design Fair</span>
											<span class="sub-title">By : Interior Design Company</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/10.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Jewelery Fair</span>
											<span class="sub-title">By : Luxury Jewelery Institute</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/11.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Photography Conferences</span>
											<span class="sub-title">Presenter : Jack Rush</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/12.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Fashion Festival</span>
											<span class="sub-title">By : Fashion Academy</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/9.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Food Festival</span>
											<span class="sub-title">By : Cooking Company</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/13.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Flower Festival</span>
											<span class="sub-title">Presenter : Jack Black</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/14.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Music Concert</span>
											<span class="sub-title">Singer : Elton John</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>

				<!-- Pagination -->
				<div class="pagination-box">
					<ul class="list-inline">
						<li class="active"><a href="#"><span>1</span></a></li>
						<li><a href="#"><span>2</span></a></li>
						<li><a href="#"><span>3</span></a></li>
					</ul>
				</div>
				<!-- End of Pagination -->

			</div>
		</section>
		<!-- End of Past Events -->

@endsection()