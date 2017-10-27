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
<style>
.gallery-container .image-main-box .item {
    display: table;
    width: 100%;
    margin: 0 0 30px;
    padding: 0;
    border: 2px solid transparent;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.gallery-container .image-main-box .item .img-container {
    padding: 0;
    border-right: 2px solid #090909;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.gallery-container .image-main-box .item > div {
    float: none;
    display: table-cell;
    vertical-align: top;
}
.gallery-container .image-main-box .item .img-container img {
    max-width: 100%;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
 .gallery-container .image-main-box .item .img-container a {
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    text-indent: -999999px;
    overflow: hidden;
    z-index: 11;
}
 .gallery-container .image-main-box .item .desc {
    background: #090909;
    padding: 50px;
    text-align: left;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.gallery-container .image-main-box .item > div {
    float: none;
    display: table-cell;
    vertical-align: top;
}
 .gallery-container .image-main-box .item:hover {
    border-color: #d2bd7f;
}
 .gallery-container .image-main-box .item:hover .img-container {
    border-color: #d2bd7f;
}
.gallery-container .image-main-box .item {
    display: table;
    width: 100%;
    margin: 0 0 30px;
    padding: 0;
    border: 2px solid transparent;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.gallery-container .image-main-box .item:hover .img-container a:after {
    top: 50%;
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}
.gallery-container .image-main-box .item .img-container a:after {
    display: block;
    position: absolute;
    left: 50%;
    top: 40%;
    text-indent: 0;
    width: 50px;
    height: 50px;
    margin: -25px 0 0 -25px;
    background: #d2bd7f;
    color: #222222;
    font-size: 1.6em !important;
    line-height: 50px !important;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    opacity: 0;
    filter: alpha(opacity=0);
}
.fa-expand:before, .gallery-container .image-main-box .item .img-container a:after {
    content: "";
}
.fa,  .gallery-container .image-main-box .item .img-container a:after {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.gallery-container .image-main-box .item:hover .img-container a:before {
    left: 0;
    opacity: 1;
    filter: alpha(opacity=100);
}
.gallery-container .image-main-box .item .img-container a:before {
    content: '';
    display: block;
    position: absolute;
    left: 40px;
    top: 0;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    width: 100%;
    height: 100%;
}
.fa,.gallery-container .image-main-box .item .img-container a:after {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
@endsection()