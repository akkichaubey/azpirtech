jQuery(window).on('load scroll', function () {
	AOS.init({
		 once: true,
		 duration: 900,
	});
});

var headerwrap = jQuery('.header-wrap' );
jQuery(window).on('load scroll', function () {
	if ( jQuery(this).scrollTop() > 0 ) {
		headerwrap.addClass( "sticky" );
	} else {
		headerwrap.removeClass( "sticky" );
	}
});

jQuery( document ).ready( function () {
  jQuery('.btn-menu > button, .bg-overlay').on('click', function(){
		jQuery('.sidemenu').toggleClass('active');
		jQuery('.bg-overlay').toggleClass('active');
    jQuery('body').toggleClass('overflow-hidden');
	})

	

});

// hero banner
jQuery('.hero-slider').slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	speed: 900,
	autoplay: true,
	autoplaySpeed: 3000,
	pauseOnHover:false,
	prevArrow: jQuery('.home-prev'),
	nextArrow: jQuery('.home-next'),
});


// hero banner
jQuery('.portfolio-slider').slick({
	infinite: true,
	slidesToShow: 3,
  slidesToScroll: 1,
	speed: 900,
	autoplay: true,
	autoplaySpeed: 3000,
	pauseOnHover:false,
	prevArrow: jQuery('.portfolio-prev'),
	nextArrow: jQuery('.portfolio-next'),

	responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
      }
    },
		{
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 577,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});

jQuery('.testimonials-slider').slick({
	infinite: true,
	slidesToShow: 2,
  slidesToScroll: 1,
	speed: 900,
	// autoplay: true,
	// autoplaySpeed: 3000,
	// pauseOnHover:false,
	prevArrow: jQuery('.testimonial-prev'),
	nextArrow: jQuery('.testimonial-next'),

	responsive: [
		{
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 577,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});


//counter
jQuery('.count').counterUp({
	delay: 10,
	time: 1000
});