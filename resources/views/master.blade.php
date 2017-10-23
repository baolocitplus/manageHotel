
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
	<link rel="stylesheet" type="text/css" href="/assets/css/hotel.css"><!-- Attach the main stylesheet file -->
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="home-page-1">
	<div class="main-wrapper">
		<!-- Header Section -->
		<header id="main-header">
			<div class="inner-container container">
				<div class="l-sec col-xs-8 col-sm-6 col-md-3">
					<a href="#" id="t-logo">
						<span class="title">LokNet</span>
						<span class="desc">Luxury Hotel</span>
					</a>
				</div>
				<div class="r-sec col-xs-4 col-sm-6 col-md-9">
					<nav id="main-menu">
						<ul class="list-inline">
							<li class="active"><a href="#">Trang Chủ</a>
							</li>
							<li><a href="#">Giới thiệu</a>
								<ul>
									<li><a href="pages/about.html">Về khách sạn</a></li>
									<li><a href="pages/services.html">Dịch vụ</a></li>
								</ul>
							</li>
							<li><a href="#">Phòng</a>
								<ul>
									<li><a href="pages/rooms-grid.html">Rooms - Grid View</a></li>
									<li><a href="pages/rooms-list.html">Rooms - List View</a></li>
									<li><a href="pages/room-details.html">Room Details</a></li>
								</ul>
							</li>
							<li><a href="#">Sự kiện</a>
								<ul>
									<li><a href="pages/events.html">Event Archive</a></li>
									<li><a href="pages/event-details.html">Event Details</a></li>
								</ul>
							</li>
							<li><a href="#">Bộ sưu tập</a>
								<ul>
									<li><a href="pages/gallery-grid.html">Gallery - Grid View</a></li>
									<li><a href="pages/gallery-masonry.html">Gallery - Masonry View</a></li>
									<li><a href="pages/gallery-row.html">Gallery - List View</a></li>
									<li><a href="pages/gallery-slide-show.html">Gallery - Slide Show</a></li>
								</ul>
							</li>
							<li><a href="#">Đặt phòng</a>
								<ul>
									<li><a href="pages/booking.html">Choose Date</a></li>
									<li><a href="pages/booking-1.html">Choose Room</a></li>
									<li><a href="pages/booking-2.html">Make a Reservation</a></li>
									<li><a href="pages/booking-3.html">Confirmation</a></li>
								</ul>
							</li>
							<li><a href="#">Tin tức</a>
								<ul>
									<li><a href="pages/blog.html">Blog - Right Sidebar</a></li>
									<li><a href="pages/blog-left-sidebar.html">Blog - Left Sidebar</a></li>
									<li><a href="pages/blog-masonry.html">Blog - Masonry View</a></li>
									<li><a href="pages/blog-details.html">Post Details</a></li>
								</ul>
							</li>
							<!-- <li><a href="#">Pages</a>
								<ul>
									<li><a href="pages/guest-book.html">Guest Book</a></li>
									<li><a href="pages/restaurant.html">Restaurant</a></li>
									<li><a href="pages/video-tour.html">Video Tour</a></li>
									<li><a href="pages/staff.html">Our Staff</a></li>
									<li><a href="pages/packages.html">Packages</a></li>
									<li><a href="pages/404.html">404</a></li>
									<li><a href="pages/coming-soon.html">Coming Soon</a></li>
								</ul>
							</li> -->
							<li><a href="pages/contact.html">Liên hệ</a></li>
						</ul>
					</nav>
					<div id="main-menu-handle" class="ravis-btn btn-type-2">
						<i class="fa fa-bars"></i><i class="fa fa-close"></i>
					</div><!-- Mobile Menu handle -->
					<a href="pages/booking.html" id="header-book-bow" class="ravis-btn btn-type-2">
						<span>Book Bow</span>
						 <i class="fa fa-calendar" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div id="mobile-menu-container"></div>
		</header>
		<!-- End of Header Section -->

		@yield('content')

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
											<img src="/assets/img/gallery/5.jpg" alt="Room Image">
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
											<img src="assets/img/gallery/6.jpg" alt="Room Image">
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
	<script type="text/javascript" src="/assets/js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="/assets/js/helper.js"></script>
	<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="/assets/js/select2.min.js"></script>
	<script type="text/javascript" src="/assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="/assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="/assets/js/template.js"></script>
</body>
</html>