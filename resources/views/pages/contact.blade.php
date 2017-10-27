@extends('master')
@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="../assets/img/breadcrumb.jpg">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Contact Us</div>
						<div class="sub-title">Some description about your hotel</div>
					</div>
				</div>

				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li class="current"><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!--Contact Section-->
		<section id="contact-section">
			<div class="inner-container container">
				<div class="t-sec">
					<div class="ravis-title-t-2">
						<div class="title"><span>Contact Us</span></div>
						<div class="sub-title">Do not hesitate to contact me if you have any further questions</div>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
						labore
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
						ut
						aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
						sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
						iste
						natus error sit voluptatem accusantium doloremque.
					</div>

					<div class="contact-info">
						<div class="contact-inf-box">
							<div class="icon-box">
								<i class="fa fa-home"></i>
							</div>
							<div class="text">
								Vĩnh Hải - Nha Trang - Khánh Hòa
							</div>
						</div>
						<div class="contact-inf-box">
							<div class="icon-box">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="text">
								loknetvietnam@gmail.com
							</div>
						</div>
						<div class="contact-inf-box">
							<div class="icon-box">
								<i class="fa fa-phone"></i>
							</div>
							<div class="text">
								0165 915 0640
							</div>
						</div>
					</div>
				</div>

				<div class="b-sec clearfix">
					<div class="contact-form col-md-6">
						<form action="#">
							<div class="field-row">
								<input type="text" placeholder="Name :" required>
							</div>
							<div class="field-row">
								<input type="text" placeholder="Phone :">
							</div>
							<div class="field-row">
								<input type="email" placeholder="Email :" required>
							</div>
							<div class="field-row">
								<textarea placeholder="Your Message" required></textarea>
							</div>
							<div class="field-row">
								<input type="submit" value="Submit">
							</div>
						</form>
					</div>
					<div id="google-map" class="col-md-6" data-marker="{{asset('assets/img/marker.png')}}"></div>
				</div>
			</div>
		</section>
		<!--End of Contact Section-->

@endsection()