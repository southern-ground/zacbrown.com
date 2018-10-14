(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

    var scrollToTop = function(){
      $("html, body").animate({ scrollTop: 0 }, "slow");
    };

    $('.scroll-to-top').click(function(e){
      scrollToTop();
      return false;
    });

    $('#nav-toggle').click(function(e){
      $('#mobile-nav-toggle').toggleClass('open');
      $('nav').toggle();
      return false;
    });

    $('.flexslider').flexslider({
      animation: 'slide',
      slideshow: true,
      startAt: 0,
      initDelay: 5000,
      directionNav: true,
      controlNav: false,
      prevText: '',
      nextText: ''
    });

	});
	
})(jQuery, this);
