/***********************
Apartment HTML Site Template
Author: Jan Skwara - http://themeforest.net/user/johnnychaos
***********************/





/********** SETTINGS **********/	


var stickyHeader = true; // true or false - set to true if you want to heave sticky menu (stays always on the top of the srceen
var boxed = false; // true or false - set to true if you want to heave boxed layout (page width 1300px);
var imageDownloadEnabled = true;  // true or false - set to true if you want to allow visitors to download photos in lightGallery view
var mapStyle = [{"featureType":"landscape","stylers":[{	"hue":"#FFBB00"	},{	"saturation":43.400000000000006},{"lightness":37.599999999999994},{	"gamma":1}]},{"featureType":"road.highway",	"stylers":[	{"hue":"#FFC200"},{	"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},	{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},	{"featureType":"road.local",	"stylers":[	{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},	{"featureType":"water","stylers":[	{"hue":"#0078FF"	},	{"saturation":-13.200000000000003},	{"lightness":2.4000000000000057},{"gamma":1}]},	{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}];
//mapStyle is a color scheme for google maps. You can choose or design your own scheme here: https://snazzymaps.com/
var disableMobileHover = true; //you can disable some on-hover feature like flipping offers, when browsing on the mobile.
var wowAnimationMobile = false; //you can WOW animations (sections sliding when on viewport) on mobile.



/********** SETTINGS END **********/	



"use strict";




/********** MOBILE AND IE DETECTION **********/		



/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-pointerevents-touchevents-setclasses !*/
!function(e,n,t){function o(e,n){return typeof e===n}function s(){var e,n,t,s,i,a,r;for(var f in d)if(d.hasOwnProperty(f)){if(e=[],n=d[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(s=o(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)a=e[i],r=a.split("."),1===r.length?Modernizr[r[0]]=s:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=s),l.push((s?"":"no-")+r.join("-"))}}function i(e){var n=c.className,t=Modernizr._config.classPrefix||"";if(p&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(o,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),p?c.className.baseVal=n:c.className=n)}function a(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):p?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function r(){var e=n.body;return e||(e=a(p?"svg":"body"),e.fake=!0),e}function f(e,t,o,s){var i,f,l,d,u="modernizr",p=a("div"),v=r();if(parseInt(o,10))for(;o--;)l=a("div"),l.id=s?s[o]:u+(o+1),p.appendChild(l);return i=a("style"),i.type="text/css",i.id="s"+u,(v.fake?v:p).appendChild(i),v.appendChild(p),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(n.createTextNode(e)),p.id=u,v.fake&&(v.style.background="",v.style.overflow="hidden",d=c.style.overflow,c.style.overflow="hidden",c.appendChild(v)),f=t(p,e),v.fake?(v.parentNode.removeChild(v),c.style.overflow=d,c.offsetHeight):p.parentNode.removeChild(p),!!f}var l=[],d=[],u={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){d.push({name:e,fn:n,options:t})},addAsyncTest:function(e){d.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=u,Modernizr=new Modernizr;var c=n.documentElement,p="svg"===c.nodeName.toLowerCase(),v=u._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];u._prefixes=v;var h=function(){function e(e,n){var s;return e?(n&&"string"!=typeof n||(n=a(n||"div")),e="on"+e,s=e in n,!s&&o&&(n.setAttribute||(n=a("div")),n.setAttribute(e,""),s="function"==typeof n[e],n[e]!==t&&(n[e]=t),n.removeAttribute(e)),s):!1}var o=!("onblur"in n.documentElement);return e}();u.hasEvent=h;var m="Moz O ms Webkit",g=u._config.usePrefixes?m.toLowerCase().split(" "):[];u._domPrefixes=g,Modernizr.addTest("pointerevents",function(){var e=!1,n=g.length;for(e=Modernizr.hasEvent("pointerdown");n--&&!e;)h(g[n]+"pointerdown")&&(e=!0);return e});var w=u.testStyles=f;Modernizr.addTest("touchevents",function(){var t;if("ontouchstart"in e||e.DocumentTouch&&n instanceof DocumentTouch)t=!0;else{var o=["@media (",v.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");w(o,function(e){t=9===e.offsetTop})}return t}),s(),i(l),delete u.addTest,delete u.addAsyncTest;for(var y=0;y<Modernizr._q.length;y++)Modernizr._q[y]();e.Modernizr=Modernizr}(window,document);

function isIE () {
  var myNav = navigator.userAgent.toLowerCase();
  return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
}

var mobile = false; 
var ie = false;
var ie9 = false;
if (isIE() && isIE() <= 9) {
	ie9 = true;
	ie = true;
	jQuery('html').addClass('ie9');
} else if ( isIE() || navigator.appVersion.indexOf('Trident/') > 0 ){
	ie = true;
}
if( ( $('html').hasClass('pointerevents') || $('html').hasClass('touchevents' ) ) && !ie && w_width < 1025) {
	jQuery('html').addClass('mobile');
	mobile = true;
}




var w_height = jQuery(window).height();
var w_width = jQuery(window).width();
var estateMap = false;
var panorama = false;
var staticDescHeight = 0;

jQuery(document).ready(function($) {
	
	
	
/********** BOXED LAYOUT **********/
	
	
	
	if( boxed ) {
		$('#wrapper').addClass("boxed");
		$('header').addClass("boxed");
	}
	
	
	
	/********** FULLSCREEN SECTION SIZE **********/	

		
		
		if( $("#swiper1").length ) {
			var sliderHeight;
			var sliderDescTop;
			if( w_height > 850 || w_width < 481 ) {
				sliderHeight = 	w_height - $('header').innerHeight();
				sliderDescTop = sliderHeight - $('.adv-search-cont').innerHeight() - 70;
			} else if( w_height < 500 ) {
				sliderHeight = 600;
				sliderDescTop = 100;
			} else  {
				sliderHeight = 910;
				sliderDescTop = 420;
			}
			$("#swiper1").css('height', sliderHeight + 'px');
			$("#swiper1 .container").each( function() {
				$(this).css('top', sliderDescTop - $(this).innerHeight() + 'px')
			});
		}
		
		if( $("#swiper2").length ) {
			var sliderHeight;
			var sliderDescTop;
			staticDescHeight = $(".swiper2-static-desc .slide-desc").innerHeight();
			if( w_height > 500 ) {
				sliderHeight = 	w_height;
				sliderDescTop = sliderHeight - staticDescHeight - 170;
			} else {
				sliderHeight = 600;
				sliderDescTop = 100;
			}
			$("#swiper2").css('height', sliderHeight + 'px');
			$(".swiper2-static-desc").css('top', sliderDescTop + 'px');
		}
			
		if( $("#swiper-gallery").length ) {
			var sliderHeight;
			if( w_height > 650  || w_width < 481 ) {
				sliderHeight = 	w_height - $('header').innerHeight() - $('.thumbs-slider').outerHeight();
			} else {
				sliderHeight = 500;
			}
			$("#swiper-gallery").css('height', sliderHeight + 'px');
			$("#swiper-gallery .slide-desc-col").css('height', sliderHeight + 'px');
		}
		
		if( $("#offers-map").length ) {
			var mapHeight;
			if( mobile ) {
				mapHeight = w_height - $('header').innerHeight() - 30;
			} else if( w_height > 650 ) {
				mapHeight = w_height - $('header').innerHeight();
			} else  {
				mapHeight = 600;
			}
			$("#offers-map").css('height', mapHeight + 'px');
		}
		
		if( $(".offers-map2").length ) {
			var mapHeight;
			if( mobile ) {
				mapHeight = w_height - 30;
			} else if( w_height > 650 ) {
				mapHeight = w_height;
			} else {
				mapHeight = 600;
			}
			$(".offers-map2").css('height', mapHeight + 'px');
		}
		
		if( $("#full-street-view").length ) {
			var sliderHeight;
			var sliderDescTop;
			staticDescHeight = $(".swiper2-static-desc .slide-desc").innerHeight();
			if( w_height > 500 ) {
				sliderHeight = 	w_height;
				sliderDescTop = sliderHeight - staticDescHeight - 170;
			} else {
				sliderHeight = 600;
				sliderDescTop = 100;
			}
			$("#full-street-view").css('height', sliderHeight + 'px');
			$(".swiper2-static-desc").css('top', sliderDescTop + 'px');
		}	
	
});

jQuery(window).load(function() {
		jQuery('html').ApartmentOnload();
	});

(function( $ ){
	$.fn.ApartmentOnload = function() {
		
		
		
/********** SWIPER - HOMEPAGE SLIDER **********/
	
	
	
	if( $("#swiper1").length ) {
		//initialize swiper when document ready  
		swiper1 = new Swiper ('#swiper1', {
			// Optional parameters
			nextButton: '.slide-next',
			prevButton: '.slide-prev',
			loop: true,
			grabCursor: true,
			preloadImages: false,
			lazyLoading: true,
			lazyLoadingInPrevNext: true,
			loopAdditionalSlides: 0,
			autoplay: 7000,
			speed: 700
		});
		
		var slidesSum = $(".swiper-slide").length;
		$(".slide-desc-1").addClass("slide-desc-" + (slidesSum - 1));
		$(".slide-desc-" + (slidesSum - 2)).addClass("slide-desc-0");

		swiper1.on('onTransitionEnd', function () {
			$(".slide-desc-" + swiper1.previousIndex).removeClass("fadeInDown");
			$(".slide-desc-" + swiper1.previousIndex).addClass("fadeOutDown");
			$(".slide-desc-" + swiper1.activeIndex).removeClass("fadeOutDown");
			$(".slide-desc-" + swiper1.activeIndex).addClass("fadeInDown");
		});
	}
	
	
	
/********** SWIPER - HOMEPAGE SLIDER 2 **********/
	
	
	
	if( $("#swiper2").length ) {
		//initialize swiper when document ready  
		swiper2 = new Swiper ('#swiper2', {
			// Optional parameters
			nextButton: '.slide-next',
			prevButton: '.slide-prev',
			loop: true,
			grabCursor: true,
			lazyLoading: true,
			lazyLoadingInPrevNext: true,
			loopAdditionalSlides: 0,
			autoplay: 5000,
			speed: 700
		});
		
		var slidesSum = $(".swiper-slide").length;
		$(".slide2-desc-1").addClass("slide2-desc-" + (slidesSum - 1));
		$(".slide2-desc-" + (slidesSum - 2)).addClass("slide2-desc-0");

		swiper2.on('onTransitionEnd', function () {
			$(".slide2-desc-" + swiper2.previousIndex).removeClass("fadeInDown");
			$(".slide2-desc-" + swiper2.previousIndex).addClass("fadeOutDown");
			$(".slide2-desc-" + swiper2.activeIndex).removeClass("fadeOutDown");
			$(".slide2-desc-" + swiper2.activeIndex).addClass("fadeInDown");
		});
	}
	
	
	
/********** SWIPER - PHOTO GALLERY SLIDER **********/
	
	
	
		if( $("#swiper-gallery").length ) {
			//initialize swiper when document ready  
			gallerySwiper = new Swiper ('#swiper-gallery', {
				// Optional parameters
				nextButton: '.slide-next',
				prevButton: '.slide-prev',
				loop: true,
				grabCursor: true,
				preloadImages: false,
				lazyLoading: true,
				lazyLoadingInPrevNext: true,
				loopAdditionalSlides: 0,
				autoplay: 5000,
				speed: 700
			});
			
			var slidesSum = $("#swiper-gallery .swiper-slide").length;
			$(".gallery-slide-desc-1").addClass("gallery-slide-desc-" + (slidesSum - 1));
			$(".gallery-slide-desc-" + (slidesSum - 2)).addClass("gallery-slide-desc-0");

			gallerySwiper.on('onTransitionEnd', function () {
				$(".gallery-slide-desc-" + gallerySwiper.previousIndex).removeClass("fadeInUp");
				$(".gallery-slide-desc-" + gallerySwiper.previousIndex).addClass("fadeOutUp");
				$(".gallery-slide-desc-" + gallerySwiper.activeIndex).removeClass("fadeOutUp");
				$(".gallery-slide-desc-" + gallerySwiper.activeIndex).addClass("fadeInUp");
			});		
			
			gallerySwiper.on('onSlideChangeStart', function () {
				if( $("#swiper-thumbs").length ) {
					if(gallerySwiper.activeIndex == (slidesSum - 1) ) {
						thumbsSwiper.slideTo(0);
					} else {	
						thumbsSwiper.slideTo(gallerySwiper.activeIndex-2);
					}
				}
				$( "#slide-more-cont a" ).css('z-index', 10);
				$( "#slide-more-cont a.num-" + gallerySwiper.activeIndex ).css('z-index', 20);
				
			});
			
			$("#swiper-gallery .swiper-slide").each( function(index) {
				var imageHref = $(this).children('.slide-bg').first().attr('data-background');
				var imageDescr = $(this).children('.slide-bg').first().attr('data-sub-html');
				if (typeof imageDescr === "undefined") {
					imageDescr = "";
				}
				var num = index;

				if( ! $(this).hasClass('swiper-slide-duplicate') ) {
					$( "#slide-more-cont" ).append( '<a href="' + imageHref + '" class="navigation-box navigation-box-more slide-more num-' + num + '" ' + ((typeof imageDescr !== "undefined")? ' data-sub-html="' + imageDescr : '') + '"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont fa-lg">&#xe813;</i></div></a>' );
				}
			});
			$( "#slide-more-cont a.num-1" ).css('z-index', 20);
		}
	
	
		if( $("#swiper-thumbs").length ) {
			var slideIndex;
			//initialize swiper when document ready  
			var thumbsSwiper = new Swiper ('#swiper-thumbs', {
				// Optional parameters
				nextButton: '.thumb-next',
				prevButton: '.thumb-prev',
				spaceBetween: 15,
				centeredSlides: false,
				slidesPerView: 'auto',
				touchRatio: 0.2,
				slideToClickedSlide: false
			});
			
			$("#swiper-thumbs .swiper-slide").click(function() {
				gallerySwiper.slideTo(thumbsSwiper.clickedIndex+1);
			});
		}

		
/********** ANIMATED SECTIONS **********/	



			if( $('.wow').length ) {
				new WOW({ mobile: wowAnimationMobile }).init();
			}
			
		
		
/********** MENU  **********/


		
		$('.dropdown-menu').hover(
			function() {
				$(this).parent().children('a').addClass( "hover-menu" );
			}, function() {
				$(this).parent().children('a').removeClass( "hover-menu" );
			}
		);
		
		

/********** RANGE SLIDER **********/


		
		$(".slider-range").each( function( index ) {
			var sliderId = $( this ).attr('id');
			if( sliderId === "slider-range-price-identify" ){
				setTimeout(function(){
					$('#slider-range-price-identify').find('.ui-slider-handle').append("<p class='tooltip-box'>0</p>");
				},100);
				var current_house_value = parseFloat( $('#apartment').find('.current-value .title-price').text().split('.').join(''));
				var current_land_value = parseFloat( $('#land').find('.current-value .title-price').text().split('.').join(''));

				$( this ).slider({
				    range: false,
					min:  parseFloat($( this ).attr("data-min")),
					max: parseFloat($( this ).attr("data-max")),
					value: 100,
					slide: function( event, ui ) {
						var min_val = ui.value;					
						$( "#" + sliderId + "-land-total-value" ).text( (current_land_value*ui.value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));  // land total value
						$( "#" + sliderId + "-apartment-total-value").text( (current_house_value*ui.value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));	// apartment total value
						$('.tooltip-box').text( ui.value);							
					}
				});		
				$( "#" + sliderId + "-land-total-value" ).text( (current_land_value*$( this ).slider( "value")).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")); 
				$( "#" + sliderId + "-apartment-total-value").text( (current_house_value*$( this ).slider( "value")).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));	
				var initial_val = $( this ).slider( "value");
				setTimeout(function(){
					$('#slider-range-price-identify').find('.tooltip-box').text(initial_val);
				},110);
					
			} 
			else{			
				$( this ).slider({
				    range: true,
					min:  parseFloat($( this ).attr("data-min")),
					max: parseFloat($( this ).attr("data-max")),
					values: [ parseFloat($( this ).attr("data-min")), parseFloat($( this ).attr("data-max")) ],
					slide: function( event, ui ) {
						var min_val = ui.values[ 0 ];
						var max_val = ui.values[ 1 ];
						if( $(this).hasClass('for-area') ){
							if( min_val === 500 ){
								max_val = "> 500";
								$( "#" + sliderId + "-value" ).val( max_val + " m2" );
							}
							else if(max_val === 0){
								min_val = 0;
								$( "#" + sliderId + "-value" ).val( min_val + " m2" );
							}
							else if(min_val === max_val || max_val === min_val){
								$( "#" + sliderId + "-value" ).val( min_val + " m2" );
							}
							else{
								$( "#" + sliderId + "-value" ).val( min_val + "" + " - " + max_val + " m2" );
							}						
						}
						else if( $(this).hasClass('for-price') ){						
							if( min_val === 100 ){
								max_val = "> 100";
								$( "#" + sliderId + "-value" ).val( max_val + " tỷ đồng" );
							}
							else if(max_val === 0){
								min_val = "< 1";
								$( "#" + sliderId + "-value" ).val( min_val + " tỷ đồng" );
							}
							else if(min_val === max_val || max_val === min_val){
								$( "#" + sliderId + "-value" ).val( min_val + " tỷ đồng" );
							}
							else if(min_val === 0){
								$( "#" + sliderId + "-value" ).val( min_val + " - " + max_val + " tỷ đồng" );
							}
							else{
								$( "#" + sliderId + "-value" ).val( min_val + " - " + max_val + " tỷ đồng" );
							}	
						}
						else{
							$( "#" + sliderId + "-value" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
						}
					}
				});
				if( $(this).hasClass('for-area') ){
						$( "#" + sliderId + "-value" ).val( $( this ).slider( "values", 0 ) + " " + " - " + $( this ).slider( "values", 1 ) + " m2" );
					}
				else if( $(this).hasClass('for-price') ){
						$( "#" + sliderId + "-value" ).val( $( this ).slider( "values", 0 ) + " " + " - " + $( this ).slider( "values", 1 ) + " tỷ đồng" );
					}
				else{
					$( "#" + sliderId + "-value" ).val( $( this ).slider( "values", 0 ) + " - " + $( this ).slider( "values", 1 ) );
					}
			}
		
		});


/********** LIGHTGALLERY INITIALIZATION **********/

		
	
		if( $("#slide-more-cont").length ) {	
			$("#slide-more-cont").lightGallery({
				thumbnail:false,
				download: imageDownloadEnabled,
				autoplay: false
			}); 
		}		
		
		if( $(".gallery-grid-lg").length ) {	
			$(".gallery-grid-lg").lightGallery({
				thumbnail:false,
				download: imageDownloadEnabled,
				autoplay: false
			}); 
		}
	

		
/********** OWL CAROUSELS **********/

	
	
		if( $("#team-owl").length ) {
			$("#team-owl").owlCarousel({
				items : 4,
				itemsDesktop : [1182,3],
				itemsDesktopSmall : [974,2],
				itemsTablet: [750,2],
				itemsTabletSmall: false,
				itemsMobile : [479,1],
				pagination: false
			});
			
			var teamOwl  = $("#team-owl").data('owlCarousel');
			$("#team-owl-next").click( function ( event ) {
				event.preventDefault();
				teamOwl.next();
			});	
			$("#team-owl-prev").click( function ( event ) {
				event.preventDefault();
				teamOwl.prev();
			});
		}
		
		if( $("#grid-offers-owl").length ) {
			$("#grid-offers-owl").owlCarousel({
				items : 4,
				itemsDesktop : [1182,3],
				itemsDesktopSmall : [974,2],
				itemsTablet: [750,2],
				itemsTabletSmall: false,
				itemsMobile : [479,1],
				mouseDrag: false, 
				pagination: false
			});
			
			var gridOffersOwl  = $("#grid-offers-owl").data('owlCarousel');
			$("#grid-offers-owl-next").click( function ( event ) {
				event.preventDefault();
				gridOffersOwl.next();
			});	
			$("#grid-offers-owl-prev").click( function ( event ) {
				event.preventDefault();
				gridOffersOwl.prev();
			});
		}

		if( $("#featured-offers-owl").length ) {	
			$("#featured-offers-owl").owlCarousel({
				items : 3,
				itemsDesktop : [1182,2],
				itemsDesktopSmall : [974,2],
				itemsTablet: [750,2],
				itemsTabletSmall: false,
				itemsMobile: [479,1],
				mouseDrag: false
			});
			
			var featuredOffersOwl  = $("#featured-offers-owl").data('owlCarousel');
			$("#featured-offers-owl-next").click( function ( event ) {
				event.preventDefault();
				featuredOffersOwl.next();
			});	
			$("#featured-offers-owl-prev").click( function ( event ) {
				event.preventDefault();
				featuredOffersOwl.prev();
			});
		}
		
		if( $("#neighbourhood-owl").length ) {	
			$("#neighbourhood-owl").owlCarousel({
				items : 3,
				itemsDesktop : [1182,2],
				itemsDesktopSmall : [974,2],
				itemsTablet: [750,2],
				itemsTabletSmall: false,
				itemsMobile: [479,1],
				mouseDrag: true
			});
			
			var featuredOffersOwl  = $("#neighbourhood-owl").data('owlCarousel');
			$("#neighbourhood-owl-next").click( function ( event ) {
				event.preventDefault();
				featuredOffersOwl.next();
			});	
			$("#neighbourhood-owl-prev").click( function ( event ) {
				event.preventDefault();
				featuredOffersOwl.prev();
			});
		}
		
		if( $("#testimonials-owl").length ) {		
			$("#testimonials-owl").owlCarousel({
				items : 1, 
				itemsDesktop : [1182,1],
				itemsDesktopSmall : [974,1],
				itemsTablet: [750,1],
				itemsTabletSmall: false,
				itemsMobile: [479,1],
				pagination: false
			});
			
			var testimonialsOwl  = $("#testimonials-owl").data('owlCarousel');
			$("#testimonials-owl-next").click( function ( event ) {
				event.preventDefault();
				testimonialsOwl.next();
			});	
			$("#testimonials-owl-prev").click( function ( event ) {
				event.preventDefault();
				testimonialsOwl.prev();
			});
		}
		
		if( $("#short-offers-owl").length ) {	
			$("#short-offers-owl").owlCarousel({
				items : 3,
				itemsDesktop : [1182,2],
				itemsDesktopSmall : [974,2],
				itemsTablet: [750,2],
				itemsTabletSmall: false,
				itemsMobile: [479,1],
				mouseDrag: false,
				pagination: false
			});
			
			var shortOffersOwl  = $("#short-offers-owl").data('owlCarousel');
			$("#short-offers-owl-next").click( function ( event ) {
				event.preventDefault();
				shortOffersOwl.next();
			});	
			$("#short-offers-owl-prev").click( function ( event ) {
				event.preventDefault();
				shortOffersOwl.prev();
			});
		}	
		
		if( $("#short-team-owl").length ) {	
			$("#short-team-owl").owlCarousel({
				items : 3,
				itemsDesktop : [1182,2],
				itemsDesktopSmall : [974,2],
				itemsTablet: [750,2],
				itemsTabletSmall: false,
				itemsMobile: [479,1],
				mouseDrag: true,
				pagination: false
			});
			
			var shortTeamOwl  = $("#short-team-owl").data('owlCarousel');
			$("#short-team-owl-next").click( function ( event ) {
				event.preventDefault();
				shortTeamOwl.next();
			});	
			$("#short-team-owl-prev").click( function ( event ) {
				event.preventDefault();
				shortTeamOwl.prev();
			});
		}
		
		if( $("#logos-owl").length ) {
			$("#logos-owl").owlCarousel({
				items : 4,
				itemsDesktop : [1182,3],
				itemsDesktopSmall : [974,2],
				itemsTablet: [750,1],
				itemsTabletSmall: false,
				itemsMobile : [479,1],
				mouseDrag: true, 
				pagination: false
			});
			
			var logosOwl  = $("#logos-owl").data('owlCarousel');
			$("#logos-owl-next").click( function ( event ) {
				event.preventDefault();
				logosOwl.next();
			});	
			$("#logos-owl-prev").click( function ( event ) {
				event.preventDefault();
				logosOwl.prev();
			});
		}
		
		if( $("#short-logos-owl").length ) {
			$("#short-logos-owl").owlCarousel({
				items : 3,
				itemsDesktop : [1182,2],
				itemsDesktopSmall : [974,2],
				itemsTablet: [750,1],
				itemsTabletSmall: false,
				itemsMobile: [479,1],
				mouseDrag: true, 
				pagination: false
			});
			
			var shortLogosOwl  = $("#short-logos-owl").data('owlCarousel');
			$("#short-logos-owl-next").click( function ( event ) {
				event.preventDefault();
				shortLogosOwl.next();
			});	
			$("#short-logos-owl-prev").click( function ( event ) {
				event.preventDefault();
				shortLogosOwl.prev();
			});
		}		
		
		
		
/********** COUNTING NUMBERS **********/


				
		if( $('.count-container').length ) {
			var run = false;
			$('.count-container').appear();
			 $('.count-container').on('appear', function(event, $all_appeared) {
				if( ! run ) {
					run = true;
					$('.count').countTo('restart');
				}
			 });
			 $('.count-container').on('disappear', function(event, $all_appeared) {
				run = false;
			 });
		}
		
		
		
/********** PARALLAX SECTIONS **********/


		
		if( $('.parallax').length && w_width > 991 ) {
			$('.parallax').parallax("50%", 0.2);
		}
		
				
		
/********** SMOOTH SCROLLING **********/


			
		$(window).scroll(function () {
			
			if( stickyHeader ) {
				$('header').addClass("sticky-start");
				$('#wrapper').addClass("wrapper-sticky-start");
				
				if ($(this).scrollTop() > 1){  
					$('header').addClass("sticky");
					$('#wrapper').addClass("wrapper-sticky");
				}
				else {
					$('header').removeClass("sticky");
					$('#wrapper').removeClass("wrapper-sticky");
				}
			}	
			
			
			if ($(this).scrollTop() > 100) {
				$('.move-top').fadeIn();
			} else {
				$('.move-top').fadeOut();
			}
			
			
			var footer_h = $('footer.small-cont').innerHeight();
			var doc_height = $(document).height();
			var window_h = $(window).height();
			if ( doc_height - window_h - $(this).scrollTop() < footer_h ) {	
				if( !boxed || $(window).width() < 1230 ) {
					$('.move-top').css('bottom', (footer_h - ( doc_height - window_h - $(this).scrollTop() )) + 'px' );
				} else {
					$('.move-top').css('bottom','0px');
				}
			} else {
				$('.move-top').css('bottom','0px');
			}
			
			
		});

		$('.move-top .big-icon-second-color').click(function () {
			$("html, body").animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
		
		
		
		$('a.scroll[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
						}, 1000);
					return false;
				}
			}
		});

		
		
		
		
		
/********** TOOLTIP **********/

		
		
		$('[data-toggle="tooltip"]').tooltip();
		 
		 
		 
/********** HTML SELECT **********/
		 
		 
		 
		[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
			new SelectFx(el);
		});
		
		$('.bootstrap-select').selectpicker({
			 container: 'body',
			 selectedTextFormat: 'count > 2'
			 
		});
		
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
			$('.bootstrap-select').selectpicker('mobile');
		}
		
		//$('.bootstrap-select').selectpicker('deselectAll');	
		$( "select[name='transaction']" ).change(function() {
			var checkWord = $( "select[name='transaction']" ).val().split(" ");
			for(var i = 0; i < checkWord.length; i++){
				if( checkWord[i] === "thuê" ){
					$('.only-for-rent').addClass('active');
					break;
				}
				else {$('.only-for-rent').removeClass('active');}
			}
		})
		//$( "select[name='country1']" ).change(function() {
			//console.log( $( "select[name='country1']" ).val() );
		//});
	
		
/********** GRID LAYOUT **********/		



		$('.featured-offer-col').each( function () {
			var gh = 0; 
			gh += $(this).find('.featured-offer-photo').outerHeight();
			gh += $(this).find('.featured-offer-text').outerHeight();
			gh += $(this).find('.featured-price').outerHeight();
			gh += $(this).find('.featured-offer-params').outerHeight();
			$(this).stop(true, true).animate( { height: gh + 45 }, 0);
			$(this).find('.featured-offer-back').stop(true, true).animate( { height: gh - 40}, 0);
		});
		$('.grid-offer-col').each( function () {
			var gh = 0; 
			gh += $(this).find('.grid-offer-photo').outerHeight();
			gh += $(this).find('.grid-offer-text').outerHeight();
			gh += $(this).find('.price-grid-cont').outerHeight();
			gh += $(this).find('.grid-offer-params').outerHeight();
			$(this).find('.grid-offer').stop(true, true).animate( { height: gh }, 0);
			$(this).find('.grid-offer-back').stop(true, true).animate( { height: gh }, 0);
			//console.log($(this).find('.grid-offer-photo').outerHeight());
			//console.log($(this).find('.grid-offer-text').outerHeight());
			//console.log($(this).find('.price-grid-cont').outerHeight());
			//console.log($(this).find('.grid-offer-params').outerHeight());
			//console.log(gh);
		});
		$('.list-offer-left').each( function () {
			var gh = 0; 
			gh += $(this).find('.list-offer-photo').outerHeight();
			gh += $(this).find('.list-offer-photo-h').outerHeight();
			gh += $(this).find('.list-offer-params').outerHeight();
			console.log($(this).find('.list-offer-photo img').innerHeight());
			console.log($(this).find('.list-offer-params').innerHeight());
			console.log(gh);
			$(this).stop(true, true).animate( { height: gh - 30 }, 0);
			$(this).find('.list-offer-back').stop(true, true).animate( { height: gh + 20 }, 0);
		});	
		
		setTimeout(function(){ 
		$('.list-offer-left').each( function () {
			var gh = 0; 
			gh += $(this).find('.list-offer-photo').outerHeight();
			gh += $(this).find('.list-offer-photo-h').outerHeight();
			gh += $(this).find('.list-offer-params').outerHeight();
			$(this).stop(true, true).animate( { height: gh - 30 }, 0);
			$(this).find('.list-offer-back').stop(true, true).animate( { height: gh + 20 }, 0);
		});	
		}, 500);


		
/********** MASONRY LAYOUT **********/		


		
		if( $('.masonry-grid').length ) {
			$masonryGrid = $('.masonry-grid').isotope({
				itemSelector: '.masonry-grid-item',
				percentPosition: false,
				masonry: {
				  columnWidth: '.masonry-grid-sizer',
				  gutter: 30
				}
			})
		}
		
		if( $('.gallery-grid').length ) {
			$galleryGrid = $('.gallery-grid').isotope({
				itemSelector: '.gallery-grid-item',
				percentPosition: true,
				masonry: {
				  columnWidth: '.gallery-grid-sizer',
				}
			});
			$('.gallery-filter').click( function() {
				var filterValue = $(this).attr('data-filter');
				$galleryGrid.isotope({ filter: filterValue });
			});
		}
		
		
		
/********** FILE INPUT **********/	
		
		

		if( $('#file-upload').length ) {
				$('#file-upload').fileinput({
				uploadUrl: '#',
				allowedFileExtensions : ['jpg','png','gif'],
				showUpload: false,
				showRemove: false,
				browseClass: "button-shadow btn",
			});
		}
		
		if( $('#file-upload-ads-img').length ) {
				$('#file-upload-ads-img').fileinput({
				uploadUrl: '#',
				allowedFileExtensions : ['jpg','png','gif'],
				showUpload: false,
				showRemove: false,
				browseClass: "button-shadow btn",
			});
		}

		if( $('.title-file-upload').hasClass('agent-certificate') ){
			var title_upload_val = $(this).find('.title-upload').text();
			$(this).find('.btn-file').children('span').text(title_upload_val);
		}
		
/********** AGENT PHOTO UPLOAD **********/		
		
		
		
		$( "#agent-photo" ).change( function() {
			$( "#agent-file-name" ).val( $(this).val() );
			$( "#agent-file-name" ).fadeTo(500,1);
			$( "#agent-profile-photo" ).fadeTo(500,0.5);
		})

		
		
/********** ADVANCED SEARCH HIDE **********/		



		if( $("#adv-search-hide").length ) {
			$("#adv-search-hide").click(function(e) {
				e.preventDefault();
				if( $(this).hasClass('search-hidden') ) {
					$(".adv-search-cont").css('bottom', '45px');
					$(this).css('margin-top','18px');
					$(this).removeClass('adv-search-hide-rotate');
					$(this).removeClass('search-hidden');
					setTimeout(function(){ 
						$('.adv-search-section').css('overflow', 'visible'); 
					}, 1000);
					
				} else {
					$(".adv-search-cont").css('bottom', -$(".adv-search-cont").innerHeight() + 'px');
					$(this).css('margin-top','-50px');
					$(this).addClass('adv-search-hide-rotate');
					$(this).addClass('search-hidden');
					$('.adv-search-section').css('overflow', 'hidden'); 
				}
			})
		}

		
		
/********** MODALS **********/		
		
		
		var click;
		$( ".register-link" ).click( function() {
			$( "#login-modal").modal('hide');
			click = true;
			$('#login-modal').on('hidden.bs.modal', function () {
				if(click) $( "#register-modal").modal();
				click = false;
			})
			$('body').css('padding-right','0px');
		})
		
		$( ".login-link" ).click( function() {
			$( "#register-modal" ).modal('hide');
			click = true;
			$('#register-modal').on('hidden.bs.modal', function () {
				if(click) $( "#login-modal" ).modal();
				click = false;
			})
			$('body').css('padding-right','0px');
		})
		
		$( ".forgot-link" ).click( function() {
			$( "#login-modal" ).modal('hide');
			$( "#forgot-modal" ).modal();
			$('body').css('padding-right','0px');
		})
		
		$( "#login-modal" ).on('hidden.bs.modal', function (e) {
			$('body').css('padding-right','0px');
		})
		$( "#register-modal" ).on('hidden.bs.modal', function (e) {
			$('body').css('padding-right','0px');
		})
		$( "#forgot-modal" ).on('hidden.bs.modal', function (e) {
			$('body').css('padding-right','0px');
		})
		
		$(".register-link").on('shown.bs.modal', function (e) {
			$('body').css('padding-right','0px');
		})
		$(".login-link").on('shown.bs.modal', function (e) {
			$('body').css('padding-right','0px');
		})
		$(".forgot-link").on('shown.bs.modal', function (e) {
			$('body').css('padding-right','0px');
		})
		
		
		
/********** GEOCOMPLETE ON SUMBMIT PROPERTY PAGE **********/		

		
		
		if($("#geocomplete").length) {
			$("#geocomplete").geocomplete({
				map: "#submit-property-map",
				details: "form ",
				location: new google.maps.LatLng(10.7760546,106.70240910000007),
				mapOptions: {
					zoom: 14,
					scrollwheel: true,
					mapTypeId: "roadmap",
					disableDefaultUI: false,
					mapTypeControl: true,
					mapTypeControlOptions: {
						position: google.maps.ControlPosition.LEFT_TOP
					},
					zoomControl: true,
					zoomControlOptions: {
						position: google.maps.ControlPosition.RIGHT_TOP
					},
					scaleControl: true,
					streetViewControl: true,
					streetViewControlOptions: {
						position: google.maps.ControlPosition.RIGHT_TOP
					},
					styles: mapStyle         
				},
				markerOptions: {
					draggable: true,
					icon: 'http://localhost/face-house-vn/app/assets/images/pin-empty.png'
				}
			});
				
				$("#geocomplete").bind("geocode:dragged", function(event, latLng){
					$("input[name=lat]").val(latLng.lat());
					$("input[name=lng]").val(latLng.lng());
				});
			}
			
			//redraw map
			$("a[href='#tab-map']").click( function() {
				if( estateMap ) {
					setTimeout(function(){ 
						google.maps.event.trigger(estateMap,'resize');
					}, 500);
				}
			});
			$("a[href='#tab-street-view']").click( function() {
				if( panorama ) {
					setTimeout(function(){ 
						panorama.setVisible(true);
					}, 500);
				}
			});
		
		
		
/********** DISABLE MOBILE HOVER **********/		



		if( !disableMobileHover || !($('html').hasClass('mobile')) ) {
			$('html').addClass('no-pointerevents').addClass('no-touchevents');
			$('html').removeClass('pointerevents').removeClass('touchevents');
		} else {
			$('html').addClass('pointerevents').addClass('touchevents');
			$('html').removeClass('no-pointerevents').removeClass('no-touchevents');
		}
		if( ( ($('html').hasClass('pointerevents') || $('html').hasClass('touchevents')) && disableMobileHover ) || ie9 ) {
			//alert('has class');
			$('.featured-offer-col').css('cursor','pointer');
			$('.featured-offer-col').find(".button-primary").css('visibility','hidden');
			$('.grid-offer').css('cursor','pointer');
			$('.grid-offer').find(".button-primary").css('visibility','hidden');
			$('.featured-offer-col').click( function() {
				window.location.href = $(this).find(".button-primary").attr('href');
			});
			$('.grid-offer').click( function() {
				window.location.href = $(this).find(".button-primary").attr('href');	
			});
		}
		
		
		
/********** IE <=9 PLACEHOLDER FIX **********/	



		if(ie9) {		
			$('[placeholder]').focus(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}
			}).blur(function() {
				var input = $(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				}
				}).blur().parents('form').submit(function() {
					$(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				})
			});
		}
	
	

/********** ALL LOAD, REMOVE LOADER **********/				
		
		
		
		$(".loader-bg").fadeOut('slow');
	}
})(jQuery);




/********** ON WINDOW RESIZE ADJUSTMENTS **********/		




(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


window.setTimeout(function() {$(window).trigger("smartresize");},2000);


jQuery(window).smartresize(function(){
	w_height = jQuery(window).height();
	w_width = jQuery(window).width();
	if( $("#swiper1").length ) {
		var sliderHeight;
		var sliderDescTop;
		if( w_height > 850 || w_width < 481 ) {
			sliderHeight = 	w_height - $('header').innerHeight();
			sliderDescTop = sliderHeight - $('.adv-search-cont').innerHeight() - 70;
		} else if( w_height < 500 ) {
			sliderHeight = 600;
			sliderDescTop = 100;
		} else  {
			sliderHeight = 910;
			sliderDescTop = 420;
		}
		$("#swiper1").css('height', sliderHeight + 'px');
		$("#swiper1 .container").each( function() {
			$(this).css('top', sliderDescTop - $(this).innerHeight() + 'px')
		});
	}	
	if( $("#swiper2").length ) {
		var sliderHeight;
		var sliderDescTop;
		//staticDescHeight = $(".swiper2-static-desc").innerHeight();
		if( w_height > 500 ) {
			sliderHeight = 	w_height;
			sliderDescTop = sliderHeight - staticDescHeight - 170;
		} else {
			sliderHeight = 600;
			sliderDescTop = 100;
		}
		$("#swiper2").css('height', sliderHeight + 'px');
		$(".swiper2-static-desc").css('top', sliderDescTop + 'px');
	}
	if( $("#offers-map").length ) {
		var mapHeight;
		if( mobile ) {
			mapHeight = w_height - $('header').innerHeight() - 30;
		} else if( w_height > 650 ) {
			mapHeight = w_height - $('header').innerHeight();
		} else  {
			mapHeight = 600;
		}
		$("#offers-map").css('height', mapHeight + 'px');
	}
		
	if( $(".offers-map2").length ) {
		var mapHeight;
		if( mobile ) {
			mapHeight = w_height - 30;
		} else if( w_height > 650 ) {
			mapHeight = w_height;
		} else {
			mapHeight = 600;
		}
		$(".offers-map2").css('height', mapHeight + 'px');
	}
	if( $("#swiper-gallery").length ) {
		var sliderHeight;
		if( w_height > 650 || w_width < 481 ) {
			sliderHeight = 	w_height - $('header').innerHeight() - $('.thumbs-slider').outerHeight();
		} else {
			sliderHeight = 500;
		}
		$("#swiper-gallery").css('height', sliderHeight + 'px');
		$("#swiper-gallery .slide-desc-col").css('height', sliderHeight + 'px');
	}

	if( $("#full-street-view").length ) {
		var sliderHeight;
		var sliderDescTop;
		staticDescHeight = $(".swiper2-static-desc .slide-desc").innerHeight();
		if( w_height > 500 ) {
			sliderHeight = 	w_height;
			sliderDescTop = sliderHeight - staticDescHeight - 170;
		} else {
			sliderHeight = 600;
			sliderDescTop = 100;
		}
		$("#full-street-view").css('height', sliderHeight + 'px');
		$(".swiper2-static-desc").css('top', sliderDescTop + 'px');
	}
	
	if( $('.gallery-grid').length ) {
		$galleryGrid.isotope('layout');
	}
	
	if( $('.masonry-grid').length ) {
		$masonryGrid.isotope('layout');
	}
	
	$('.list-offer-left').each( function () {
		var gh = 0; 
		gh += $(this).find('.list-offer-photo').outerHeight();
		gh += $(this).find('.list-offer-photo-h').outerHeight();
		gh += $(this).find('.list-offer-params').outerHeight();
		$(this).stop(true, true).animate( { height: gh - 30 }, 0);
		$(this).find('.list-offer-back').stop(true, true).animate( { height: gh + 20 }, 0);
	});	
	
	$('.featured-offer-col').each( function () {
		var gh = 0; 
		gh += $(this).find('.featured-offer-photo').outerHeight();
		gh += $(this).find('.featured-offer-text').outerHeight();
		gh += $(this).find('.featured-price').outerHeight();
		gh += $(this).find('.featured-offer-params').outerHeight();
		$(this).stop(true, true).animate( { height: gh }, 0);
	});
	$('.grid-offer-col').each( function () {
		var gh = 0; 
		gh += $(this).find('.grid-offer-photo').outerHeight();
		gh += $(this).find('.grid-offer-text').outerHeight();
		gh += $(this).find('.price-grid-cont').outerHeight();
		gh += $(this).find('.grid-offer-params').outerHeight();
		$(this).find('.grid-offer').stop(true, true).animate( { height: gh }, 0);
		$(this).find('.grid-offer-back').stop(true, true).animate( { height: gh }, 0);
	});
	setTimeout(function(){ 
		$('.grid-offer-col').each( function () {
			var gh = 0; 
			gh += $(this).find('.grid-offer-photo').outerHeight();
			gh += $(this).find('.grid-offer-text').outerHeight();
			gh += $(this).find('.price-grid-cont').outerHeight();
			gh += $(this).find('.grid-offer-params').outerHeight();
			$(this).find('.grid-offer').stop(true, true).animate( { height: gh }, 0);
			$(this).find('.grid-offer-back').stop(true, true).animate( { height: gh }, 0);
		});
		$('.featured-offer-col').each( function () {
			var gh = 0; 
			gh += $(this).find('.featured-offer-photo').outerHeight();
			gh += $(this).find('.featured-offer-text').outerHeight();
			gh += $(this).find('.featured-price').outerHeight();
			gh += $(this).find('.featured-offer-params').outerHeight();
			$(this).stop(true, true).animate( { height: gh + 45 }, 0);
			$(this).find('.featured-offer-back').stop(true, true).animate( { height: gh - 40}, 0);
		});
		$('.list-offer-left').each( function () {
		var gh = 0; 
		gh += $(this).find('.list-offer-photo').outerHeight();
		gh += $(this).find('.list-offer-photo-h').outerHeight();
		gh += $(this).find('.list-offer-params').outerHeight();
		$(this).stop(true, true).animate( { height: gh - 30 }, 0);
		$(this).find('.list-offer-back').stop(true, true).animate( { height: gh + 20 }, 0);
	});	
	}, 600);
	
});



/********** GOOGLE MAPS **********/		



function mapInit(lat,lng,id, pinicon, ui, offset) {
	if( ui == false ) {
		ui= true;
	} else {
		ui = false;
	}
	if( w_width > 991 ) {
		offset = typeof offset !== 'undefined' ? 0.0075 : 0;
	} else {
		offset = 0;
	}
	var mapOptions = {
		zoom: 15,
		disableDefaultUI: ui,
        draggable: false,
        zoomControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
		mapTypeControlOptions: {
		position: google.maps.ControlPosition.LEFT_TOP
	},
	zoomControlOptions: {
		position: google.maps.ControlPosition.RIGHT_TOP
	},
	streetViewControlOptions: {
		position: google.maps.ControlPosition.RIGHT_TOP
	},
	center: new google.maps.LatLng(lat - offset, lng),
		styles: mapStyle
	};

	var mapElement = document.getElementById(id);
	var map = new google.maps.Map(mapElement, mapOptions);

	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(lat, lng),
		map: map,
		title: '',
		icon: pinicon
	});
	if( id == "estate-map" ) {
		estateMap = map;
	}
}

function mapInitAddress(address,id, pinicon, ui, offset) {
	if( ui == false ) {
		ui= true;
	} else {
		ui = false;
	}
	if( w_width > 991 ) {
		offset = typeof offset !== 'undefined' ? 0.0075 : 0;
	} else {
		offset = 0;
	}
	var mapOptions = {
		zoom: 15,
		disableDefaultUI: ui,
		mapTypeControlOptions: {
		position: google.maps.ControlPosition.LEFT_TOP
	},
	zoomControlOptions: {
		position: google.maps.ControlPosition.RIGHT_TOP
	},
	streetViewControlOptions: {
		position: google.maps.ControlPosition.RIGHT_TOP
	},
		styles: mapStyle
	};
	

	var mapElement = document.getElementById(id);
	var map = new google.maps.Map(mapElement, mapOptions);

	var geocoder = new google.maps.Geocoder();
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location,
				title: '',
			icon: pinicon
			});
		} else {
			alert("Geocode was not successful for the following reason: " + status);
		}
	});
	
	if( id == "estate-map" ) {
		estateMap = map;
	}
}




