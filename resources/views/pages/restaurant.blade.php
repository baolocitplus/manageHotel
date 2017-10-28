@extends('master')
@section('content')

		<!--Breadcrumb Section-->
		<section id="breadcrumb-section" data-bg-img="{{asset('assets/img/breadcrumb-restaurant.jpg')}}">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Colosseum Restaurant</div>
						<div class="sub-title">Welcome to our luxury restaurant</div>
					</div>
				</div>
				<div class="desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cumque dicta dolor doloremque
					ducimus facilis fuga inventore itaque iure iusto laudantium minima officiis provident quam quas
					quasi quo quod, ratione sapiente sint soluta temporibus voluptatibus! Atque aut consequatur deserunt
					ipsa nesciunt, vitae voluptatem. Alias asperiores dicta illum magnam nesciunt praesentium sapiente
					totam! Ad architecto, commodi dolor, dolorum earum illum laudantium magnam modi nulla omnis porro
					possimus saepe suscipit vitae voluptatem?
				</div>
			</div>
		</section>
		<!--End of Breadcrumb Section-->

		<!--Welcome Section-->
		<section id="welcome-section" class="has-user">
			<div class="inner-container container">
				<div class="l-sec col-md-7">
					<div class="ravis-title-t-1">
						<div class="title"><span>Professional Staff</span></div>
						<div class="sub-title">Enjoy to be our guest in our restaurant</div>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium architecto debitis et
						eum exercitationem minus mollitia non, quibusdam veritatis. A ad alias, aliquam amet, assumenda
						atque beatae blanditiis consequatur dolorum error id incidunt ipsa maxime minima neque nesciunt
						nulla odit officia porro quaerat repellendus sapiente sit temporibus, tenetur veritatis vero
						voluptatem voluptatum. Dolorum excepturi expedita facere iusto, porro quas repudiandae sequi.
						Amet eius maxime, molestiae quaerat quis sed voluptas.
					</div>
					<cite>Adam Collins - Hotel Chef</cite>
				</div>
				<div class="r-sec col-md-5">
					<div class="user-img-box">
						<div class="inner-box">
							<img src="{{asset('assets/img/chef.png')}}" alt="Adam Collins - Hotel Chef">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End of Welcome Section-->

		<!-- Special Dishes -->
		<section id="special-dishes">
			<div class="inner-container container">
				<div class="ravis-title">
					<div class="inner-box">
						<div class="title">Special Dishes</div>
						<div class="sub-title">Choose one of our international dishes</div>
					</div>
				</div>
				<div class="dishes-container">
					<ul class="dishes-main-box clearfix">
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="#" class="more-details">
									<img src="{{asset('assets/img/dishes/3.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="#">
										<span class="title-box">
											<span class="title">Lasagna</span>
											<span class="sub-title">Price : $55</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-8">
							<figure>
								<a href="#" class="more-details">
									<img src="{{asset('assets/img/dishes/1.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="#">
										<span class="title-box">
											<span class="title">Filet De meat</span>
											<span class="sub-title">Price : $150</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dicta, dolorem laborum quam qui temporibus?
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="#" class="more-details">
									<img src="{{asset('assets/img/dishes/5.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="#">
										<span class="title-box">
											<span class="title">Crab With Curry Sources</span>
											<span class="sub-title">Price : $130</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-8">
							<figure>
								<a href="#" class="more-details">
									<img src="{{asset('assets/img/dishes/2.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="#">
										<span class="title-box">
											<span class="title">Steak Meat</span>
											<span class="sub-title">Price : $100</span>
										</span>
										<span class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dicta, dolorem laborum quam qui temporibus?
										</span>
									</a>
								</figcaption>
							</figure>
						</li>
						<li class="item col-xs-6 col-md-4">
							<figure>
								<a href="#" class="more-details">
									<img src="{{asset('assets/img/dishes/4.jpg')}}" alt="11"/>
								</a>
								<figcaption>
									<a href="#">
										<span class="title-box">
											<span class="title">Grilled Salmon Sushi</span>
											<span class="sub-title">Price : $95</span>
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
		<!-- End of Special Dishes -->

		<!--Promo Section-->
		<section id="promo-section" data-bg-img="{{asset('assets/img/restaurant-promo.jpg')}}">
			<div class="ravis-title">
				<div class="inner-box">
					<div class="sub-title">Enjoy of different tastes in our</div>
					<div class="title">Luxury Restaurant</div>
				</div>
			</div>
		</section>
		<!--End of Promo Section-->

		<!--Restaurant Menu Section-->
		<section id="restaurant-menus">
			<div class="inner-container container">
				<div class="t-sec">
					<div class="ravis-title-t-2">
						<div class="title"><span>Restaurant Menus</span></div>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis consectetur culpa
						deserunt expedita impedit labore nam. At aut ducimus earum error esse exercitationem expedita
						hic, inventore nemo officiis repellat rerum similique, sunt totam ut voluptatem, voluptatum?
						Architecto assumenda autem earum, eius est exercitationem, in pariatur perspiciatis placeat
						tenetur, ut!
					</div>
				</div>
				<div class="b-sec clearfix">
					<div class="col-md-4 tab-container">
						<a href="#menu-1" class="tab-box active">
							<span class="title">Breakfast</span>
							<span class="sub-title">Healthy Dishes</span>
						</a>
						<a href="#menu-2" class="tab-box">
							<span class="title">Lunch</span>
							<span class="sub-title">Delicious Dishes</span>
						</a>
						<a href="#menu-3" class="tab-box">
							<span class="title">Dinner</span>
							<span class="sub-title">Flavoured Dishes</span>
						</a>
					</div>
					<div class="col-md-8 tab-content" data-bg-img="{{asset('assets/img/menu-tabs/1.jpg')}}">
						<div class="tab-pane fadeInLeft clearfix active" id="menu-1" data-img-name="{{asset('assets/img/menu-tabs/1.jpg')}}">
							<div class="chef-selection col-md-6 fadeInLeft">
								<div class="ravis-title-t-2">
									<div class="title"><span>Imported Salmon Steak</span></div>
									<div class="sub-title"><span>Chef Selection</span></div>
								</div>
							</div>
							<div class="menu-list col-md-6 fadeInLeft">
								<ul>
									<li>
										<div class="price">$14.10</div>
										<div class="title">Smoked Salmon</div>
									</li>
									<li>
										<div class="price">$13.30</div>
										<div class="title">Steak Tartare, Truffle Aioli</div>
									</li>
									<li>
										<div class="price">$15.60</div>
										<div class="title">Hand Harvested Sea Scallops</div>
									</li>
									<li>
										<div class="price">$12.35</div>
										<div class="title">Warm Maine Lobster</div>
									</li>
									<li>
										<div class="price">$6.10</div>
										<div class="title">Cold Foie Gras Torchon</div>
									</li>
									<li>
										<div class="price">$13.30</div>
										<div class="title">Quince Compote</div>
									</li>
									<li>
										<div class="price">$15.60</div>
										<div class="title">Grand Seafood Platter</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-pane fadeInLeft clearfix" id="menu-2" data-img-name="{{asset('assets/img/menu-tabs/2.jpg')}}">
							<div class="chef-selection col-md-6 fadeInLeft">
								<div class="ravis-title-t-2">
									<div class="title"><span>Crab With Curry Sources</span></div>
									<div class="sub-title"><span>Chef Selection</span></div>
								</div>
							</div>
							<div class="menu-list col-md-6 fadeInLeft">
								<ul>
									<li>
										<div class="price">$14.10</div>
										<div class="title">Creamy French Onion Soup</div>
									</li>
									<li>
										<div class="price">$13.30</div>
										<div class="title">Composition of French Cheeses</div>
									</li>
									<li>
										<div class="price">$15.60</div>
										<div class="title">Shrimp Cocktail</div>
									</li>
									<li>
										<div class="price">$12.35</div>
										<div class="title">Cold Foie Gras Torchon</div>
									</li>
									<li>
										<div class="price">$6.10</div>
										<div class="title">Osetra Royal Caviar</div>
									</li>
									<li>
										<div class="price">$13.30</div>
										<div class="title">Duck Prosciutto</div>
									</li>
									<li>
										<div class="price">$15.60</div>
										<div class="title"> Spiced Feuilletine</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-pane fadeInLeft clearfix" id="menu-3" data-img-name="{{asset('assets/img/menu-tabs/3.jpg')}}">
							<div class="chef-selection col-md-6 fadeInLeft">
								<div class="ravis-title-t-2">
									<div class="title"><span>Grilled Salmon Sushi</span></div>
									<div class="sub-title"><span>Chef Selection</span></div>
								</div>
							</div>
							<div class="menu-list col-md-6 fadeInLeft">
								<ul>
									<li>
										<div class="price">$14.10</div>
										<div class="title">Northern woods mushroom soup</div>
									</li>
									<li>
										<div class="price">$13.30</div>
										<div class="title">Ontario burrata</div>
									</li>
									<li>
										<div class="price">$15.60</div>
										<div class="title">Venison tartare</div>
									</li>
									<li>
										<div class="price">$12.35</div>
										<div class="title">Wild &amp; tame greens</div>
									</li>
									<li>
										<div class="price">$6.10</div>
										<div class="title">S’mores foie gras</div>
									</li>
									<li>
										<div class="price">$13.30</div>
										<div class="title">Coastal half dozen oysters</div>
									</li>
									<li>
										<div class="price">$15.60</div>
										<div class="title">Baby gem lettuce</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End of Restaurant Menu Section-->

@endsection()