$(document).ready(function () {
	$('.carousel').carousel();

	$('#carrossel-personagens').slick({
		mobileFirst: true,
		centerMode: true,
		centerPadding: '65px',
		slidesToShow: 1,
		responsive: [{
			breakpoint: 575,
			settings: {
				centerMode: true,
				centerPadding: '65px',
				slidesToShow: 3
			}
		}, {
			breakpoint: 768,
			settings: {
				centerMode: true,
				centerPadding: '65px',
				slidesToShow: 5
			}
		}]
	});
});