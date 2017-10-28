@extends('master')
@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="{{asset('assets/img/breadcrumb.jpg')}}">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Video Tour</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>

				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="index.html">Home</a></li>
						<li class="current"><a href="#">Video Tour</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!--Video Section-->
		<section id="video-section">
			<div class="inner-container container">
				<div class="ravis-title-t-2">
					<div class="title"><span>Video Tour</span></div>
					<div class="sub-title">Watch our promotional video</div>
				</div>

				<div class="content clearfix">
					<iframe src="https://www.youtube.com/embed/23BFVDEdi-0" frameborder="0" allowfullscreen></iframe>
					<div class="desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi assumenda pariatur deleniti maxime dolore earum labore quo id facilis, in voluptas atque, saepe iusto autem ex voluptatem quis. Id dolores ex quo quidem doloremque soluta voluptas, amet, obcaecati, exercitationem quia velit! Voluptate voluptas, nam perspiciatis recusandae aperiam ullam repellendus iure consequatur eius sed enim ipsum tenetur esse labore qui maiores ex incidunt adipisci, ducimus dolor nemo minima fugit. Provident, corporis.
					</div>
				</div>
			</div>
		</section>
		<!--End of Video Section-->

@endsection()