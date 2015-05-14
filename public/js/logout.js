$(document).ready(function () {
	$('#logoutLink').click(function(e) {
		$.ajax({
			type: 'get',
			url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/logout',
			success: function(data) {
				document.cookie="NIK=1;path=/;expires=Thu, 01-Jan-70 00:00:01 GMT;";
				document.cookie="activeID=null;path=/;expires=Thu, 01-Jan-70 00:00:01 GMT;";
				window.location.replace("http://e-gov-bandung.tk/");
			},
			error: function(data) {
				// alert("Request gagal diproses. Silahkan coba beberapa saat lagi");
			}
		});
	});
});