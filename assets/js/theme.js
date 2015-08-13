jQuery(document).ready(function($){
	
	// Styles Switcher -- Remove
	$('.sidebar-toggle').click(function(){
			if($('body').hasClass('sidebar-open')) {
				$('body').removeClass('sidebar-open');
			} else {
				$('body').addClass('sidebar-open');
			}

	});

});