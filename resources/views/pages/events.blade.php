
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Colosseum Hotel - Responsive Hotel Template</title>
	<meta name="description" content="Colosseum Hotel is a responsive Hotel and Resort HTML template.">
	<meta name="keywords" content="Responsive,HTML5,CSS3,XML,JavaScript">
	<meta name="author" content="Joseph a, ravistheme@gmail.com">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic%7cPlayfair+Display:400,700%7cGreat+Vibes' rel='stylesheet' type='text/css'><!-- Attach Google fonts -->
	<link rel="stylesheet" type="text/css" href="../assets/css/styles-light.css"><!-- Attach the main stylesheet file -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="main-wrapper">
		<!-- Header Section -->
		<header id="main-header">
			<div class="inner-container container">
				<div class="l-sec col-xs-8 col-sm-6 col-md-3">
					<a href="#" id="t-logo">
						<span class="title">Colosseum</span>
						<span class="desc">Luxury Hotel</span>
					</a>
				</div>
				<div class="r-sec col-xs-4 col-sm-6 col-md-9">
					<nav id="main-menu">
						<ul class="list-inline">
							<li><a href="#">Home</a>
								<ul>
									<li><a href="../index.html">Home Page - Version 1</a></li>
									<li><a href="../index-1.html">Home Page - Version 2</a></li>
								</ul>
							</li>
							<li><a href="#">About</a>
								<ul>
									<li><a href="about.html">About Hotel</a></li>
									<li><a href="services.html">Our Services</a></li>
								</ul>
							</li>
							<li><a href="#">Rooms</a>
								<ul>
									<li><a href="rooms-grid.html">Rooms - Grid View</a></li>
									<li><a href="rooms-list.html">Rooms - List View</a></li>
									<li><a href="room-details.html">Room Details</a></li>
								</ul>
							</li>
							<li class="active"><a href="#">Events</a>
								<ul>
									<li class="active"><a href="events.html">Event Archive</a></li>
									<li><a href="event-details.html">Event Details</a></li>
								</ul>
							</li>
							<li><a href="#">Gallery</a>
								<ul>
									<li><a href="gallery-grid.html">Gallery - Grid View</a></li>
									<li><a href="gallery-masonry.html">Gallery - Masonry View</a></li>
									<li><a href="gallery-row.html">Gallery - List View</a></li>
									<li><a href="gallery-slide-show.html">Gallery - Slide Show</a></li>
								</ul>
							</li>
							<li><a href="#">Booking</a>
								<ul>
									<li><a href="booking.html">Choose Date</a></li>
									<li><a href="booking-1.html">Choose Room</a></li>
									<li><a href="booking-2.html">Make a Reservation</a></li>
									<li><a href="booking-3.html">Confirmation</a></li>
								</ul>
							</li>
							<li><a href="#">Blog</a>
								<ul>
									<li><a href="blog.html">Blog - Right Sidebar</a></li>
									<li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
									<li><a href="blog-masonry.html">Blog - Masonry View</a></li>
									<li><a href="blog-details.html">Post Details</a></li>
								</ul>
							</li>
							<li><a href="#">Pages</a>
								<ul>
									<li><a href="guest-book.html">Guest Book</a></li>
									<li><a href="restaurant.html">Restaurant</a></li>
									<li><a href="video-tour.html">Video Tour</a></li>
									<li><a href="staff.html">Our Staff</a></li>
									<li><a href="packages.html">Packages</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
					<div id="main-menu-handle" class="ravis-btn btn-type-2"><i class="fa fa-bars"></i><i class="fa fa-close"></i></div><!-- Mobile Menu handle -->
					<a href="booking.html" id="header-book-bow" class="ravis-btn btn-type-2"><span>Book Bow</span> <i class="fa fa-calendar"></i></a>
				</div>
			</div>
			<div id="mobile-menu-container"></div>
		</header>
		<!-- End of Header Section -->

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="../assets/img/breadcrumb-events.jpg">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Events</div>
						<div class="sub-title">We will be hosted of some events</div>
					</div>
				</div>
				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="../index.html">Home</a></li>
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
									<img src="../assets/img/events/1.jpg" alt="11"/>
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
									<img src="../assets/img/events/4.jpg" alt="11"/>
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
									<img src="../assets/img/events/2.jpg" alt="11"/>
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
									<img src="../assets/img/events/5.jpg" alt="11"/>
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
									<img src="../assets/img/events/3.jpg" alt="11"/>
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
									<img src="../assets/img/events/8.jpg" alt="11"/>
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
									<img src="../assets/img/events/7.jpg" alt="11"/>
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
									<img src="../assets/img/events/6.jpg" alt="11"/>
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
									<img src="../assets/img/events/10.jpg" alt="11"/>
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
									<img src="../assets/img/events/11.jpg" alt="11"/>
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
									<img src="../assets/img/events/12.jpg" alt="11"/>
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
									<img src="../assets/img/events/9.jpg" alt="11"/>
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
									<img src="../assets/img/events/13.jpg" alt="11"/>
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
									<img src="../assets/img/events/14.jpg" alt="11"/>
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


		<!--Footer Section-->
		<footer id="main-footer">
			<div class="inner-container container">
				<div class="t-sec clearfix">
					<div class="widget-box col-sm-6 col-md-3">
						<a href="#" id="f-logo">
							<span class="title">Colosseum</span>
							<span class="desc">Luxury Hotel</span>
						</a>
						<div class="widget-content text-widget">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at aut commodi
							consequatur ducimus facilis, ipsam necessitatibus nihil odio quam reiciendis, sequi sint
							voluptate. Dolorum fugit pariatur quaerat quisquam sint soluta suscipit vitae, voluptate
							voluptates!
						</div>
					</div>
					<div class="widget-box col-sm-6 col-md-3">
						<h4 class="title">Newsletter</h4>
						<div class="widget-content newsletter">
							<div class="desc">
								Some description of how your newsletter works will be located in this section.
							</div>
							<form class="news-letter-form">
								<input type="text" class="email" placeholder="Email">
								<button type="submit" class="ravis-btn btn-type-2">Sign up Now</button>
							</form>
						</div>
					</div>
					<div class="widget-box col-sm-6 col-md-3">
						<h4 class="title">Latest Posts</h4>
						<div class="widget-content latest-posts">
							<ul>
								<li class="clearfix">
									<div class="img-container col-xs-4">
										<a href="pages/blog-details.html">
											<img src="../assets/img/gallery/5.jpg" alt="Room Image">
										</a>
									</div>
									<div class="desc-box col-xs-8">
										<a href="pages/blog-details.html" class="title">Toronto High End Market</a>
										<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Atque
											dicta exercitationem hic laudantium nemo quis quo reprehenderit repudiandae
											ut
											vel?
										</div>
										<a href="pages/blog-details.html" class="read-more">Read More</a>

									</div>
								</li>
								<li class="clearfix">
									<div class="img-container col-xs-4">
										<a href="pages/blog-details.html">
											<img src="../assets/img/gallery/6.jpg" alt="Room Image">
										</a>
									</div>
									<div class="desc-box col-xs-8">
										<a href="pages/blog-details.html" class="title">Drop Everything Now</a>
										<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Accusamus consequuntur corporis dolorem esse fugiat in magnam nostrum qui
											rerum,
											sapiente.
										</div>
										<a href="pages/blog-details.html" class="read-more">Read More</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="widget-box col-sm-6 col-md-3">
						<h4 class="title">Contact Us</h4>
						<div class="widget-content contact">
							<ul class="contact-info">
								<li>
									<i class="fa fa-home"></i>
									1011 Kevin James Street San Diego, CA 92101
								</li>
								<li>
									<i class="fa fa-phone"></i>
									(012) 345-6789
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									info@website.com
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="b-sec clearfix">
					<div class="copy-right">
						 <i class="fa fa-heart"></i> by <a href="https://www.facebook.com/andanhit"target="_blank">Bảo Lộc</a> © 2017.
					</div>
					<ul class="social-icons list-inline">
						<li><a href="https://www.facebook.com/andanhit"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</footer>
		<!--End of Footer Section-->

	</div>

	<!-- JS Include Section -->
	<script type="text/javascript" src="../assets/js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="../assets/js/helper.js"></script>
	<script type="text/javascript" src="../assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="../assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="../assets/js/template.js"></script>
</body>
</html>