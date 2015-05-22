jQuery(document).ready(function($) {

	// Multi-Level Dropdown Fix
	$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
	    event.preventDefault();
	    event.stopPropagation();
	    $(this).parent().toggleClass('open');
	    $(this).parent().find("ul").parent().children("li.dropdown").toggleClass('open');
	});

	// Navigation Form Toggle
	$('.navbar-form-toggle').on('click', function(event) {
	    event.preventDefault();
	    event.stopPropagation();
	    $(this).parent().toggleClass('open');
	    $(this).parent().find("ul").parent().children("form").toggleClass('open');
	});

    // Smooth Scroll
    $('a[href^="#"]').on('click', function(event) {
        var target = $( $(this).attr('href') );
        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 600);
        }
    });

    // Scroll Check
	$(window).scroll(function() {
		// Fixed Navigation
		var windowsize = $(window).width();
		if (windowsize > 768) {
			if ($(window).scrollTop() > 0) {
			    $('body').addClass('fixed-navbar');
			} else {
			    $('body').removeClass('fixed-navbar');
			}
		}
	});

});