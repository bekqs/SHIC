jQuery(document).ready(function() {
    // Show or hide the sticky footer button
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 200) {
            jQuery('.go-top').css({'right': '2em', 'display': 'block'});
        } else {
            jQuery('.go-top').css({'right': '-6em', 'display': 'block'});
        }
    });

    // Animate the scroll to top
    jQuery('.go-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 300);
    })
});