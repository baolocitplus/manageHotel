@extends('master')
@section('content')

		<section id="event-top-section">
			<!-- Event Slider -->
			<section id="event-slider">
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/events/slider/1.jpg')}}"></div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/events/slider/3.jpg')}}"></div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/events/slider/2.jpg')}}"></div>
				</div>
				<div class="items">
					<div class="img-container" data-bg-img="{{asset('assets/img/events/slider/4.jpg')}}"></div>
				</div>
			</section>
			<!-- End of Event Slider -->
			<div class="inner-container container">
				<div class="event-title-box">
					<h1 class="title">Fashion Show</h1>
					<div class="sub-title">Designer : John Doe</div>
				</div>
				<div class="breadcrumb">
					<ul class="list-inline">
						<li><a href="#">Home</a></li>
						<li><a href="events.html">Events</a></li>
						<li class="current"><a href="#">Fashion Show</a></li>
					</ul>
				</div>
			</div>
		</section>

		<section class="event-desc">
			<div class="inner-container container">
				<form class="booking-form clearfix" action="#"><!-- Do Not remove the classes -->
					<div class="field-row">
						<input type="text" placeholder="Name" name="guest-name" required>
					</div>
					<div class="field-row">
						<input type="email" placeholder="Email" name="guest-email" required>
					</div>
					<div class="field-row">
						<input type="text" placeholder="Phone" name="guest-phone">
					</div>
					<div class="field-row">
						<select name="guest-count" placeholder="Guests" required>
							<option></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">+5</option>
						</select>
					</div>
					<div class="field-row">
						<input type="submit" value="Book Now">
					</div>
				</form>

				<div class="content">
					<div class="date-box">
						<div class="inner-box">
							Date : <span>2016 Octobere 15th</span>
						</div>
					</div>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto consequuntur corporis debitis dignissimos distinctio dolorem ea eaque enim error esse, eum ex exercitationem id ipsum laboriosam, minus molestias necessitatibus officiis placeat praesentium provident qui quisquam saepe tempora totam voluptatibus. A ad, at beatae, blanditiis deserunt dicta eveniet expedita explicabo id natus neque odio odit quas quibusdam ratione sed, sint voluptas. Alias at, dignissimos explicabo natus rerum ullam. Accusamus aspernatur cupiditate dolorem ducimus ea illum iusto labore, nihil odit perferendis reiciendis repudiandae veniam? A ab ad aliquid blanditiis, dolorem dolores et nobis, recusandae sed, tempore tenetur veritatis! Est molestias, necessitatibus.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi cumque cupiditate dolor dolore, esse est id ipsa laborum molestiae nesciunt nihil nisi officia, officiis provident quas quia quidem repudiandae saepe similique sint tempora, vitae voluptate? Aliquam asperiores corporis, cum earum eos esse et ex exercitationem facere inventore minima nemo neque officia officiis qui quibusdam quis ratione repellat rerum sint tempore, totam vero voluptatum. Aliquam consequuntur corporis ea illo similique!
					</p>
					<br>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum labore, quas! Aperiam eligendi enim eos laudantium mollitia nesciunt non quos voluptate. Dolores ducimus fuga fugit hic placeat. A accusamus aspernatur assumenda aut corporis culpa, cum cumque debitis deleniti dolor exercitationem illum modi, numquam praesentium provident quia ratione sunt veniam voluptatum.
					</p>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at beatae blanditiis deserunt fugit ipsum maxime minus nisi porro reprehenderit?</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda atque delectus eligendi error suscipit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eos facilis maxime non pariatur perferendis reiciendis veniam!</li>
					</ul>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, beatae, itaque. Consectetur excepturi fugit iste nam officia, placeat porro quam quasi quod reprehenderit, sint vel? Assumenda, delectus est et eveniet fuga fugiat inventore maiores modi numquam, odio optio possimus quia sint soluta vitae? Asperiores culpa, doloribus hic iste natus, necessitatibus nesciunt, nihil officia provident reiciendis suscipit tenetur veniam voluptatibus voluptatum?
					</p>
				</div>
			</div>
		</section>

		<!-- Past Events -->
		<section id="similar-events">
			<div class="inner-container container">

				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Similar Events</div>
						<div class="sub-title">Other events you might be interested in</div>
					</div>
				</div>

				<div class="event-container">
					<ul class="event-main-box clearfix">
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/8.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Car Fair</span>
											<span class="sub-title">By : Ferrari</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/7.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Annual Cooking Fair</span>
											<span class="sub-title">Presenter : Jenni Spark</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="event-details.html" class="more-details">
									<img src="{{asset('assets/img/events/6.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="event-details.html">
										<span class="title-box">
											<span class="title">Interior Design Fair</span>
											<span class="sub-title">By : Interior Design Company</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End of Past Events -->
@endsection()