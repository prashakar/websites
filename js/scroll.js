// code snippet to allow swing animation when clicking a link to scroll
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

		$('html, body').stop().animate({
		     'scrollTop': $target.offset().top
		}, 350, 'swing');
	});
});

// scroll on page load 
$(window).load(function () {		
    if ($(window).scrollTop() < 10) {
	    $('body').delay(400) //wait 0.4 seconds then scroll page
	        .animate({
	            // animate jQuery's custom "scrollTop" style
	            // grab the value as the offset of #nav-scroll from the top of the page
	            'scrollTop': $('#nav-scroll').offset().top
	        }, 300); // animation speed
    }
});