/********** GOOGLE STREET VIEW ON OFFER DETAILS **********/					
			
			
			
function streetViewInit(mlat,mlng,id,rotate) {
	var fenway = {lat: mlat, lng: mlng};
	panorama = new google.maps.StreetViewPanorama(
	document.getElementById(id), {
		position: fenway,
		scrollwheel: false,
		pov: {
		  heading: 34,
		  pitch: 10
		}
	});
	
	if(typeof rotate !== 'undefined' && rotate) {
			var move = true;
			$("#" + id).on("click", function () {
				move = false;
			});
			$("#" + id).on("mouseleave", function () {
				move = true;
			});
		window.setInterval(function() {
			if ( move ) {
				var pov = panorama.getPov();
				pov.heading -= 0.05;
				panorama.setPov(pov);
			}
		}, 10);
	}
}

function streetViewInitId(panoId,id,rotate) {
	google.maps.streetViewViewer = 'photosphere';
	panorama = new google.maps.StreetViewPanorama(
	document.getElementById(id), {
		 pano: "F:" + panoId.replace('%2F','/'),
		scrollwheel: false,
		pov: {
		  heading: 34,
		  pitch: 10
		}
	});
	
	if(typeof rotate !== 'undefined' && rotate) {
			var move = true;
			$("#" + id).on("click", function () {
				move = false;
			});
			$("#" + id).on("mouseleave", function () {
				move = true;
			});
		window.setInterval(function() {
			if ( move ) {
				var pov = panorama.getPov();
				pov.heading -= 0.05;
				panorama.setPov(pov);
			}
		}, 10);
	}
}



