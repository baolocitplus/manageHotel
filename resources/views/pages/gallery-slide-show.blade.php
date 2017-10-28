
@extends('master')
@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="{{asset('assets/img/breadcrumb.jpg')}}">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Gallery - Slide Show</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>

				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li class="current"><a href="#">Gallery - Slide Show</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<div id="slide-show-section" class="container">
			<div id="slide-show">
				<div id="main-image-slider">
					<div class="items">
						<img src="{{asset('assets/img/gallery/1.jpg')}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>Classic</span> Lobby</div>
						</div>
					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/2.jpg')}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>Luxury</span> Furniture</div>
						</div>
					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/3.jpg')}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>King</span> Bedroom</div>
						</div>
					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/4.jpg')}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>Home</span> Office</div>
						</div>
					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/5.jpg')}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>Warn &amp; Beautiful</span> Places</div>
						</div>
					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/6.jpg')}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>Full Furnished</span> Office</div>
						</div>
					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/7.jpg')}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>Clean &amp; Luxury</span> Bedroom</div>
						</div>
					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/8.jpg')}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>Staying</span> Room</div>
						</div>
					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/9.jpg')}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>Great</span> Views</div>
						</div>
					</div>
				</div>
				<div id="thumbnail-slider">
					<div class="items">
						<img src="{{asset('assets/img/gallery/1.jpg')}}" alt="">

					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/2.jpg')}}" alt="">

					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/3.jpg')}}" alt="">

					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/4.jpg')}}" alt="">

					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/5.jpg')}}" alt="">

					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/6.jpg')}}" alt="">

					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/7.jpg')}}" alt="">

					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/8.jpg')}}" alt="">

					</div>
					<div class="items">
						<img src="{{asset('assets/img/gallery/9.jpg')}}" alt="">

					</div>
				</div>
			</div>
			<div class="desc">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi assumenda pariatur deleniti maxime
				dolore earum labore quo id facilis, in voluptas atque, saepe iusto autem ex voluptatem quis. Id dolores
				ex quo quidem doloremque soluta voluptas, amet, obcaecati, exercitationem quia velit! Voluptate
				voluptas, nam perspiciatis recusandae aperiam ullam repellendus iure consequatur eius sed enim ipsum
				tenetur esse labore qui maiores ex incidunt adipisci, ducimus dolor nemo minima fugit. Provident,
				corporis.
			</div>

		</div>

@endsection()
	