$(document).ready(function() {
	$('.hero-slider').slick({
		prevArrow: $('.hero-arrows__left'),
		nextArrow: $('.hero-arrows__right'),
		dots: true,
		dotsClass: "my-dots",
		autoplay: true,
		autoplaySpeed: 4000,
	});
});