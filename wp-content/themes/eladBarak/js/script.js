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
		speed: 1500,
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
	jQuery('#menu-main-menu li.contact a').on('click', function(event) {
		event.preventDefault();
		var id = jQuery(this).attr('href');
		jQuery("html, body").animate({ scrollTop: jQuery(id).offset().top}, 500);
	});

	jQuery('a#action').on('click', function() {
		var id = jQuery(this).attr('href');
		jQuery("html, body").animate({ scrollTop: jQuery(id).offset().top}, 500);
	});

	// Theme switcher
	var switchNames = [];
	jQuery.each(jQuery('input[type="radio"]'), function() {
		switchNames.push(jQuery(this).val());
	});

	var time = new Date();
	var hour = time.getHours();
	if(hour > 8 && hour < 18) {
		jQuery('body').addClass('bright');
	} else {
		jQuery('body').addClass('dark');
	}

	switchElements = jQuery('input[type="radio"]');
	switchElements.on('click', function() {
		document.querySelector('body').className = jQuery(this).val();
	});

	var loaderSign = jQuery('#loader');
	var successResponseNewsletter = '<h4>Thank You!<br> We will contact you soon</h4>';
	var errorMessageNewLetter = '<h4>Email not valid!';

	//	contact signup
	jQuery('#sign').on('submit', function(event) {
		event.preventDefault();
		loaderSign.addClass('show');
		var ajax_form_data = jQuery(this).serialize();
		console.log(ajax_form_data);
		jQuery.ajax({
			url: '/wp-admin/admin-ajax.php',
			type:   'post',
			data:   ajax_form_data,
			async: true,
		}).done (function (response) {
			console.log(response);
			jQuery('#response').addClass('show');
			if(response == 1) {
				jQuery('#response').html(successResponseNewsletter);
			} else {
				jQuery('#response').html(errorMessageNewLetter);
			}
			setTimeout(removeMessage, 3000);
			loaderSign.removeClass('show');
		});
	});
});

function removeMessage() {
	jQuery('#response').removeClass('show');
}