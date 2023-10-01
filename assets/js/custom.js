jQuery(window).on('load scroll', function () {
	AOS.init({
		 once: true,
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