@extends('master')
@section('content')
		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="{{asset('assets/img/breadcrumb.jpg')}}">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Gallery - Row</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>

				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li class="current"><a href="#">Gallery - Row</a></li>
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
						<li class="item row lobby">
							<div class="img-container col-md-5">
								<img src="{{asset('assets/img/gallery/1.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/1.jpg')}}" class="more-details"
								   data-title="Great View">Enlarge</a>
							</div>
							<div class="desc col-md-7">
								<div class="ravis-title-t-1">
									<div class="title"><span>Great View</span></div>
									<div class="sub-title">We provide the most luxurious services</div>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt eos officia
									porro quasi tempora. Autem, culpa cupiditate eius illum laudantium minus numquam
									optio rerum unde vitae? Ad aliquam aperiam, fugit libero magni maxime veritatis?
								</div>
							</div>
						</li>
						<li class="item row pool">
							<div class="img-container col-md-5">
								<img src="{{asset('assets/img/gallery/2.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/2.jpg')}}" class="more-details"
								   data-title="Luxury Furniture">Enlarge</a>
							</div>
							<div class="desc col-md-7">
								<div class="ravis-title-t-1">
									<div class="title"><span>Luxury Furniture</span></div>
									<div class="sub-title">We provide the most luxurious services</div>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt eos officia
									porro quasi tempora. Autem, culpa cupiditate eius illum laudantium minus numquam
									optio rerum unde vitae? Ad aliquam aperiam, fugit libero magni maxime veritatis?
								</div>
							</div>
						</li>
						<li class="item row bars">
							<div class="img-container col-md-5">
								<img src="{{asset('assets/img/gallery/3.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/3.jpg')}}" class="more-details"
								   data-title="Neat &amp; Clean Places">Enlarge</a>
							</div>
							<div class="desc col-md-7">
								<div class="ravis-title-t-1">
									<div class="title"><span>Neat &amp; Clean Places</span></div>
									<div class="sub-title">We provide the most luxurious services</div>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt eos officia
									porro quasi tempora. Autem, culpa cupiditate eius illum laudantium minus numquam
									optio rerum unde vitae? Ad aliquam aperiam, fugit libero magni maxime veritatis?
								</div>
							</div>
						</li>
						<li class="item row restaurant">
							<div class="img-container col-md-5">
								<img src="{{asset('assets/img/gallery/4.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/4.jpg')}}" class="more-details"
								   data-title="Luxury Feelings">Enlarge</a>
							</div>
							<div class="desc col-md-7">
								<div class="ravis-title-t-1">
									<div class="title"><span>Luxury Feelings</span></div>
									<div class="sub-title">We provide the most luxurious services</div>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt eos officia
									porro quasi tempora. Autem, culpa cupiditate eius illum laudantium minus numquam
									optio rerum unde vitae? Ad aliquam aperiam, fugit libero magni maxime veritatis?
								</div>
							</div>
						</li>
						<li class="item row pool">
							<div class="img-container col-md-5">
								<img src="{{asset('assets/img/gallery/5.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/5.jpg')}}" class="more-details"
								   data-title="Cozy Spaces">Enlarge</a>
							</div>
							<div class="desc col-md-7">
								<div class="ravis-title-t-1">
									<div class="title"><span>Cozy Spaces</span></div>
									<div class="sub-title">We provide the most luxurious services</div>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt eos officia
									porro quasi tempora. Autem, culpa cupiditate eius illum laudantium minus numquam
									optio rerum unde vitae? Ad aliquam aperiam, fugit libero magni maxime veritatis?
								</div>
							</div>
						</li>
						<li class="item row rooms">
							<div class="img-container col-md-5">
								<img src="{{asset('assets/img/gallery/6.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/6.jpg')}}" class="more-details"
								   data-title="Comfortable Rooms">Enlarge</a>
							</div>
							<div class="desc col-md-7">
								<div class="ravis-title-t-1">
									<div class="title"><span>Comfortable Rooms</span></div>
									<div class="sub-title">We provide the most luxurious services</div>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt eos officia
									porro quasi tempora. Autem, culpa cupiditate eius illum laudantium minus numquam
									optio rerum unde vitae? Ad aliquam aperiam, fugit libero magni maxime veritatis?
								</div>
							</div>
						</li>
						<li class="item row pool">
							<div class="img-container col-md-5">
								<img src="{{asset('assets/img/gallery/7.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/7.jpg')}}" class="more-details"
								   data-title="Relaxation Spaces">Enlarge</a>
							</div>
							<div class="desc col-md-7">
								<div class="ravis-title-t-1">
									<div class="title"><span>Relaxation Spaces</span></div>
									<div class="sub-title">We provide the most luxurious services</div>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt eos officia
									porro quasi tempora. Autem, culpa cupiditate eius illum laudantium minus numquam
									optio rerum unde vitae? Ad aliquam aperiam, fugit libero magni maxime veritatis?
								</div>
							</div>
						</li>
						<li class="item row pool">
							<div class="img-container col-md-5">
								<img src="{{asset('assets/img/gallery/8.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/8.jpg')}}" class="more-details"
								   data-title="Indoor Cinema Theatre">Enlarge</a>
							</div>
							<div class="desc col-md-7">
								<div class="ravis-title-t-1">
									<div class="title"><span>Indoor Cinema Theatre</span></div>
									<div class="sub-title">We provide the most luxurious services</div>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt eos officia
									porro quasi tempora. Autem, culpa cupiditate eius illum laudantium minus numquam
									optio rerum unde vitae? Ad aliquam aperiam, fugit libero magni maxime veritatis?
								</div>
							</div>
						</li>
						<li class="item row pool">
							<div class="img-container col-md-5">
								<img src="{{asset('assets/img/gallery/9.jpg')}}" alt="11"/>
								<a href="{{asset('assets/img/gallery/9.jpg')}}" class="more-details"
								   data-title="Out Pool">Enlarge</a>
							</div>
							<div class="desc col-md-7">
								<div class="ravis-title-t-1">
									<div class="title"><span>Out Pool</span></div>
									<div class="sub-title">We provide the most luxurious services</div>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt eos officia
									porro quasi tempora. Autem, culpa cupiditate eius illum laudantium minus numquam
									optio rerum unde vitae? Ad aliquam aperiam, fugit libero magni maxime veritatis?
								</div>
							</div>
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