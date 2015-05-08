$(document).ready(function () {
	function check(){
		$.ajax({
		    type: 'get',
		    url: 'http://e-gov-bandung.tk/dukcapil/api/public/check/authenticated',
		    success: function(data) {
		    	console.log(data)
		    	if (data != 'false') { //redirect ke home page kalian, tp kalian juga harus login sendiri juga
		    		var url = "http://e-gov-bandung.tk/aparter/public/home?id=" + data;
		    		window.location.href = url;
		    	} else { //redirect ke alamat login kalian
		    		var url = "http://e-gov-bandung.tk/aparter/public/" 
		    		window.location.href = url
		    	}
		    },
		    error: function(data) {
		    	alert(data);
		    }
		});
	}
});