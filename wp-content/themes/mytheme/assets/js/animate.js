jQuery(document).ready(function(){

    var header_message_height = 0;
    if(jQuery('#header_message').length){
        header_message_height = jQuery('#header_message').innerHeight();
    }

    if(jQuery(window).scrollTop() > 60 + header_message_height) {
        jQuery("body").addClass("header_fix_mobile");
    }

    jQuery(window).scroll(function () {
        if(jQuery(this).scrollTop() > 60 + header_message_height) {
            jQuery("body").addClass("header_fix_mobile");
            if (jQuery('html').hasClass('mobile')) {
                jQuery('#header').addClass('active');
            }
        } else {
            jQuery("body").removeClass("header_fix_mobile");
            if (jQuery('html').hasClass('mobile')) {
                jQuery('#header').removeClass('active');
            }
        };
    });


});
jQuery(document).ready(function(){

    var header_message_height = 0;
    if(jQuery('#header_message').length){
        header_message_height = jQuery('#header_message').innerHeight();
    }

    if(jQuery(window).scrollTop() > 200 + header_message_height) {
        jQuery("body").addClass("header_fix");
        jQuery("#header").addClass("active");
    }

    jQuery(window).scroll(function () {
        if(jQuery(this).scrollTop() > 200 + header_message_height) {
            jQuery("body").addClass("header_fix");
            jQuery("#header").addClass("active");
        } else {
            jQuery("body").removeClass("header_fix");
            if (!jQuery('body').hasClass('active_header')) {
                if (!jQuery('header').hasClass('active_mega_menu')) {
                    jQuery("#header").removeClass("active");
                }
            };
        };
    });


});