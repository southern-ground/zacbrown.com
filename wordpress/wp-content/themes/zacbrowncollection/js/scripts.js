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
      $(this).toggleClass('closed');
      $('#mobile-nav-toggle').toggleClass('open');
      $('nav').toggle();
      $('div.logo').toggleClass('nav-open');
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

    // Homepage Slider:

    if($('section.content-slider').length > 0){

      var slideCount = $('#slider ul li').length;
      var slideWidth = $('#slider ul li').width();
      var slideHeight = $('#slider ul li').height();
      var sliderUlWidth = slideCount * slideWidth;
      var sliderIndex = 0;
      var slideTarget;

      var resize = function(){
        console.log('resize');
        slideWidth = $('#slider ul li').width();
        slideHeight = $('#slider ul li').height();
        sliderUlWidth = slideCount * slideWidth;
        $('#slider').css({ width: slideWidth, height: slideHeight });
        $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
      };

      $('#slider ul li:last-child').prependTo('#slider ul');

      var moveRight = function(callback) {
        $('#slider ul').animate({
          left: - slideWidth
        }, 200, function () {
          $('#slider ul li:first-child').appendTo('#slider ul');
          $('#slider ul').css('left', '');
          sliderIndex++;
          if(sliderIndex >=slideCount){
            sliderIndex = 0;
          }
          $('a.slider-pip').removeClass('active');
          $('a.slider-pip[data-index="'+sliderIndex+'"]').addClass('active');
          if(callback){
            callback();
          }
        });
      };

      var getInterval = function(){
        return setInterval(function () {
          moveRight();
        }, 7500);
      };

      var sliderInterval = getInterval();

      var navCallback = function(){
        if($('#slider ul li:nth-child(2)').data('index') !== slideTarget){
          moveRight(navCallback);
        }else{
          // Done;
          sliderInterval = getInterval();
        }
      };

      $('a.slider-pip').each(function () {
        var $this = $(this);
        $this.on("click", function (e) {
          clearInterval(sliderInterval);
          slideTarget = $(this).data('index');
          moveRight(navCallback);
          e.preventDefault();
          e.stopPropagation();
          void(0);
          return false;
        });
      });

      $('a.slider-pip[data-index="'+sliderIndex+'"]').addClass('active');

      $(window).on('resize', function(){
        resize();
      });

      resize();
    }

	});
	
})(jQuery, this);