/********** BIG OFFERS MAP WITH INFOBOXES **********/		


			
function offersMapInit(id, locations) {
	var mapOptions = {
		zoom: 15,
		disableDefaultUI: false,
		mapTypeControl: true,
		mapTypeControlOptions: {
			position: google.maps.ControlPosition.LEFT_TOP
		},
		zoomControl: true,
		zoomControlOptions: {
			position: google.maps.ControlPosition.RIGHT_CENTER
		},
		scaleControl: true,
		streetViewControl: true,
		streetViewControlOptions: {
			position: google.maps.ControlPosition.RIGHT_CENTER
		},
		scrollwheel: false,
		center: new google.maps.LatLng(locations[0][0], locations[0][1]),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: mapStyle
	};
	var mapElement = document.getElementById(id);

	var map = new google.maps.Map(mapElement, mapOptions);
	var LatLngList = [];
	var i = 0;
	var mapMarkers = [];
	for (i = 0; i < locations.length; i++) {
		var pos = new google.maps.LatLng(locations[i][0], locations[i][1]);
		var marker = new google.maps.Marker({
			position: pos,
			map: map,
			title: '',
			icon: locations[i][2]
		});
				
		mapMarkers[i] = marker;
				
		var infoBoxContent = document.createElement("div");
		infoBoxContent.className = "infobox-wrapper";
		infoBoxContent.innerHTML = "<a class='infobox-main' href='" + locations[i][3] + "'><div class='infobox-image'><img src='" + locations[i][4] + "' alt='" + locations[i][5] + "' /></div><div class='infobox-text'>" + locations[i][5] + "</div><div class='infobox-price'>" + locations[i][6] + "</div></a>";
		mapMarkers[i].infobox = new InfoBox({
			content: infoBoxContent,
			disableAutoPan: false,
			pixelOffset: new google.maps.Size(30, -150),
			zIndex: null,
			 boxStyle: {	
					},
			closeBoxMargin: "0px",
			closeBoxURL: "http://localhost/face-house-vn/app/assets/images/infobox-close.png",
			infoBoxClearance: new google.maps.Size(1, 1)
		});
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
						var j = 0;
                        for (j = 0; j < mapMarkers.length; j++) {
                            mapMarkers[j].infobox.close();
                        }
                        mapMarkers[i].infobox.open(map, this);
                    }
                })(marker, i));
		LatLngList[i] = pos;
	}
			
	var bounds = new google.maps.LatLngBounds();
	for (var i = 0, LtLgLen = LatLngList.length; i < LtLgLen; i++) {
		bounds.extend(LatLngList[i]);
	}
	map.fitBounds(bounds);
				
	var markerClusterStyle = [{
		url: 'http://localhost/face-house-vn/app/assets/images/pin-empty.png',
		height: 80,
		width: 48,
		textSize: 16,
		textColor: '#3798dd'
	}];
	var markerCluster = new MarkerClusterer(map, mapMarkers, {styles:markerClusterStyle});
	minClusterZoom = 14;
	markerCluster.setMaxZoom(minClusterZoom);
	
	var oms = new OverlappingMarkerSpiderfier(map, {markersWontMove: true, markersWontHide: true, keepSpiderfied: true, legWeight: 2 });
	
	for (var i = 0; i < mapMarkers.length; i ++) {
		oms.addMarker(mapMarkers[i]);  // <-- here
	}
}

