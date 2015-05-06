$(document).ready(function () {
	$('#logoutLink').click(function(e) {
		$.ajax({
			type: 'get',
			url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/logout',
			success: function(data) {
			},
			error: function(data) {
				// alert(data);
			}
		});
	});
});