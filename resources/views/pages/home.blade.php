
  @extends('master')
  @section('content')
        <div class="slider-available-sec">
			<!-- Main Slider -->
			<section id="main-slider">
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/slider/1.jpg')}}"></div>
					<!-- Change the URL section based on your image\'s name -->
					<div class="slide-caption">
						<div class="inner-container clearfix">
							<div class="up-sec">Enjoy of staying in our hotel with our</div>
							<div class="down-sec">Luxury Rooms & Services</div>
						</div>
					</div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/slider/2.jpg')}}"></div>
					<div class="slide-caption">
						<div class="inner-container clearfix">
							<div class="up-sec">We will be so proud to</div>
							<div class="down-sec">Be Our Guest</div>
						</div>
					</div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/slider/4.jpg')}}"></div>
					<div class="slide-caption">
						<div class="inner-container clearfix">
							<div class="up-sec">Be happy in our</div>
							<div class="down-sec">Luxury Rooms</div>
						</div>
					</div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/slider/3.jpg')}}"></div>
					<div class="slide-caption">
						<div class="inner-container clearfix">
							<div class="up-sec">Have a great time with our</div>
							<div class="down-sec">Private Environment</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End of Main Slider -->

			<!--Main Booking form-->
			<section id="main-availability-form">
				<div class="inner-container container">
					<div class="l-sec col-md-4">
						<div class="ravis-title">
							<div class="inner-box">
								<div class="title">Find a Room</div>
								<div class="sub-title">When you want to be our guest?</div>
							</div>
						</div>
					</div>
					<div class="r-sec col-md-8">
						<form class="booking-form clearfix" action="#"><!-- Do Not remove the classes -->
							<div class="col-md-10">
								<div class="input-daterange row">
									<div class="booking-fields col-md-6">
										<input placeholder="Ngày đến" class="datepicker-fields check-in" type="text"
											   name="start"/>
										<!-- Date Picker field ( Do Not remove the "datepicker-fields" class ) -->
										<i class="fa fa-calendar"></i><!-- Date Picker Icon -->
									</div>
									<div class="booking-fields col-md-6">
										<input placeholder="Ngày đi" class="datepicker-fields check-out" type="text"
											   name="end"/>
										<i class="fa fa-calendar"></i>
									</div>
								</div>
								<div class="row">
									<div class="booking-fields col-md-6">
										<!-- Select boxes ( you can change the items and its value based on your project's needs ) -->
										<select name="room-type">
											<option value="">Người lớn</option>
											<!-- Select box items ( you can change the items and its value based on your project's needs ) -->
											<option value="2">1</option>
											<option value="3">2</option>
											<option value="4">3</option>
											<option value="5">4</option>
											<option value="6">5</option>
										</select>
										<!-- End of Select boxes -->
									</div>
									<div class="booking-fields col-md-6">
										<select name="guest">
											<option value="">Trẻ em</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<button type="submit" class="ravis-btn btn-type-1">
									<span class="inner-box">
										Đặt Ngay
									</span>
								</button>
							</div>
						</form>

					</div>
				</div>
			</section>
			<!--End of Main Booking form-->
		</div>

		<!--Welcome Section-->
		<section id="welcome-section">
			<div class="inner-container container">
				<div class="l-sec col-md-7">
					<div class="ravis-title-t-1">
						<div class="title"><span>LokNet Hotel</span></div>
						<div class="sub-title">Chúng tôi cung cấp các dịch vụ tốt nhất</div>
					</div>
					<div class="content">
					Tập đoàn LokNet đã phát triển bền vững thành Tập đoàn kinh tế tổng hợp đa
					ngành hoạt động trên các lĩnh vực Đầu tư- Xây dựng- Du lịch giải trí và hiện nay Tập đoàn mở rộng sang các lĩnh
					vực Đào tạo, Y tế, trở thành một Tập đoàn lớn mạnh với hơn 20 khách sạn  và dự án khách sạn, tạo việc làm và đời 
					sống ổn định cho hơn 1000 lao động, hàng năm đóng góp hàng ngàn tỷ đồng cho ngân sách nhà nước. Tập đoàn LokNet
					đã làm tốt công tác xã hội, giành một ngân quỹ rất lớn hàng chục tỷ đồng cho công tác xóa đói giảm nghèo, phát triển dân trí,
					phát triển tài năng cho đất nước, góp phần giải quyết việc làm, phát triển kinh tế xã hội cho đất nước và Thành phố Nha Trang.
					</div>
					<a href="pages/about.html" class="ravis-btn btn-type-2">Về Chúng tôi</a>
				</div>
				<div class="r-sec col-md-5">
					<img src="{{asset('assets/img/welcome.jpg')}}" alt="Colosseum Hotel">
				</div>
			</div>
		</section>
		<!--End of Welcome Section-->

		<!--Luxury Room Section-->
		<section id="luxury-rooms" class="clearfix">
			<div class="room-boxes col-sm-6 col-md-3">
				<a href="pages/room-details.html" class="inner-container" data-bg="{{asset('assets/img/luxury-rooms/1.jpg')}}">
					<span class="ravis-title">
						<span class="inner-box">
							<span class="title">Royal Suit</span>
							<span class="sub-title">The best suit for families</span>
						</span>
					</span>
				</a>
			</div>
			<div class="room-boxes col-sm-6 col-md-3">
				<a href="pages/room-details.html" class="inner-container" data-bg="{{asset('assets/img/luxury-rooms/2.jpg')}}">
					<span class="ravis-title">
						<span class="inner-box">
							<span class="title">Deluxe Suite</span>
							<span class="sub-title">Luxury suite with greate view</span>
						</span>
					</span>
				</a>
			</div>
			<div class="room-boxes col-sm-6 col-md-3">
				<a href="pages/room-details.html" class="inner-container" data-bg="{{asset('assets/img/luxury-rooms/3.jpg')}}">
					<span class="ravis-title">
						<span class="inner-box">
							<span class="title">Double Room</span>
							<span class="sub-title">Suitable for families</span>
						</span>
					</span>
				</a>
			</div>
			<div class="room-boxes col-sm-6 col-md-3">
				<a href="pages/room-details.html" class="inner-container" data-bg="{{asset('assets/img/luxury-rooms/4.jpg')}}">
					<span class="ravis-title">
						<span class="inner-box">
							<span class="title">Single Room</span>
							<span class="sub-title">Great choice for small families</span>
						</span>
					</span>
				</a>
			</div>
		</section>
		<!--End of Luxury Room Section-->

		<!-- Gallery -->
		<section id="gallery">
			<div class="inner-container container">

				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">LokNet Gallery</div>
						<div class="sub-title">Experience the best and luxurious services with us</div>
					</div>
				</div>

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
						<li class="item col-xs-6 col-md-4 lobby">
							<figure>
								<img src="{{asset('assets/img/gallery/1.jp')}}g" alt="11"/>
								<a href="{{asset('assets/img/gallery/1.jpg')}}" class="more-details"
								   data-title="Great View">Enlarge</a>
								<figcaption>
									<h4>Great View</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="{{asset('assets/img/gallery/2.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/2.jpg')}}" class="more-details" data-title="Luxury Furniture">Enlarge</a>
								<figcaption>
									<h4>Luxury Furniture</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 bars">
							<figure>
								<img src="{{asset('assets/img/gallery/3.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/3.jpg')}}" class="more-details"
								   data-title="Neat &amp; Clean Places">Enlarge</a>
								<figcaption>
									<h4>Neat &amp; Clean Places</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 restaurant">
							<figure>
								<img src="{{asset('assets/img/gallery/4.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/4.jpg')}}" class="more-details"
								   data-title="Luxury Feelings">Enlarge</a>
								<figcaption>
									<h4>Luxury Feelings</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="{{asset('assets/img/gallery/5.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/5.jpg')}}" class="more-details"
								   data-title="Cozy Spaces">Enlarge</a>
								<figcaption>
									<h4>Cozy Spaces</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 rooms">
							<figure>
								<img src="{{asset('assets/img/gallery/6.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/6.jpg')}}" class="more-details" data-title="Comfortable Rooms">Enlarge</a>
								<figcaption>
									<h4>Comfortable Rooms</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="{{asset('assets/img/gallery/7.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/7.jpg')}}" class="more-details" data-title="Relaxation Spaces">Enlarge</a>
								<figcaption>
									<h4>Relaxation Spaces</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="{{asset('assets/img/gallery/8.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/8.jpg')}}" class="more-details"
								   data-title="Indoor Cinema Theatre">Enlarge</a>
								<figcaption>
									<h4>Indoor Cinema Theatre</h4>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4 pool">
							<figure>
								<img src="{{asset('assets/img/gallery/9.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/9.jpg')}}" class="more-details"
								   data-title="Out Pool">Enlarge</a>
								<figcaption>
									<h4>Out Pool</h4>
								</figcaption>
							</figure>
						</li>
					</ul>

					<a href="pages/gallery-masonry.html" class="gallery-more-btn ravis-btn btn-type-2">Xem thêm</a>
				</div>
			</div>
		</section>
		<!-- End of Gallery -->

		<!-- Testimonials Section -->
		<section id="testimonials-section" data-parallax="scroll" data-image-src="{{asset('assets/img/testimonails.jpg')}}">
			<div class="inner-container container">
				<div class="owl-carousel owl-theme">
					<div class="item">
						<div class="guest">
							<div class="ravis-title">
								<div class="inner-box">
									<div class="title">Christopher Robinson</div>
									<div class="sub-title">Accountant in Apple Inc.</div>
								</div>
							</div>
						</div>
						<div class="text">
						Giới thiệu, nhân rộng, lan tỏa những nét đẹp truyền thống, tinh hoa văn hóa và niềm tự hào Việt tới du khách trong và ngoài nước nhằm bảo tồn và xây dựng giá trị văn hóa các dân tộc Việt.
						Là điểm đến mang đậm văn hóa vùng miền. Mỗi thành viên của Mường Thanh có vai trò là một sứ giả trong cuộc giao lưu và quảng bá nét đẹp truyền thống dân tộc.						
						</div>
					</div>
					<div class="item">
						<div class="guest">
							<div class="ravis-title">
								<div class="inner-box">
									<div class="title">Jeniffer Chapman</div>
									<div class="sub-title">Freelance Photographer</div>
								</div>
							</div>
						</div>
						<div class="text">
						Trong tương lai, Tập đoàn Khách sạn Mường Thanh sẽ tiếp tục phát triển và mở rộng quy mô chuỗi khách sạn, khu nghỉ dưỡng cao cấp trải dài theo đất nước và vươn tới các nước trong khu vực Đông Dương, nâng vị thế tập đoàn khách sạn tư nhân lên tầm quốc tế. 
						
						Với tiêu chí kinh doanh gắn liền với trách nhiệm xã hội, việc đưa các khách sạn Mường Thanh vào hoạt động  đã góp phần đóng góp vào sự phát triển kinh tế địa phương thông qua việc tạo môi trường việc làm, nâng cao chất lượng đời sống người lao động và hỗ trợ các hoạt động cộng đồng.
						</div>
					</div>
					<div class="item">
						<div class="guest">
							<div class="ravis-title">
								<div class="inner-box">
									<div class="title">Jeremy Brown</div>
									<div class="sub-title">Mechanical Engineer</div>
								</div>
							</div>
						</div>
						<div class="text">
						Chúng tôi  tin rằng Phát triển bền vững sẽ là định hướng đúng đắn cho mọi hoạt động kinh doanh. Trong mỗi hành động của mình, chúng tôi luôn cam kết nỗ lực góp phần vào sự phát triển bền vững cho xã hội.
						
						Bằng việc xác định được mục tiêu, tâm thế rõ ràng trong suốt gần hai mươi năm phát triển, Tập đoàn khách sạn Mường Thanh đã luôn kiên định với triết lý kinh doanh  nhân văn gắn liền với sứ mệnh bảo tồn, giới thiệu văn hóa truyền thống độc đáo, giàu bản sắc dân tộc Việt Nam. Bên cạnh đó, hệ thống khách sạn trải dài trên cả nước luôn nỗ lực để góp phần vào sự phát triển của nền kinh tế địa phương thông qua việc mở rộng đầu tư với quy mô lớn tại nhiều vùng kinh tế đang phát triển, tạo công ăn việc làm, đào tạo nguồn nhân lực lĩnh vực dịch vụ du lịch, cùng với rất nhiều các hoạt động vì cộng đồng khác. Tập đoàn khách sạn Mường Thanh kỳ vọng sẽ phát triển mạnh mẽ và bền vững trong tương lai, song hành với sự phát triển của xã hội và đất nước. 
						</div>
					</div>
					<div class="item">
						<div class="guest">
							<div class="ravis-title">
								<div class="inner-box">
									<div class="title">Jack Norman</div>
									<div class="sub-title">Web Designer in RavisTheme</div>
								</div>
							</div>
						</div>
						<div class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
							voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
							cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
							ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam.
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Testimonials Section -->

		<!-- Special Offers -->
		<section id="special-offers">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Special Offers</div>
						<div class="sub-title">Choose the best package from the below</div>
					</div>
				</div>

				<div class="packages-container clearfix">
					<div class="package-box col-sm-6 col-md-4">
						<div class="main-inner-box" data-bg-img="{{asset('assets/img/packages/1.jpg')}}">
							<div class="title-box">
								<div class="title">Silver</div>
								<div class="sub-title">Economy Package</div>
							</div>
							<div class="price-box">
								<div class="price">$300</div>
								<div class="type">Per Night</div>
							</div>
							<div class="detail-box">
								<ul>
									<li>
										<div class="inner-box">Flight Ticket</div>
									</li>
									<li>
										<div class="inner-box">Restaurant ( Lunch )</div>
									</li>
									<li>
										<div class="inner-box">Music Concert ( 30% Off )</div>
									</li>
									<li>
										<div class="inner-box">Airport Pick-up</div>
									</li>
									<li>
										<div class="inner-box">Sport Activities</div>
									</li>
								</ul>
							</div>
							<a href="#" class="ravis-btn btn-type-2">Select</a>
						</div>
					</div>
					<div class="package-box col-sm-6 col-md-4">
						<div class="main-inner-box" data-bg-img="{{asset('assets/img/packages/2.jpg')}}">
							<div class="title-box">
								<div class="title">Gold</div>
								<div class="sub-title">Business package</div>
							</div>
							<div class="price-box">
								<div class="price">$450</div>
								<div class="type">Per Night</div>
							</div>
							<div class="detail-box">
								<ul>
									<li>
										<div class="inner-box">Flight Ticket</div>
									</li>
									<li>
										<div class="inner-box">Restaurant ( Lunch / Dinner )</div>
									</li>
									<li>
										<div class="inner-box">Music Concert ( 50% Off )</div>
									</li>
									<li>
										<div class="inner-box">Airport Pick-up</div>
									</li>
									<li>
										<div class="inner-box">Sport Activities</div>
									</li>
								</ul>
							</div>
							<a href="#" class="ravis-btn btn-type-2">Select</a>
						</div>
					</div>
					<div class="package-box col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-4">
						<div class="main-inner-box" data-bg-img="{{asset('assets/img/packages/3.jpg')}}">
							<div class="title-box">
								<div class="title">Diamond</div>
								<div class="sub-title">Luxury package</div>
							</div>
							<div class="price-box">
								<div class="price">$600</div>
								<div class="type">Per Night</div>
							</div>
							<div class="detail-box">
								<ul>
									<li>
										<div class="inner-box">Flight Ticket</div>
									</li>
									<li>
										<div class="inner-box">Restaurant ( Lunch / Dinner )</div>
									</li>
									<li>
										<div class="inner-box">Music Concert ( Free )</div>
									</li>
									<li>
										<div class="inner-box">Airport Pick-up</div>
									</li>
									<li>
										<div class="inner-box">Sport Activities ( Free )</div>
									</li>
								</ul>
							</div>
							<a href="#" class="ravis-btn btn-type-2">Select</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Special Offers -->
@endsection()