/*********  icon   *******************/

$('.new-message').click(function(e){
	e.preventDefault();
});
$('.logout').click(function(e){
	e.preventDefault();
})

/*************** Category Blog ****************/

$('.wrap-dropdown .dropdown-menu li').on('click', function(e){
	e.preventDefault();
	var text = $(this).children('a').text();
	$('.wrap-dropdown #category').val(text);
	$('.wrap-dropdown .dropdown-menu li').removeClass('selected');
	$(this).addClass('selected');
});

/*************** datetimepicker ****************/
$('#datetimepicker1').datetimepicker();

/*************** selected ****************/

$('.icon-unit').on('click', function(){
	if( $(this).hasClass('one-selected') ){
		$('.one-selected').removeClass('selected');
		$(this).addClass('selected');
	}
	else{
		$(this).toggleClass('selected');
	}
	
});


/*************** property price identify  ********************/

$(".property-price-identify").each(function(){
	var property_attrId = $(this).attr('id');
	var property_selector = $('#'+property_attrId);
	var min_value = parseFloat( property_selector.find('.min-value .title-price').text().split('.').join('')),
		max_value = parseFloat( property_selector.find('.max-value .title-price').text().split('.').join('')),
		current_value = parseFloat( property_selector.find('.current-value .title-price').text().split('.').join('')),
		max_location, current_location;
	property_selector.find('.min-value').css({ 'left': '40%' });
	max_location = ((max_value - min_value)*100)/max_value;
	current_location = ((max_value - current_value)*100)/max_value;
	property_selector.find('.max-value').css({ 'left': max_location+40+'%' });
	property_selector.find('.current-value').css({ 'left': (max_location - current_location) + 40 +'%' });
	property_selector.find('.background-value').css({ 'width': max_location+'%' });
});

