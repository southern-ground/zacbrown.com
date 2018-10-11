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
		
	});
	
})(jQuery, this);
