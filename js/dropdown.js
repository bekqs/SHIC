jQuery(document).ready(function () {
	var dropdown = jQuery('.dropdown-menu'),
		dropdownToggleLink = jQuery('a.dropdown-toggle');

	dropdownToggleLink.on('click', function(e) {
		e.preventDefault();
		if(!jQuery(this).siblings(dropdown).hasClass('is-open')){
			dropdown.removeClass('is-open');    
		};
		jQuery(this).siblings(dropdown).toggleClass('is-open');
	});
		
	jQuery(document).mouseup(function (e) {
		if (!dropdownToggleLink.is(e.target) && !dropdown.is(e.target) && dropdown.has(e.target).length == 0) {
			dropdown.removeClass('is-open');
		}
 	});
 });