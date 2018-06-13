(function ($, root, undefined) {

	$(function () {

		'use strict';

		// ********************************

		$('.slider-home').slick({
			dots: true,
		    infinite: true,
		    speed: 2000,
			autoplay: true,
			slidesToScroll: 1,


		});

		$('.slider-histoire').slick({
			dots: true,
				infinite: true,
				speed: 2000,
			autoplay: true,
			slidesToScroll: 1,


		});

		$('.slider-missions').slick({
			dots: true,
			infinite: true,
			speed: 200,
			autoplay: true,
			slidesToScroll: 1,


		});



				$('.slider-forfait').slick({
					dots: true,
						infinite: true,
						speed: 2000,
					autoplay: true,
					slidesToScroll: 1,


				});


				$('.slider-contact').slick({
					dots: true,
						infinite: true,
						speed: 2000,
					autoplay: true,
					slidesToScroll: 1,


				});

		$('.slider-actu').slick({
			dots: true,
				infinite: true,
				speed: 2000,
			autoplay: true,
			slidesToScroll: 1,
			slidesToShow: 2,
			responsive: [
					{
					breakpoint: 900,
					settings: {
						slidesToShow: 1,

					}
				},
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]



		});
		$('.slider-partenaire').slick({
			dots: true,
			infinite: true,
			speed: 100,
			autoplay: true,
			slidesToScroll: 1,
			slidesToShow: 5,
			responsive: [
				  {
					breakpoint: 992,
					settings: {
						slidesToShow: 4,

					}
				},
				{
				  breakpoint: 992,
				  settings: {
					  slidesToShow: 3,

				  }
			  }
				  // You can unslick at a given breakpoint now by adding:
				  // settings: "unslick"
				  // instead of a settings object
				]
		});


		// ********************************


	});

})(jQuery, this);

new WOW().init();
