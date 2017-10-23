
	@extends('master')
  	@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="assets/img/breadcrumb.jpg">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">About Us</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>

				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="/index.html">Home</a></li>
						<li class="current"><a href="#">About Us</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!--Welcome Section-->
		<section id="welcome-section" class="has-user">
			<div class="inner-container container">
				<div class="l-sec col-md-7">
					<div class="ravis-title-t-1">
						<div class="title"><span>Colosseum Hotel</span></div>
						<div class="sub-title">We provide the most luxurious services</div>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis consectetur culpa
						deserunt expedita impedit labore nam. At aut ducimus earum error esse exercitationem expedita
						hic, inventore nemo officiis repellat rerum similique, sunt totam ut voluptatem, voluptatum?
						Architecto assumenda autem earum, eius est exercitationem, in pariatur perspiciatis placeat
						tenetur, ut!
					</div>
					<cite>Chris Coleman - General Manager</cite>
				</div>
				<div class="r-sec col-md-5">
					<div class="user-img-box">
						<div class="inner-box">
							<img src="assets/img/hotel-manager.png" alt="Chris Coleman - General Manager">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End of Welcome Section-->

		<!-- Video Tour -->
		<section id="video-tour" data-bg-img="assets/img/video.jpg">
			<div class="inner-container container">
				<div class="row">
					<div class="l-sec col-md-6">
						<div class="ravis-title">
							<div class="inner-box">
								<div class="title">Video Tour</div>
								<div class="sub-title">Watch the video to find out more about our services</div>
							</div>
						</div>

					</div>
					<div class="r-sec col-md-6">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores facilis nulla repellat
						rerum veniam vitae, voluptatem? Ex harum incidunt magni minima natus, quaerat quis. Eum modi
						neque quae sequi temporibus!
					</div>
				</div>
				<div class="row btn-box">
					<a href="https://www.youtube.com/embed/23BFVDEdi-0" class="play-btn video-url">
						<i class="fa fa-play"></i>
					</a>
				</div>
			</div>
		</section>
		<!-- End of Video Tour -->

		<!-- Our History -->
		<section id="history-section">
			<div class="inner-container container">
				<div class="ravis-title-t-2">
					<div class="title"><span>Our History</span></div>
					<div class="sub-title">History develops, art stands still</div>
				</div>

				<div class="desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eligendi iusto minus perferendis
					perspiciatis porro provident quae quasi, qui quis sit ullam vero? Aliquam amet aspernatur consectetur
					consequuntur culpa dolore, eius eos fugiat illum impedit iste iure magnam minima neque officiis optio
					perferendis possimus quae quia quisquam rem sunt voluptas!
				</div>

				<!-- History Main Container -->
				<div class="history-timeline clearfix">
					<!-- History Box ( You can create History boxes as much as you want! But Do Not change the classes and attributes ) -->
					<div class="history-boxes col-md-6 col-xs-6 animated-box" data-animation="fadeInLeft">
						<div class="history-boxes-inner">
							<i>2013</i><!-- History's date (Do Not remove it) -->
							<h5>Third Economic Conference</h5><!-- History's title -->
							<!-- History's description -->
							<div class="history-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, delectus, atque,
								molestias sapiente
							</div>
							<!-- end of History's description -->
						</div>
					</div>
					<!-- End of History box -->
					<div class="history-boxes col-md-6 col-xs-6 animated-box" data-animation="fadeInRight">
						<div class="history-boxes-inner">
							<i>2010</i>
							<h5>Opening of Blue Star Building</h5>
							<div class="history-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, delectus, atque,
								molestias sapiente
							</div>
						</div>
					</div>
					<div class="history-boxes col-md-6 col-xs-6 animated-box" data-animation="fadeInLeft">
						<div class="history-boxes-inner">
							<i>2005</i>
							<h5>Fifth Star Achievement</h5>
							<div class="history-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, delectus, atque,
								molestias sapiente
							</div>
						</div>
					</div>
					<div class="history-boxes col-md-6 col-xs-6 animated-box" data-animation="fadeInRight">
						<div class="history-boxes-inner">
							<i>1998</i>
							<h5>Opening of YooNa Luxury Casino</h5>
							<div class="history-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, delectus, atque,
								molestias sapiente
							</div>
						</div>
					</div>
					<div class="history-boxes col-md-6 col-xs-6 animated-box" data-animation="fadeInLeft">
						<div class="history-boxes-inner">
							<i>1990</i>
							<h5>Fourth Star Achievement</h5>
							<div class="history-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, delectus, atque,
								molestias sapiente
							</div>
						</div>
					</div>
					<div class="history-boxes col-md-6 col-xs-6 animated-box" data-animation="fadeInRight">
						<div class="history-boxes-inner">
							<i>1984</i>
							<h5>Founded by James Morison</h5>
							<div class="history-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, delectus, atque,
								molestias sapiente
							</div>
						</div>
					</div>
				</div>
				<!-- End of Services Main Container -->

			</div>
		</section>
		<!-- End of Our History -->
		@endsection()
	