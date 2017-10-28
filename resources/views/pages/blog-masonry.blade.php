@extends('master')
@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="{{asset('assets/img/breadcrumb.jpg')}}">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Blog - Masonry View</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>
				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="index.html">Home</a></li>
						<li class="current"><a href="#">Blog - Masonry View</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!--Blog Container-->
		<section id="blog-section">
			<div class="inner-container container">
				<div class="post-main-container clearfix">
					<!-- Post boxes -->
					<div class="post-outer-box col-md-6">
						<div class="post-box">
							<a class="post-img-box" href="blog-details.html">
								<img src="{{asset('assets/img/luxury-rooms/1.jpg')}}"
									 alt="It is not the mountain we conquer but ourselves" class="post-img">
							</a>
							<div class="post-b-sec">
								<div class="post-title-box">
									<a href="blog-details.html" class="post-title">It is not the mountain we conquer but ourselves</a>
								</div>
								<div class="post-meta clearfix">
									<div class="post-date"><i class="fa fa-calendar"></i> 28 , May , 2014</div>
									<div class="post-author"><i class="fa fa-edit"></i> By : <a href="#">admin</a></div>
									<div class="post-category"><i class="fa fa-folder-open"></i><a href="#">News</a>
									</div>
									<div class="post-comment"><i class="fa fa-comments-o"></i> 10 <a
											href="#">Comments</a></div>
								</div>
								<div class="post-desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores tenetur
									repellendus nobis earum sequi doloremque eligendi corrupti dolorum aperiam at
									dolore, consequuntur delectus consectetur velit sed accusamus, pariatur sunt error
									maxime quia quasi? Fuga placeat, deserunt ad facilis mollitia voluptatum natus
									distinctio qui quam pariatur, aliquam officiis ullam, repellat fugit architecto
									impedit quasi voluptas incidunt. Qui eos, nesciunt inventore tempore rerum eius
									placeat, repellat? Repellendus commodi suscipit ea totam nemo. Consequatur assumenda
									sunt nam, ipsam nesciunt officiis quisquam quis expedita!
								</div>
								<div class="read-more-container">
									<a href="blog-details.html" class="btn btn-default read-more">Continue Reading</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Post boxes -->
					<div class="post-outer-box col-md-6">
						<div class="post-box">
							<a class="post-img-box" href="blog-details.html">
								<img src="{{asset('assets/img/luxury-rooms/2.jpg')}}"
									 alt="Inspiration the seed. Design but the flower." class="post-img">
							</a>
							<div class="post-b-sec">
								<div class="post-title-box">
									<a href="blog-details.html" class="post-title">Inspiration the seed. Design but the flower.</a>
								</div>
								<div class="post-meta clearfix">
									<div class="post-date"><i class="fa fa-calendar"></i> 28 , May , 2014</div>
									<div class="post-author"><i class="fa fa-edit"></i> By : <a href="#">admin</a></div>
									<div class="post-category"><i class="fa fa-folder-open"></i><a href="#">News</a>
									</div>
									<div class="post-comment"><i class="fa fa-comments-o"></i> 10 <a
											href="#">Comments</a></div>
								</div>
								<div class="post-desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium beatae
									consectetur debitis eius id iusto magnam minus nobis non perferendis placeat, quae
									quaerat reiciendis repellat sunt, vitae voluptatum? Perspiciatis?
								</div>
								<div class="read-more-container">
									<a href="blog-details.html" class="btn btn-default read-more">Continue Reading</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Post boxes -->
					<div class="post-outer-box col-md-6">
						<div class="post-box">
							<a class="post-img-box" href="blog-details.html">
								<img src="{{asset('assets/img/luxury-rooms/3.jpg')}}"
									 alt="Great design is eliminating all unnecessary details." class="post-img">
							</a>
							<div class="post-b-sec">
								<div class="post-title-box">
									<a href="blog-details.html" class="post-title">Great design is eliminating all unnecessary details.</a>
								</div>
								<div class="post-meta clearfix">
									<div class="post-date"><i class="fa fa-calendar"></i> 28 , May , 2014</div>
									<div class="post-author"><i class="fa fa-edit"></i> By : <a href="#">admin</a></div>
									<div class="post-category"><i class="fa fa-folder-open"></i><a href="#">News</a>
									</div>
									<div class="post-comment"><i class="fa fa-comments-o"></i> 10 <a
											href="#">Comments</a></div>
								</div>
								<div class="post-desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores tenetur
									repellendus nobis earum sequi doloremque eligendi corrupti dolorum aperiam at
									dolore, consequuntur delectus consectetur velit sed accusamus, pariatur sunt error
									maxime quia quasi? Fuga placeat, deserunt ad facilis mollitia voluptatum natus
									distinctio qui quam pariatur, aliquam officiis ullam, repellat fugit architecto
									impedit quasi voluptas incidunt. Qui eos, nesciunt inventore tempore rerum eius
									placeat, repellat? Repellendus commodi suscipit ea totam nemo. Consequatur assumenda
									sunt nam, ipsam nesciunt officiis quisquam quis expedita!
								</div>
								<div class="read-more-container">
									<a href="blog-details.html" class="btn btn-default read-more">Continue Reading</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Post boxes -->
					<div class="post-outer-box col-md-6">
						<div class="post-box">
							<a class="post-img-box" href="blog-details.html">
								<img src="{{asset('assets/img/luxury-rooms/4.jpg')}}"
									 alt="The life of a designer is a life of fight: fight against the ugliness." class="post-img">
							</a>
							<div class="post-b-sec">
								<div class="post-title-box">
									<a href="blog-details.html" class="post-title">The life of a designer is a life of fight: fight against the ugliness.</a>
								</div>
								<div class="post-meta clearfix">
									<div class="post-date"><i class="fa fa-calendar"></i> 28 , May , 2014</div>
									<div class="post-author"><i class="fa fa-edit"></i> By : <a href="#">admin</a></div>
									<div class="post-category"><i class="fa fa-folder-open"></i><a href="#">News</a>
									</div>
									<div class="post-comment"><i class="fa fa-comments-o"></i> 10 <a
											href="#">Comments</a></div>
								</div>
								<div class="post-desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium beatae
									consectetur debitis eius id iusto magnam minus nobis non perferendis placeat, quae
									quaerat reiciendis repellat sunt, vitae voluptatum? Perspiciatis?
								</div>
								<div class="read-more-container">
									<a href="blog-details.html" class="btn btn-default read-more">Continue Reading</a>
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
						<li><a href="#"><span>4</span></a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
				<!-- End of Pagination -->
			</div>
		</section>
		<!--End of Blog Container-->

@endsection()