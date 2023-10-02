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