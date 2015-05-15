$(document).ready(function () {
	var lat; var lng; var geocoder;

	var myCenter=new google.maps.LatLng(-6.9142795,107.608639);
	function initialize() {
		var mapProp = {
			center: myCenter,
			zoom:12,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker = new google.maps.Marker({
			position: myCenter
		});

		marker.setMap(map);

		google.maps.event.addListener(marker,'click',function() {
			map.setCenter(marker.getPosition());
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);

	function getUrlParameter(sParam)
	{
	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('&');
	    for (var i = 0; i < sURLVariables.length; i++) 
	    {
	        var sParameterName = sURLVariables[i].split('=');
	        if (sParameterName[0] == sParam) 
	        {
	            return 'kecamatan+'.concat(sParameterName[1].concat('+bandung'));
	        }
	    }
	}

	// mencari lokasi + marker berdasarkan keyword google
	function codeAddress(address) {
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				myCenter = results[0].geometry.location;
				initialize();
		    } else {
		      	alert('Lokasi tidak ditemukan! Pastikan anda tidak salah ketik. Status: ' + status);
		    }
	  	});
	}    

	// if searchbox variable defined
	if(getUrlParameter("searchbox")){
		geocoder = new google.maps.Geocoder();
		var mapProp = {
			center: myCenter,
			zoom:15,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		codeAddress(getUrlParameter("searchbox"));
	}
	// on Click event
	$(".infoparkir").on('click','div',function(){
		if (this.id!=""){
			lat = $('#lat'+this.id).val();
			lng = $('#long'+this.id).val();
		}
		var lokasi = document.getElementById("LatLng").value.split(",");
		myCenter=new google.maps.LatLng(lokasi[0],lokasi[1]);
		initialize();
	});
});

function setMarker(lat,lng) {
	var geocoder = new google.maps.Geocoder();
	var myCenter = new google.maps.LatLng(lat,lng);
	var mapProp = {
		center: myCenter,
		zoom:15,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker = new google.maps.Marker({
		position: myCenter
	});

	marker.setMap(map);

	google.maps.event.addListener(marker,'click',function() {
		map.setCenter(marker.getPosition());
	});
}