jQuery(document).ready(function() {
jQuery.noConflict();
jQuery("#books_modal").bind("submit", function() {
		
	jQuery.fancybox.showActivity();
	jQuery.fancybox.resize();
	
	
	jQuery.ajax({
	
		type		: "POST",
		cache		: false,
		url			: '/elipsengine/books/search_modal/<?php echo $member['Member']['id'];?>',
		data		: jQuery(this).serializeArray(),
		success: function(data) {
			jQuery.fancybox(data);
			
		}
		
	});
	
	//return false;
});

});
