$( document ).ready(function() {
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