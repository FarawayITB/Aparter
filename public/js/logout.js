$(document).ready(function () {
	$('#logoutLink').click(function(e) {
		alert("test");
		$.ajax({
			type: 'get',
			url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/logout',
			success: function(data) {
				console.log("success");
			},
			error: function(data) {
				// alert(data);
			}
		});
	});
});