@extends('master')
@section('content')


		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="{{asset('assets/img/breadcrumb.jpg')}}">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Blog - Left Sidebar</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>
				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li class="current"><a href="#">Blog - Left Sidebar</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!--Blog Container-->
		<section id="blog-section">
			<div class="inner-container container">
				<!--Sidebar Section-->
				<aside id="sidebar" class="col-md-4">
					<!-- Text Widget -->
					<div class="widget widget_text">
						<h3 class="side-title"><span>Text</span> Widget</h3>
						<div class="textwidget">
							Text widget can be used for putting text, images and some other elements in the widget areas. As an example you can add your short description about your hotel and add your logo in this area. Also you can add some useful information like notification in this area.
						</div>
					</div>

					<!-- Archive Widget -->
					<div class="widget widget_archive">
						<h3 class="side-title">Archives <span>List</span></h3>
						<ul>
							<li><a href="#">January 2050</a>&nbsp;(1)</li>
							<li><a href="#">March 2015</a>&nbsp;(4)</li>
							<li><a href="#">March 2013</a>&nbsp;(7)</li>
							<li><a href="#">January 2013</a>&nbsp;(14)</li>
							<li><a href="#">December 2012</a>&nbsp;(12)</li>
							<li><a href="#">November 2012</a>&nbsp;(2)</li>
						</ul>
					</div>

					<!-- Search Widget -->
					<div class="widget widget_search">
						<form class="search-form">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
							</label>
							<input type="submit" class="search-submit" value="Search">
						</form>
					</div>

					<!-- Tag Cloud Widget -->
					<div class="widget widget_tag_cloud">
						<h3 class="side-title"><span>Tags</span></h3>
						<div class="tagcloud">
							<a href="#">Articles</a>
							<a href="#">Bars</a>
							<a href="#">Beach</a>
							<a href="#">Drinks</a>
							<a href="#">Food</a>
							<a href="#">Foods</a>
							<a href="#">Jacuzzi</a>
							<a href="#">Love</a>
							<a href="#">Restaurants</a>
							<a href="#">Sauna</a>
							<a href="#">Spa</a>
						</div>
					</div>
				</aside>

				<div class="post-main-container col-md-8">
					<!-- Post boxes -->
					<div class="post-box">
						<a class="post-img-box" href="blog-details.html">
							<img src="{{asset('assets/img/luxury-rooms/1.jpg')}}" alt="Inspiration the seed. Design but the flower" class="post-img">
						</a>
						<div class="post-b-sec">
							<div class="post-title-box">
								<a href="blog-details.html" class="post-title">Inspiration the seed. Design but the flower</a>
							</div>
							<div class="post-meta clearfix">
								<div class="post-date"><i class="fa fa-calendar"></i> 28 , May , 2014</div>
								<div class="post-author"><i class="fa fa-edit"></i> By : <a href="#">admin</a></div>
								<div class="post-category"><i class="fa fa-folder-open"></i><a href="#">News</a></div>
								<div class="post-comment"><i class="fa fa-comments-o"></i> 10 <a href="#">Comments</a></div>
							</div>
							<div class="post-desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores tenetur repellendus nobis earum sequi doloremque eligendi corrupti dolorum aperiam at dolore, consequuntur delectus consectetur velit sed accusamus, pariatur sunt error maxime quia quasi? Fuga placeat, deserunt ad facilis mollitia voluptatum natus distinctio qui quam pariatur, aliquam officiis ullam, repellat fugit architecto impedit quasi voluptas incidunt. Qui eos, nesciunt inventore tempore rerum eius placeat, repellat? Repellendus commodi suscipit ea totam nemo. Consequatur assumenda sunt nam, ipsam nesciunt officiis quisquam quis expedita!
							</div>
							<div class="read-more-container">
								<a href="blog-details.html" class="btn btn-default read-more">Continue Reading</a>
							</div>
						</div>
					</div>

					<!-- Post boxes -->
					<div class="post-box">
						<a class="post-img-box" href="blog-details.html">
							<img src="{{asset('assets/img/luxury-rooms/2.jpg')}}" alt="It is not the mountain we conquer but ourselves" class="post-img">
						</a>
						<div class="post-b-sec">
							<div class="post-title-box">
								<a href="blog-details.html" class="post-title">It is not the mountain we conquer but ourselves</a>
							</div>
							<div class="post-meta clearfix">
								<div class="post-date"><i class="fa fa-calendar"></i> 28 , May , 2014</div>
								<div class="post-author"><i class="fa fa-edit"></i> By : <a href="#">admin</a></div>
								<div class="post-category"><i class="fa fa-folder-open"></i><a href="#">News</a></div>
								<div class="post-comment"><i class="fa fa-comments-o"></i> 10 <a href="#">Comments</a></div>
							</div>
							<div class="post-desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores tenetur repellendus nobis earum sequi doloremque eligendi corrupti dolorum aperiam at dolore, consequuntur delectus consectetur velit sed accusamus, pariatur sunt error maxime quia quasi? Fuga placeat, deserunt ad facilis mollitia voluptatum natus distinctio qui quam pariatur, aliquam officiis ullam, repellat fugit architecto impedit quasi voluptas incidunt. Qui eos, nesciunt inventore tempore rerum eius placeat, repellat? Repellendus commodi suscipit ea totam nemo. Consequatur assumenda sunt nam, ipsam nesciunt officiis quisquam quis expedita!
							</div>
							<div class="read-more-container">
								<a href="blog-details.html" class="btn btn-default read-more">Continue Reading</a>
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
			</div>
		</section>
		<!--End of Blog Container-->

@endsection()