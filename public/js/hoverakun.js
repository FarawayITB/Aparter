$(document).ready(function () {
	$(".dropdown").hover(
	  	function () {
	    	$('ul.dropdown-menu').slideDown('medium');
	  	},

	  	function () {
	    	$('ul.dropdown-menu').slideUp('medium');
	  	}
	);
});