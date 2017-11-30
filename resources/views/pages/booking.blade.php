
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
	<link rel="stylesheet" type="text/css" href="../assets/css/hotel.css"><!-- Attach the main stylesheet file -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="booking">
<div class="main-wrapper">
	<!-- Header Section -->
	<header id="main-header">
		<div class="inner-container container">
			<div class="l-sec col-xs-8 col-sm-6 col-md-3">
				<a href="{{route('home')}}" id="t-logo">
					<span class="title">LokNet</span>
					<span class="desc">Luxury Hotel</span>
				</a>
			</div>
			<div class="r-sec col-xs-4 col-sm-6 col-md-9">
				<nav id="main-menu">
					<ul class="list-inline">
						<li class="active"><a href="{{route('home')}}">Trang Chủ</a>
						</li>
						<li><a href{{route('about')}}>Giới thiệu</a>
							<ul>
								<li><a href="{{route('about')}}">Về khách sạn</a></li>
								<li><a href="{{route('service')}}">Dịch vụ</a></li>
							</ul>
						</li>
						<li><a href="{{route('roomlist')}}">Phòng</a>
						</li>
						<li><a href="{{route('event')}}">Sự kiện</a>
							<ul>
								<li><a href="{{route('event')}}">Event Archive</a></li>
								<li><a href="{{route('eventdetails')}}">Event Details</a></li>
							</ul>
						</li>
						<li><a href="{{route('gallery-row')}}">Bộ sưu tập</a>
							<ul>
								<li><a href="{{route('gallery-grid')}}">Gallery - Grid View</a></li>
								<li><a href="{{route('gallery-masonry')}}">Gallery - Masonry View</a></li>
								<li><a href="{{route('gallery-row')}}">Gallery - List View</a></li>
								<li><a href="{{route('gallery-slide-show')}}">Gallery - Slide Show</a></li>
							</ul>
						</li>
						<li><a href="{{route('booking')}}">Đặt phòng</a>
							<ul>
								<li><a href="{{route('booking')}}">Chọn Ngày</a></li>
								<li><a href="{{route('ChooseRoom')}}">Chọn Phòng</a></li>
								<li><a href="{{route('Information')}}">Thông Tin Đặt Phòng</a></li>
								<li><a href="{{route('Confirmation')}}">Xác Nhận</a></li>
							</ul>
						</li>
						<li><a href="{{route('blog')}}">Tin tức</a>
						<!-- <ul>
									<li><a href="{{route('blog')}}">Blog - Masonry View</a></li>
									<li><a href="{{route('blogdetails')}}">Post Details</a></li>
								</ul> -->
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
						<li><a href="{{route('contact')}}">Liên hệ</a></li>
					</ul>
				</nav>
				<div id="main-menu-handle" class="ravis-btn btn-type-2">
					<i class="fa fa-bars"></i><i class="fa fa-close"></i>
				</div><!-- Mobile Menu handle -->
				<a href="pages/booking.html" id="header-book-bow" class="ravis-btn btn-type-2">
					<span>Tìm Phòng</span>
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div id="mobile-menu-container"></div>
	</header>
	<!-- End of Header Section -->

	<!--Breadcrumb Section-->
	<section id="breadcrumb-section" data-bg-img="../assets/img/breadcrumb.jpg">
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
									<a href="blog-details.html">
										<img src="../assets/img/gallery/5.jpg" alt="Room Image">
									</a>
								</div>
								<div class="desc-box col-xs-8">
									<a href="blog-details.html" class="title">Toronto High End Market</a>
									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										Atque
										dicta exercitationem hic laudantium nemo quis quo reprehenderit repudiandae
										ut
										vel?
									</div>
									<a href="blog-details.html" class="read-more">Read More</a>

								</div>
							</li>
							<li class="clearfix">
								<div class="img-container col-xs-4">
									<a href="blog-details.html">
										<img src="../assets/img/gallery/6.jpg" alt="Room Image">
									</a>
								</div>
								<div class="desc-box col-xs-8">
									<a href="blog-details.html" class="title">Drop Everything Now</a>
									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										Accusamus consequuntur corporis dolorem esse fugiat in magnam nostrum qui
										rerum,
										sapiente.
									</div>
									<a href="blog-details.html" class="read-more">Read More</a>
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
<script type="text/javascript" src="../assets/js/select2.min.js"></script>
<script type="text/javascript" src="../assets/js/template.js"></script>
</body>
</html>