$('.confidence ').click(function(e){
	e.preventDefault();
})

/**************** chat   ***********************************/

$('.fixed-chat').draggable({ handle: ".panel-heading" });

$('.wrapper-chat .panel-body').on( 'mousewheel DOMMouseScroll', function (e) { 
  
  var e0 = e.originalEvent;
  var delta = e0.wheelDelta || -e0.detail;

  this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
  e.preventDefault();  
});

$('.start-chat, .close-chat').on('click', function(e){
	e.preventDefault();
	$('.fixed-chat').toggleClass('active');
});

$('#btn-chat').click(function(){
	var your_message = $('#btn-input').val();
	var your_img = $('.your_avatar').attr('src');	
	var your_name = 'Veronica Green';
	$('.chat').append(
		'<li class="right clearfix">' + 
			'<span class="chat-img pull-right">' + 
				'<img src="'+ your_img +'" alt="User Avatar" class="img-circle">' + 
			'</span>' + 
			'<div class="chat-body clearfix">' +
		        '<div class="header">' +
		            '<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>16 phút trước</small>' + 
		            '<strong class="pull-right primary-font">'+ your_name +'</strong>' +
		        '</div>' +
		        '<p>' + your_message + '</p>' +
		    '</div>' +
		'</li>');
	$('#btn-input').val('');
});

