<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$.ajax({
		    type: 'get',
		    url: 'http://e-gov-bandung.tk/dukcapil/api/public/check/authenticated',
		    success: function(data) {
		    	console.log(data)
		    	if (data != 'false') { //redirect ke home page kalian, tp kalian juga harus login sendiri juga
		    		document.cookie="activeID=" + data + "; path=/";
		    		var url = "{{url()}}/home";
		    		window.location.href = url;
		    	} else { //redirect ke alamat login kalian
		    		var url = "{{url()}}/login" 
		    		window.location.href = url;
		    	}
		    },
		    error: function(data) {
		    	alert(data);
		    }
		});
	});
</script>
<div class="container">
</div>
