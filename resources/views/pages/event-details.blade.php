
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
									<li><a href="events.html">Event Archive</a></li>
									<li class="active"><a href="event-details.html">Event Details</a></li>
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

		<section id="event-top-section">
			<!-- Event Slider -->
			<section id="event-slider">
				<div class="items">
					<div class="img-container" data-bg-img="../assets/img/events/slider/1.jpg"></div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="../assets/img/events/slider/3.jpg"></div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="../assets/img/events/slider/2.jpg"></div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="../assets/img/events/slider/4.jpg"></div>
				</div>
			</section>
			<!-- End of Event Slider -->
			<div class="inner-container container">
				<div class="event-title-box">
					<h1 class="title">Fashion Show</h1>
					<div class="sub-title">Designer : John Doe</div>
				</div>
				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="../index.html">Home</a></li>
						<li><a href="events.html">Events</a></li>
						<li class="current"><a href="#">Fashion Show</a></li>
					</ul>
				</div>
			</div>
		</section>

		<section class="event-desc">
			<div class="inner-container container">
				<form class="booking-form clearfix" action="#"><!-- Do Not remove the classes -->
					<div class="field-row">
						<input type="text" placeholder="Name" name="guest-name" required>
					</div>
					<div class="field-row">
						<input type="email" placeholder="Email" name="guest-email" required>
					</div>
					<div class="field-row">
						<input type="text" placeholder="Phone" name="guest-phone">
					</div>
					<div class="field-row">
						<select name="guest-count" placeholder="Guests" required>
							<option></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">+5</option>
						</select>
					</div>
					<div class="field-row">
						<input type="submit" value="Book Now">
					</div>
				</form>

				<div class="content">
					<div class="date-box">
						<div class="inner-box">
							Date : <span>2016 Octobere 15th</span>
						</div>
					</div>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto consequuntur corporis debitis dignissimos distinctio dolorem ea eaque enim error esse, eum ex exercitationem id ipsum laboriosam, minus molestias necessitatibus officiis placeat praesentium provident qui quisquam saepe tempora totam voluptatibus. A ad, at beatae, blanditiis deserunt dicta eveniet expedita explicabo id natus neque odio odit quas quibusdam ratione sed, sint voluptas. Alias at, dignissimos explicabo natus rerum ullam. Accusamus aspernatur cupiditate dolorem ducimus ea illum iusto labore, nihil odit perferendis reiciendis repudiandae veniam? A ab ad aliquid blanditiis, dolorem dolores et nobis, recusandae sed, tempore tenetur veritatis! Est molestias, necessitatibus.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi cumque cupiditate dolor dolore, esse est id ipsa laborum molestiae nesciunt nihil nisi officia, officiis provident quas quia quidem repudiandae saepe similique sint tempora, vitae voluptate? Aliquam asperiores corporis, cum earum eos esse et ex exercitationem facere inventore minima nemo neque officia officiis qui quibusdam quis ratione repellat rerum sint tempore, totam vero voluptatum. Aliquam consequuntur corporis ea illo similique!
					</p>
					<br>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum labore, quas! Aperiam eligendi enim eos laudantium mollitia nesciunt non quos voluptate. Dolores ducimus fuga fugit hic placeat. A accusamus aspernatur assumenda aut corporis culpa, cum cumque debitis deleniti dolor exercitationem illum modi, numquam praesentium provident quia ratione sunt veniam voluptatum.
					</p>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at beatae blanditiis deserunt fugit ipsum maxime minus nisi porro reprehenderit?</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda atque delectus eligendi error suscipit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eos facilis maxime non pariatur perferendis reiciendis veniam!</li>
					</ul>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, beatae, itaque. Consectetur excepturi fugit iste nam officia, placeat porro quam quasi quod reprehenderit, sint vel? Assumenda, delectus est et eveniet fuga fugiat inventore maiores modi numquam, odio optio possimus quia sint soluta vitae? Asperiores culpa, doloribus hic iste natus, necessitatibus nesciunt, nihil officia provident reiciendis suscipit tenetur veniam voluptatibus voluptatum?
					</p>
				</div>
			</div>
		</section>

		<!-- Past Events -->
		<section id="similar-events">
			<div class="inner-container container">

				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Similar Events</div>
						<div class="sub-title">Other events you might be interested in</div>
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
					</ul>
				</div>
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
	<script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="../assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="../assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="../assets/js/template.js"></script>
</body>
</html>