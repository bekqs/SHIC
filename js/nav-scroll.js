jQuery(window).scroll(function() {
    if (jQuery(document).scrollTop() > 100) {
      jQuery('nav').addClass('nav-smaller');
      jQuery('.dropdown-menu').addClass('dropdown-scroll');
      jQuery('#shiftnav-toggle-main.shiftnav-toggle-style-burger_only .shiftnav-toggle-burger').addClass('burger-scroll');
    } else {
      jQuery('nav').removeClass('nav-smaller');
      jQuery('.dropdown-menu').removeClass('dropdown-scroll');
      jQuery('#shiftnav-toggle-main.shiftnav-toggle-style-burger_only .shiftnav-toggle-burger').removeClass('burger-scroll');
    }
});