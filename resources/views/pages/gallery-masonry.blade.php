@extends('master')
@section('content')
		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="assets/img/breadcrumb.jpg">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Gallery - Masonry</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>

				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li class="current"><a href="#">Gallery - Masonry</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!-- Gallery -->
		<section id="gallery">
			<div class="inner-container container">
				<!-- Gallery Container -->
				<div class="gallery-container">
					<div class="sort-section">
						<div class="sort-section-container">
							<div class="sort-handle">Filters</div>
							<ul class="list-inline">
								<li><a href="#" data-filter="*" class="active">All</a></li>
								<li><a href="#" data-filter=".restaurant">Restaurant</a></li>
								<li><a href="#" data-filter=".bars">Bars</a></li>
								<li><a href="#" data-filter=".pool">Pool</a></li>
								<li><a href="#" data-filter=".rooms">Rooms</a></li>
								<li><a href="#" data-filter=".lobby">Lobby</a></li>
							</ul>
						</div>
					</div>
					<ul class="image-main-box clearfix">

						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="assets/img/gallery/2.jpg" alt="11"/>
								<a href="assets/img/gallery/2.jpg" class="more-details" data-title="Luxury Furniture">Enlarge</a>
								<figcaption>
									<h4>Luxury Furniture</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-8 lobby">
							<figure>
								<img src="assets/img/gallery/11.jpg" alt="11"/>
								<a href="assets/img/gallery/11.jpg" class="more-details"
								   data-title="Great View">Enlarge</a>
								<figcaption>
									<h4>Great View</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 restaurant">
							<figure>
								<img src="assets/img/gallery/4.jpg" alt="11"/>
								<a href="assets/img/gallery/4.jpg" class="more-details"
								   data-title="Luxury Feelings">Enlarge</a>
								<figcaption>
									<h4>Luxury Feelings</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="assets/img/gallery/5.jpg" alt="11"/>
								<a href="assets/img/gallery/5.jpg" class="more-details"
								   data-title="Cozy Spaces">Enlarge</a>
								<figcaption>
									<h4>Cozy Spaces</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 rooms">
							<figure>
								<img src="assets/img/gallery/6.jpg" alt="11"/>
								<a href="assets/img/gallery/6.jpg" class="more-details" data-title="Comfortable Rooms">Enlarge</a>
								<figcaption>
									<h4>Comfortable Rooms</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="assets/img/gallery/7.jpg" alt="11"/>
								<a href="assets/img/gallery/7.jpg" class="more-details" data-title="Relaxation Spaces">Enlarge</a>
								<figcaption>
									<h4>Relaxation Spaces</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-8 bars">
							<figure>
								<img src="assets/img/gallery/10.jpg" alt="11"/>
								<a href="assets/img/gallery/10.jpg" class="more-details" data-title="Neat &amp; Clean Places">Enlarge</a>
								<figcaption>
									<h4>Neat &amp; Clean Places</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="assets/img/gallery/8.jpg" alt="11"/>
								<a href="assets/img/gallery/8.jpg" class="more-details"
								   data-title="Indoor Cinema Theatre">Enlarge</a>
								<figcaption>
									<h4>Indoor Cinema Theatre</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="assets/img/gallery/9.jpg" alt="11"/>
								<a href="assets/img/gallery/9.jpg" class="more-details"
								   data-title="Out Pool">Enlarge</a>
								<figcaption>
									<h4>Out Pool</h4>
								</figcaption>
							</figure>
						</li>
					</ul>

					<!-- Pagination -->
					<div class="pagination-box">
						<ul class="list-inline">
							<li class="active"><a href="#"><span>1</span></a></li>
							<li><a href="#"><span>2</span></a></li>
							<li><a href="#"><span>3</span></a></li>
							<li><a href="#"><span>4</span></a></li>
							<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
						</ul>
					</div>
					<!-- End of Pagination -->
				</div>
			</div>
		</section>
		<!-- End of Gallery -->

@endsection()