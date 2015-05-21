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

    // Type Kit Fonts
    (function(d) {
        var config = {
        kitId: 'vqt4hxi',
        scriptTimeout: 3000
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);

});