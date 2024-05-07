$(document).ready(function () {

	"use strict";

	/* =================================
	LOADER 
	=================================== */
	$(".loader").delay(400).fadeOut();
	$(".animationload").delay(400).fadeOut("fast");

	var bgi = $("[data-background]");
	bgi.length > 0 && bgi.each(function () {
		var e = $(this),
			t = e.attr('data-background');
		e.css({ 'background-image': 'url(' + t + ')' });
	});

	var progressBar = $('.progress-bar');
	progressBar.length > 0 && progressBar.each(function () {
		var e = $(this),
			t = e.attr('aria-valuenow');
		e.css({ 'width': t + '%' });
	});

	/* =================================
	NAVBAR 
	=================================== */
	var top = jQuery(document).scrollTop();
	var batas = 200;
	var navbar = jQuery('.navbar-main');
	var navbarnav = jQuery('.navbar-nav');
	var header = jQuery('.header');
	navbar.addClass('stiky');


	if (top > batas) {
		navbar.addClass('stiky');
		//navbarnav.addClass('ml-auto');
	}
	jQuery(window).scroll(function () {

		top = jQuery(document).scrollTop();


		if (top > batas) {
			//navbar.addClass('stiky');
		} else {
			//navbar.removeClass('stiky');
			if (header.hasClass('header-2')) {
				//navbarnav.removeClass('ml-auto');
			}
			if (header.hasClass('header-5')) {
				//navbarnav.removeClass('ml-auto');
			}
		}

	});

	/* =================================
	BANNER ROTATOR IMAGE 
	=================================== */
	var slides = $(".full-screen"),
		b = slides.find('.item');
	// b.each(function () {
	// 	var e = $(this),
	// 		ocImg = e.find('img').attr('src');
	// 	e.css({ 'background-image': 'url(' + ocImg + ')' });
	// });

	slides.owlCarousel({
		// stagePadding: 50,
		loop: true,
		autoplay: true,
		autoplayTimeout: 4000,
		// margin: 10,
		nav: true,
		animateOut: 'fadeOut', // Use 'fadeOut' for a smoother fade effect

		navText: [
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_left.png'>",
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_right.png'>",
		],

		navContainer: '.custom-nav',
		items: 1,
	});

	/* =================================
	BACK TO TOP 
	=================================== */
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function () {
		($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if ($(this).scrollTop() > offset_opacity) {
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function (event) {
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0,
		}, scroll_top_duration
		);
	});


	/* =================================
	OWL
	=================================== */
	var carousel_1 = $("#testimonial");
	carousel_1.owlCarousel({
		items: 1,
		loop: true,
		nav: false,
		autoplay: true
	});
	// zoom effect
	var cardSlide = $("#card-slide");

	cardSlide.owlCarousel({
		loop: true,
		nav: true,
		autoplay: true,
		navText: [
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_left.png'>",
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_right.png'>"
		],
		dots: false,
		responsive: {
			0: {
				items: 1,
				dots: true,  // Display dots on small screens
				dotsClass: 'custom-dots'
			},
			600: {
				items: 2,
				dots: true  // Hide dots on screens between 600px and 900px wide
			},
			900: {
				items: 3,
				dots: true  // Hide dots on screens 900px and wider
			},
			1500: {
				items: 3,
				dots: true  // Hide dots on screens 900px and wider
			}
		}
	});

	// zoom effect

	var cardSlide = $(".package_slider");

	cardSlide.owlCarousel({
		loop: true,
		nav: true,
		autoplay: true,
		navText: [
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_left.png'>",
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_right.png'>"
		],
		dots: false,
		responsive: {
			0: {
				items: 1,
				dots: true,  // Display dots on small screens
				dotsClass: 'custom-dots'
			},
			600: {
				items: 2,
				dots: true  // Hide dots on screens between 600px and 900px wide
			},
			900: {
				items: 3,
				dots: true  // Hide dots on screens 900px and wider
			},
			1500: {
				items: 3,
				dots: true  // Hide dots on screens 900px and wider
			}
		}
	});
	var cardSlide = $("#ongoing_project");

	cardSlide.owlCarousel({
		loop: true,
		nav: true,
		autoplay: true,
		navText: [
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_left.png'>",
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_right.png'>"
		],
		dots: false,
		responsive: {
			0: {
				items: 1,
				dots: true,  // Display dots on small screens
				dotsClass: 'custom-dots'
			},
			600: {
				items: 2,
				dots: true  // Hide dots on screens between 600px and 900px wide
			},
			900: {
				items: 3,
				dots: true  // Hide dots on screens 900px and wider
			},
			1500: {
				items: 3,
				dots: true  // Hide dots on screens 900px and wider
			}
		}
	});
	var cardSlide = $("#upcoming_project");

	cardSlide.owlCarousel({
		loop: true,
		nav: true,
		autoplay: true,
		navText: [
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_left.png'>",
			"<img src='https://baganbariltd.com/frontend/image/completed_project/arrow_right.png'>"
		],
		dots: false,
		responsive: {
			0: {
				items: 1,
				dots: true,  // Display dots on small screens
				dotsClass: 'custom-dots'
			},
			600: {
				items: 2,
				dots: true  // Hide dots on screens between 600px and 900px wide
			},
			900: {
				items: 3,
				dots: true  // Hide dots on screens 900px and wider
			},
			1500: {
				items: 3,
				dots: true  // Hide dots on screens 900px and wider
			}
		}
	});





	/* =================================
	MAGNIFIC POPUP
	=================================== */
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});

	$('.grid, .popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1]
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function (item) {
				return item.el.attr('title') + '';
			}
		}
	});

});






