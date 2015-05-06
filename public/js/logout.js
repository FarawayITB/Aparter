$(document).ready(function () {
	$('#logoutLink').click(function(e) {
		$.ajax({
			type: 'get',
			url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/logout',
			success: function(data) {
				window.location.replace("http://e-gov-bandung.tk/");
			},
			error: function(data) {
				alert("Request gagal diproses. Silahkan coba beberapa saat lagi");
			}
		});
	});
});