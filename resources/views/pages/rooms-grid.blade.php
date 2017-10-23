@extends('master')
@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="assets/img/breadcrumb.jpg">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Rooms - Grid View</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>
				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li class="current"><a href="#">Rooms - Grid View</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!--Room Section-->
		<section id="rooms-section">
			<div class="inner-container container">
				<div class="ravis-title-t-2">
					<div class="title"><span>Our Luxury Rooms</span></div>
				</div>
				<div class="desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum deleniti dolorem inventore ipsam
					laboriosam magnam qui quibusdam recusandae repudiandae tempora. A aperiam dignissimos dolorem ex
					fugiat
					harum neque, nesciunt officiis quaerat quo? Debitis earum eum itaque, modi perspiciatis tempore vel!
				</div>

				<div class="room-container clearfix">
					<div class="room-box col-xs-6 col-md-4 animated-box" data-animation="fadeInUp">
						<div class="inner-box" data-bg-img="assets/img/gallery/1.jpg">
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
						<div class="inner-box" data-bg-img="assets/img/gallery/2.jpg">
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
					<div class="room-box col-xs-6 col-md-4 animated-box" data-animation="fadeInUp" data-delay="600">
						<div class="inner-box" data-bg-img="assets/img/gallery/3.jpg">
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
					<div class="room-box col-xs-6 col-md-4 animated-box" data-animation="fadeInUp">
						<div class="inner-box" data-bg-img="assets/img/gallery/4.jpg">
							<a href="room-details.html" class="more-info"></a>
							<div class="caption">
								<div class="title">Two-bedroom Suite</div>
								<div class="price">
									<div class="title">Starting from :</div>
									<div class="value">$480</div>
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
						<div class="inner-box" data-bg-img="assets/img/gallery/5.jpg">
							<a href="room-details.html" class="more-info"></a>
							<div class="caption">
								<div class="title">Royal Suite</div>
								<div class="price">
									<div class="title">Starting from :</div>
									<div class="value">$550</div>
								</div>
								<div class="desc">
									<div class="inner-box">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, quia?
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="room-box col-xs-6 col-md-4 animated-box" data-animation="fadeInUp" data-delay="600">
						<div class="inner-box" data-bg-img="assets/img/gallery/6.jpg">
							<a href="room-details.html" class="more-info"></a>
							<div class="caption">
								<div class="title">King Suit</div>
								<div class="price">
									<div class="title">Starting from :</div>
									<div class="value">$660</div>
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
		<!--End of Room Section-->

@endsection()