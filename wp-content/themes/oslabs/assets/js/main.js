(function ($) {
"use strict";

// meanmenu
$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "991"
});
//mobile side menu
$('.side-toggle').on('click', function () {
	$('.side-info').addClass('info-open');
	$('.offcanvas-overlay').addClass('overlay-open');
})

$('.side-info-close,.offcanvas-overlay').on('click', function () {
	$('.side-info').removeClass('info-open');
	$('.offcanvas-overlay').removeClass('overlay-open');
})
$('.oslabs-bar-btn-114').on('click', function() {
	$('.oslabs-overlay').addClass('visible');
	$('.oslabs-mobile-menu-114').addClass('visible');
})
$('.oslabs-mobile-icon-cross, .oslabs-overlay').on('click', function() {
	$('.oslabs-overlay').removeClass('visible');
	$('.oslabs-mobile-menu-114').removeClass('visible');
})

function sliderActive() {
	/*------------------------------------
	Slider
	--------------------------------------*/
	if (jQuery(".oslabs-testimonial-active-1").length > 0) {
		let testimonialActive = '.oslabs-testimonial-active-1';
		let testimonialSliderActiveInit = new Swiper(testimonialActive, {
			// Optional parameters
			slidesPerView: 4,
			paginationClickable: true,
			loop: true,
			grabCursor: true,
			spaceBetween: 20,
			scrollbar: {
				el: ".oslabs-testimonial-scrollbar-1",
			  },
			autoplay: {
				delay: 5000,
			},
			breakpoints: {
				320: {
				  slidesPerView: 1,
				  spaceBetween: 0
				},
				768: {
				  slidesPerView: 2,
				  spaceBetween: 20
				},
				992: {
				  slidesPerView: 2,
				  spaceBetween: 20
				},
				1200: {
				  slidesPerView: 3,
				  spaceBetween: 20
				},
				1400: {
					slidesPerView: 3,
					spaceBetween: 20
				},
				1600: {
					slidesPerView: 4,
					spaceBetween: 20
				}
			  }
		});
	}}
$('.has-nice-select').niceSelect();
// data background
$("[data-background]").each(function(){
	$(this).css("background-image","url("+$(this).attr("data-background") + ") ")
})
// data background color
$("[data-bgcolor]").each(function(){
	$(this).css("background-color",$(this).attr("data-bg-color"))
})
// scrollToTop
$.scrollUp({
	scrollName: 'scrollUp', // Element ID
	topDistance: '300', // Distance from top before showing element (px)
	topSpeed: 300, // Speed back to top (ms)
	animation: 'fade', // Fade, slide, none
	animationInSpeed: 200, // Animation in speed (ms)
	animationOutSpeed: 200, // Animation out speed (ms)
	scrollText: '<i class="icofont icofont-long-arrow-up"></i>', // Text for element
	activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});

sliderActive();


var CB_Testimonial = function($scope, $) {
	$scope.find('.oslabs-testimonial-active-1').each(function() {
		if (jQuery(".oslabs-testimonial-active-1").length > 0) {
			let testimonialSliderActiveInit = new Swiper('.oslabs-testimonial-active-1', {
				// Optional parameters
				slidesPerView: 4,
				paginationClickable: true,
				loop: true,
				grabCursor: true,
				spaceBetween: 20,
				scrollbar: {
					el: ".oslabs-testimonial-scrollbar-1",
				  },
				autoplay: {
					delay: 5000,
				},
				breakpoints: {
					320: {
					  slidesPerView: 1,
					  spaceBetween: 0
					},
					768: {
					  slidesPerView: 2,
					  spaceBetween: 20
					},
					992: {
					  slidesPerView: 2,
					  spaceBetween: 20
					},
					1200: {
					  slidesPerView: 3,
					  spaceBetween: 20
					},
					1400: {
						slidesPerView: 3,
						spaceBetween: 20
					},
					1600: {
						slidesPerView: 4,
						spaceBetween: 20
					}
				  }
			});
		}
	});
}


$( window ).on( 'elementor/frontend/init', function() {
	elementorFrontend.hooks.addAction( 'frontend/element_ready/cb-testimonial.default', CB_Testimonial );
} );
})(jQuery);