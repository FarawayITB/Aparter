$(document).ready(function () {
	var lat; var lng;	

	var myCenter=new google.maps.LatLng(-6.9012795,107.5804139);
	function initialize() {
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

	// Zoom to 9 when clicking on marker
	google.maps.event.addListener(marker,'click',function() {
		map.setCenter(marker.getPosition());
	});}

	google.maps.event.addDomListener(window, 'load', initialize);

	$(".infoparkir").on('click','div',function(){
		if (this.id!=""){
			lat = $('#lat'+this.id).val();
			lng = $('#long'+this.id).val();
		}
		myCenter=new google.maps.LatLng(lat,lng);
		initialize();
	});
});