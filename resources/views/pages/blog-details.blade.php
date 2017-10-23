@extends('master')
@section('content')


		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="../assets/img/breadcrumb.jpg">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Blog Details</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>
				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="../index.html">Home</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li class="current"><a href="#">Blog Details</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!--Blog Container-->
		<section id="blog-section">
			<div class="inner-container container">
				<div class="post-main-container col-md-8">
					<!-- Post boxes -->
					<div class="post-box">
						<a class="post-img-box" href="#">
							<img src="../assets/img/luxury-rooms/1.jpg" alt="It is not the mountain we conquer but ourselves" class="post-img">
						</a>
						<div class="post-b-sec">
							<div class="post-title-box">
								<a href="#" class="post-title">It is not the mountain we conquer but ourselves</a>
							</div>
							<div class="post-meta clearfix">
								<div class="post-date"><i class="fa fa-calendar"></i> 28 , May , 2014</div>
								<div class="post-author"><i class="fa fa-edit"></i> By : <a href="#">admin</a></div>
								<div class="post-category"><i class="fa fa-folder-open"></i><a href="#">News</a></div>
								<div class="post-comment"><i class="fa fa-comments-o"></i> 10 <a href="#">Comments</a></div>
							</div>
							<div class="post-desc">
								<p>
									Balance is easy to understand in the physical world, because we experience it all the time. When something is unbalanced, it tends to fall over. You’ve probably been on a seesaw or a teeter-totter at some time in your life — you on one side and a friend on the other.
								</p>
								<p>
									Assuming you were both about the same size, you were able to easily balance on the seesaw. The following image appears to be in balance, with two equally sized people equally distant from the fulcrum on which the seesaw balances.
								</p>
								<p>
									The person on the left makes the seesaw rotate counterclockwise, and the person on the right makes it rotate clockwise by an equal amount. The force of each person acts in a different direction, and their sum is zero.
								</p>
								<blockquote>
									<p>
										People think focus means saying yes to the thing you’ve got to focus on. But that’s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I’m actually as proud of the things we haven’t done as the things I have done. Innovation is saying no to 1,000 things.
									</p>
								</blockquote>
								<p>
									Here, the force of the larger person is reduced by being closer to the fulcrum on which the seesaw balances. I’ll trust you’ve been on a seesaw before or at least watched others play on one and that you have a pretty good sense of what’s going on.
									<br>
									Visual balance is similar. Physical weight is replaced by visual weight. The direction in which the physical weight acts is replaced by visual direction.
								</p>
								<p>
									You don’t use instruments to measure the forces. You don’t use formulas to calculate whether everything is in balance. Rather, you use your eye to determine whether a composition is balanced.
								</p>
							</div>

							<div class="post-tags">
								<ul class="list-inline">
									<li><a href="#">Articles</a></li>
									<li><a href="#">Bars</a></li>
									<li><a href="#">Beach</a></li>
									<li><a href="#">Drinks</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Foods</a></li>
									<li><a href="#">Jacuzzi</a></li>
								</ul>
							</div>

							<!-- Comment Box -->
							<div class="comments-container">
								<h3>3 <b>Comments</b></h3>

								<!-- Comment Boxes -->
								<div class="comment-box-container">
									<div class="comment-box">
										<div class="user-img">
											<img src="../assets/img/users/1.jpg" alt="">
										</div>
										<div class="comment-info">
											<div class="user-name">Lori <span>Bell</span></div>
											<div class="comment-date">Jan 29, 2015</div>
											<a href="#" class="reply fa fa-reply"></a>
										</div>
										<div class="comment-text">
											Thanks for your great article. This article is so useful and help me to get more information about Themeforest.
										</div>
									</div>
									<div class="comment-box-container">
										<!-- Comment Box -->
										<div class="comment-box">
											<div class="user-img">
												<img src="../assets/img/users/2.jpg" alt="">
											</div>
											<div class="comment-info">
												<div class="user-name">Sara <span>Lopez</span></div>
												<div class="comment-date">Feb 1, 2015</div>
												<a href="#" class="reply fa fa-reply"></a>
											</div>
											<div class="comment-text">
												Thanks for your great article. This article is so useful and help me to get more information about Themeforest.
											</div>
										</div>
										<!-- Comment Box -->
										<div class="comment-box">
											<div class="user-img">
												<img src="../assets/img/users/3.jpg" alt="">
											</div>
											<div class="comment-info">
												<div class="user-name">Chris <span>Jordan</span></div>
												<div class="comment-date">Feb 3, 2015</div>
												<a href="#" class="reply fa fa-reply"></a>
											</div>
											<div class="comment-text">
												Thanks for all the comments, everyone! This article is so useful and help me to get more information about Themeforest.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End of Comment Box -->

							<!-- Comment Form -->
							<div class="comment-form-container">
								<h3>Write a Comment</h3>
								<div class="desc">Please fill all the fields of the below form and let us know what you are thinking about this post.</div>
								<form class="comment-form">
									<div class="field-row">
										<input type="text" name="name" placeholder="Full Name :" required>
									</div>
									<div class="field-row">
										<input type="email" name="email" placeholder="Email :" required>
									</div>
									<div class="field-row">
										<input type="text" name="phone" placeholder="Phone :">
									</div>
									<div class="field-row">
										<textarea name="comment" placeholder="Your Comment :" required></textarea>
									</div>
									<div class="field-row">
										<input type="submit" value="Submit" class="btn btn-default">
									</div>
								</form>
							</div>
							<!-- End of Comment Form -->

						</div>
					</div>

				</div>

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
			</div>
		</section>
		<!--End of Blog Container-->

		@endsection