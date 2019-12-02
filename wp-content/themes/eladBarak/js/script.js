jQuery(window).ready(function() {
	// Detecting mobile devices
	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};

	jQuery('.gallery').slick({
		autoplay: true,
		speed: 3000,
		autoplaySpeed: 4000,
		pauseOnFocus: false,
		pauseOnHover: false,
		fade: true,
		auto: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false
	});

	// Scroll to position
	jQuery('#menu-main-menu a').on('click', function() {
		var id = jQuery(this).attr('href');
		jQuery("html, body").animate({ scrollTop: jQuery(id).offset().top}, 1500);
	});
});