/********************* read numbers by words  **************************************/



function getNumber(ele) {

    var read_number = function() {
	    var t = ["không", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín"],
	        r = function(r, n) {
	            var o = "",
	                a = Math.floor(r / 10),
	                e = r % 10;
	            return a > 1 ? (o = " " + t[a] + " mươi", 1 == e && (o += " mốt")) : 1 == a ? (o = " mười", 1 == e && (o += " một")) : n && e > 0 && (o = " lẻ"), 5 == e && a >= 1 ? o += " lăm" : 4 == e && a >= 1 ? o += " tư" : (e > 1 || 1 == e && 0 == a) && (o += " " + t[e]), o
	        },
	        n = function(n, o) {
	            var a = "",
	                e = Math.floor(n / 100),
	                n = n % 100;
	            return o || e > 0 ? (a = " " + t[e] + " trăm", a += r(n, !0)) : a = r(n, !1), a
	        },
	        o = function(t, r) {
	            var o = "",
	                a = Math.floor(t / 1e6),
	                t = t % 1e6;
	            a > 0 && (o = n(a, r) + " triệu", r = !0);
	            var e = Math.floor(t / 1e3),
	                t = t % 1e3;
	            return e > 0 && (o += n(e, r) + " ngàn", r = !0), t > 0 && (o += n(t, r)), o
	        };
	    return {
	        read: function(r) {
	            if (0 == r) return t[0];
	            var n = "",
	                a = "";
	            do ty = r % 1e9, r = Math.floor(r / 1e9), n = r > 0 ? o(ty, !0) + a + n : o(ty, !1) + a + n, a = " tỷ"; while (r > 0);
	            return n.trim() + " đồng"
	        }
	    }
	}();

    var number = Number(ele.value);
    if( isNaN(number) === true ){
    	number = 'Vui lòng nhập đúng số';
    }
    else if(number === 0){
    	number = '';
    }
    else{
    	number = read_number.read(number);
    }
    $('#read-number').val(number);
}


/********************** pick days in a week  ********************/

$('#pick-all').on('click', function(event) {   
    if(this.checked) {
        $('.day').each(function() {
            this.checked = true;                        
        });
    }
    else{
    	$('.day').each(function() {
            this.checked = false;                        
        });
    }
});

$('.day').click(function(){
	var checkbox_days = parseInt($('.day').length);
	var how_many_checked_boxes = parseInt($("input[type='checkbox'].day").filter(":checked").length);
	if( how_many_checked_boxes === checkbox_days){
		$('#pick-all').prop('checked', true);
	}
	else{
		$('#pick-all').prop('checked', false);
	}
});


/********************** delete property  *************************/

$('.btn-delete-property').click(function(e){
	e.preventDefault();
	var clear_Timeout = setTimeout(";");
		for (let j = 0 ; j < clear_Timeout ; j++) {
		    clearTimeout(j); 
	}
	$( "#unfollow-property" ).modal('hide');
	$( "#delete-property" ).modal('hide');
	$( "#delete-question" ).modal('hide');
	$( "#delete-blog" ).modal('hide');
	$('.success-box').removeClass('hide');
	var addHide =  setTimeout(function(){
		$('.success-box').addClass('hide');
	},5000);
	
	var offter_ele = $('.success-box').offset().top;
	$('html, body').animate({
	    scrollTop: offter_ele - 100
	},100);
  
});


/*************** highlight menu item when it is selected  **************************/

var url_selected = window.location.href;
console.log(url_selected);
$('.main-menu-cont .navbar-nav > li').each(function(){
	if( $(this).hasClass('dropdown') ){
		var dropdown_items = $(this).children('.dropdown-menu').children('li').length;
		for( var i = 0; i < dropdown_items; i++ ){
			if( $(this).children('.dropdown-menu').children('li').eq(i).find('a').attr('href') === url_selected ){
				$(this).addClass('selected');
				$(this).children('.dropdown-menu').children('li').eq(i).addClass('selected');
			}
		}	
	}
	else{
		if( $(this).find('a').attr('href') === url_selected ){
			$(this).addClass('selected');
		}
	}	
});

$('.center-button-cont').each(function(){
	if( $(this).find('a').attr('href') === url_selected ){
		$(this).addClass('selected');
	}
});

/********************  show grid or list in for-rent and for-sale page  ************************/

$('.view-box').click(function(e){
	e.preventDefault();
	$('.view-box').removeClass('view-box-active');
	$(this).toggleClass('view-box-active');
	if( $('.show-grid').hasClass('view-box-active') ){
		$('.grid-offer-row').addClass('visible');
		$('.list-offer-row').removeClass('visible');
	}
	else if( $('.show-list').hasClass('view-box-active')  ){
		$('.grid-offer-row').removeClass('visible');
		$('.list-offer-row').addClass('visible');
	}
})

/************************* property detail ***************************/
$('#collapseFour').addClass('in');
setTimeout(function(){
	$('#collapseFour').removeClass('in');
},2000)

/************************** property optimize page ***************************/
$('.btn-next').click(function(e){
	e.preventDefault();
	var this_index = parseInt($(this).attr('index'));
	// console.log(this_index);
    $('.nav-stacked-po li').removeClass('active');
    $('.nav-stacked-po li').eq(this_index).addClass('active');
    setTimeout(function(){
    	var get_id = $('.tab-pane-po').eq(this_index).attr('data-scroll-to');
	    var offter_ele = $(get_id).offset().top;
	    // console.log(get_id);
	    // console.log(offter_ele);
	    $('html, body').animate({
		    scrollTop: offter_ele - 100
		},100);
    }, 200);
});

/********************  property price identify *********************/

$('.btn-identify').click(function(e){
	e.preventDefault();
	var this_index = $(this).attr('index');
	console.log(this_index);
	$('.apartment-tabs .nav-tabs li').removeClass('active');
	$('.apartment-tabs .nav-tabs li a').attr('aria-expanded','false');
	$('.apartment-tabs .nav-tabs li').eq(this_index).addClass('active');
	$('.apartment-tabs .nav-tabs li').eq(this_index).children('a').attr('aria-expanded','true');
	setTimeout(function(){
    	var get_id = $('.apartment-tabs .nav-tabs li').eq(this_index).children('a').attr('data-scroll-to');
	    var offter_ele = $(get_id).offset().top;
	    $('html, body').animate({
		    scrollTop: offter_ele - 100
		},100);
    }, 200);
});

$('#price-identify-result').addClass('active');
setTimeout(function(){
	$('#price-identify-result').removeClass('active');
},1000);

/*******************  ***************************/
function scroll_loading() {
	
	var wrap_offset_top_grid = $('.for-sale-land-grid').offset().top;
	var wrap_height_grid = $('.for-sale-land-grid').height() + wrap_offset_top_grid - 100;
	var yOffSet_grid = window.pageYOffset;
	var y_grid = yOffSet_grid + window.innerHeight;	

	var wrap_offset_top_list = $('.for-sale-land-list').offset().top;
	var wrap_height_list = $('.for-sale-land-list').height() + wrap_offset_top_list + 150;
	var yOffSet_list = window.pageYOffset;
	var y_list = yOffSet_list + window.innerHeight;	
	
	if( y_grid > wrap_height_grid){
		id_map_grid += 1;
		$('.for-sale-land-grid').append(
			'<div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col fixed-height">' +
				'<div class="grid-offer">' + 
					'<div class="grid-offer-front">' +
						'<div class="grid-offer-photo">' +
							'<div class="status-offer">' +
								'Mới bán' +				
							'</div>' +
							'<img src="../../../public/assets/images/grid-offer1.jpg" alt="" />' +
							'<div class="type-container">' +
								'<div class="estate-type">Căn hộ</div>' +
								'<div class="transaction-type">Cho thuê</div>'+
							'</div>'+
						'</div>' +
						'<div class="grid-offer-text">' +
							'<i class="fa fa-map-marker grid-offer-localization"></i>' +
							'<div class="grid-offer-h4"><h4 class="grid-offer-title">Số 34 quận x phường y, Việt Nam</h4></div>' +
							'<div class="clearfix"></div>' +
							'<p>Theo JLL, chỉ có 7.800 trong số 25.000 đơn vị nhà ở đã được bàn giao ở Dubai trong năm 2015. Như vậy là thấp hơn so với dự đoán của các nhà phân tích...</p>' +
							'<div class="clearfix"></div>'+
						'</div>' +
						'<div class="price-grid-cont">' +
							'<div class="grid-price-label pull-left">Giá:</div>'+
							'<div class="grid-price pull-right">320 triệu</div>'+
							'<div class="clearfix"></div>'+
						'</div>' +
						'<div class="grid-offer-params">' +
							'<div class="grid-area">'+
								'<img src="../../../public/assets/images/area-icon.png" alt="" />54m<sup>2</sup>'+
							'</div>'+
							'<div class="grid-rooms">'+
								'<img src="../../../public/assets/images/rooms-icon.png" alt="" />3'+
							'</div>'+
							'<div class="grid-baths">'+
								'<img src="../../../public/assets/images/bathrooms-icon.png" alt="" />1'+
							'</div>'+
							'<div class="grid-likes">'+
								'<i class="fa fa-rss" aria-hidden="true"></i>'+
								'<span>1</span>'+
							'</div>'+
						'</div>' +
					'</div>' +
					'<div class="grid-offer-back">' +
						'<div id=' + '"' + 'grid-map' + id_map_grid + '"' + 'class="grid-offer-map"></div>'+
						'<div class="button">'+
							'<a href="<?php echo DOC_ROOT_PATH ?>app/views/home/property-details.php" class="button-primary">'+
								'<span>Chi tiết</span>'+
								'<div class="button-triangle"></div>'+
								'<div class="button-triangle2"></div>'+
								'<div class="button-icon"><i class="fa fa-search"></i></div>'+
							'</a>'+
						'</div>'+
					'<div>' +
				'</div>' + 
			'</div>'
		);
	}

	if( y_list > wrap_height_list){
		id_map_list += 1;
		$('.for-sale-land-list').append(
			'<div class="list-offer">'+
				'<div class="list-offer-left">'+
					'<div class="list-offer-front">'+
						'<div class="list-offer-photo">'+
							'<div class="status-offer">'+
								'Mới bán'+
							'</div>'+
							'<img src="../../../public/assets/images/grid-offer1.jpg" alt="" />'+
							'<div class="type-container">'+
								'<div class="estate-type">Nhà đất</div>'+
								'<div class="transaction-type">Cho thuê</div>'+
							'</div>'+
						'</div>'+
						'<div class="list-offer-params">'+
							'<div class="grid-area">'+
								'<img src="../../../public/assets/images/area-icon.png" alt="" />54m<sup>2</sup>'+
							'</div>'+
							'<div class="grid-rooms">'+
								'<img src="../../../public/assets/images/rooms-icon.png" alt="" />3'+
							'</div>'+
							'<div class="grid-baths">'+
								'<img src="../../../public/assets/images/bathrooms-icon.png" alt="" />1'+
							'</div>'+
							'<div class="grid-likes">'+
								'<i class="fa fa-rss" aria-hidden="true"></i>'+
								'<span>1</span>'+
							'</div>'+	
						'</div>'+
					'</div>'+
					'<div class="list-offer-back">'+
						'<div id="" class="list-offer-map">'+
							'<div id=' + '"' + 'list-map' + id_map_list + '"' + 'class="list-offer-map" ></div>'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<a class="list-offer-right" href="../../../app/views/home/property-details.php">'+
					'<div class="list-offer-text">'+
						'<i class="fa fa-map-marker list-offer-localization hidden-xs"></i>'+
						'<div class="list-offer-h4"><h4 class="list-offer-title">Số 34 quận x phường y, Việt Nam</h4></div>'+
						'<div class="clearfix"></div>'+
						'Theo JLL, chỉ có 7.800 trong số 25.000 đơn vị nhà ở đã được bàn giao ở Dubai trong năm 2015. Như vậy là thấp hơn so với dự đoán của các nhà phân tích và các nhà phát triển bất động sản trong thời gian qua.'+
						'<div class="clearfix"></div>'+
					'</div>'+
					'<div class="price-list-cont">'+
						'<div class="list-price">'+
							'320 triệu'+
						'</div>'+
					'</div>'+
				'</a>'+
				'<div class="clearfix"></div>'+
			'</div>'
		);
	}

}
id_map_grid = 0;
id_map_list = 0;
window.onscroll = scroll_loading;

/********************* submit property  ****************************/

$('.btn-submit-property').click(function(e){
	e.preventDefault();
	$('.valid-check').append(
		'<div class="tooltip bottom" role="tooltip">'+
			'<div class="tooltip-arrow"></div>'+
			'<div class="tooltip-inner">'+
				' Không hợp lệ! '+
			'</div>'+
		'</div>'
	);
	var offter_ele = $('.property').offset().top;
	$('html, body').animate({
	    scrollTop: offter_ele - 150
	},100);

	$('.error-box').removeClass('hide');
	var addHide =  setTimeout(function(){
		$('.error-box').addClass('hide');
	},5000);
});

$('.valid-check .labelled-input').click(function(){
	$(this).siblings('.tooltip').remove();
});